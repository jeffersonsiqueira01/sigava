<?php

namespace App\Http\Controllers;

use App\Acabamento;
use App\Conservacao;
use App\Contact;
use App\Endereco;
use App\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //valida as propriedades cadastradas do usuário
        $properties = Property::where('userlanc_id', Auth::user()->id)->get();
        return view('app.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::where('user_id', Auth::user()->id)->get();
        return view('app.property.create.coleta', compact('contacts'));
    }

    public function createDadosColeta()
    {
        return view('app.property.create.coleta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'usercoleta'=>'required',
            'contact_id' => 'required',
            'objetivo' =>'required',
            'vltotal' => 'required',
            'dtcoleta' => 'required',
            'cep' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf'=> 'required',
        ]);

        //Converter Data para padrão BR
        $dtcoleta = Carbon::parse($request->dtcoleta)->format('Y-m-d');
        
        $address = new Endereco();
        $address->cidade = $request->get('cidade');
        $address->uf = $request->get('uf');
        $address->rua = $request->get('rua');
        $address->numero = $request->get('numero');
        $address->bairro = $request->get('bairro');
        $address->complemento = $request->get('complemento');
        $address->cep = $request->get('cep');
        $address->ibge = $request->get('ibge');
        $address->status = 'A';
        
        $address->save();

        $property = new Property();

        $property->userlanc_id = Auth::user()->id;
        $property->usercoleta = $request->get('usercoleta');
        $property->contact_id = $request->get('contact_id');
        $property->address_id = $address->id;
        $property->objetivo = $request->get('objetivo');
        $property->vltotal = $request->get('vltotal');
        $property->dtcoleta = $dtcoleta;
        $property->situacao = 'P';

        $property->save();

        $property_id = $property->id;
        
        return redirect()->route('createStep2', ['id' => Property::findorfail($property_id)]);
    }

    public function createMaintenance($id)
    {

        $acabamentos = Acabamento::where('status', "A")->get();
        $conservacoes = Conservacao::where('status', "A")->get();
        $property = Property::findorfail($id);
        if($property->situacao === "A" or $property->userlanc_id <> Auth::user()->id )
            {
                return redirect()->back();
            }
        else
        {
        return view('app.property.create.maintenance', compact( 'property', 'acabamentos', 'conservacoes'));
        }
    }

    public function storeMaintenance(Request $request, $id)
    {
        $request->validate([
            'areaconstruida' => 'required',
            'areaterreno' => 'required',            
            'macrolocalizacao' => 'required',
            'acabamento_id' => 'required',
            'conservacao_id' => 'required',
            'idadeaparente' => 'required',
        ]);

        //formata valor digitado pelo usuário para o padrao aceito pelo DB
        $areaconstruida = str_replace(',','.',$request->areaconstruida);
        $areaterreno = str_replace(',', '.', $request->areaterreno);


        //inicio calculo da depreciacao
        $padraoacabamento = Acabamento::find($request->acabamento_id);
        $conservacao = Conservacao::find($request->conservacao_id);
        
        $residual =round(($request->idadeaparente/60),9);
        
        $valorconservacao = ($conservacao->coef)/100;
        $valorunitario = $padraoacabamento->cub;
        
        //calculando a raiz quadrada do residual
        $residual4depreciacao = pow($request->idadeaparente/60,2);
        
        //parte 1 do calculo: formula  =(1/2*(E18/F18+(E18/F18)^2)
        $part1 = round(((1/2*($residual + $residual4depreciacao))), 9);
        //parte 2 do calculo: formula (1-1/2*(E18/F18+(E18/F18)^2))
        $part2 = round((1-1/2*($residual + $residual4depreciacao)), 9);
        //parte 3 do calculo (1-$H18)
        $part3 = round((1-$residual),9);
        
        //Calculo para depreciação
        $depreciacao = 
        1-($part1+($part2*$valorconservacao))*($part3);
        //fim do calculo da depreciacao
        
        //transforma o valor da depreciacao em percentual
        $percdepreciacao = ($depreciacao*100);
        //depois de transformar em % faz o arredondamento das casas decimais
        $arredondamentodep = round($percdepreciacao, 1);
        
        //calculo do valor R$ da depreciacao
        $vldepreciacao = number_format(((($depreciacao*100)*$valorunitario)/100), 2, '.', '');
        
        
        
        $property = Property::findorfail($id);
        $property->areaconstruida = $areaconstruida;
        $property->areaterreno = $areaterreno;
        $property->indicefiscal = $request->get('indicefiscal');
        $property->macrolocalizacao = $request->get('macrolocalizacao');
        $property->distanciapolo = $request->get('distanciapolo');
        $property->acabamento_id = $request->get('acabamento_id');
        $property->conservacao_id = $request->get('conservacao_id');
        $property->idadeaparente = $request->get('idadeaparente');
        $property->custoreedicao = $vldepreciacao;
        $property->save();

        return redirect()->route('createStep3', ['id' => Property::findorfail($id)]);
    }

    public function createPlus($id)
    {
        $property = Property::findorfail($id);
        return view('app.property.create.plus', compact( 'property'));
    }

    public function storePlus(Request $request, $id)
    {
        $request->validate([
            'numquarto' => 'required',
            'numsuite' => 'required',
            'numgaragem' => 'required',
            'numbanheiro' => 'required',
            'condominio' => 'required',
        ]);

        $property = Property::findorfail($id);
        $property->numquarto = $request->get('numquarto');
        $property->numsuite = $request->get('numsuite');
        $property->numgaragem = $request->get('numgaragem');
        $property->numbanheiro = $request->get('numbanheiro');
        $property->condominio = $request->get('condominio');
        $property->equipamentos = $request->get('equipamentos');
        $property->obs = $request->get('obs');
        $property->situacao = 'A';
        $property->save();

        return redirect('/sigava/imovel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        $padraoacabamento = Acabamento::find($property->acabamento_id);
        $conservacao = Conservacao::find($property->conservacao_id);
        
        $residual = round(($property->idadeaparente/60),9);
        $percresidual = round(($residual*100));

        $valorconservacao = ($conservacao->coef)/100;
        $valorunitario = $padraoacabamento->cub;

        //calculando a raiz quadrada do residual
        $residual4depreciacao = pow($property->idadeaparente/60,2);

        //parte 
        $part1 = round(((1/2*($residual + $residual4depreciacao))), 9);
        $part2 = round((1-1/2*($residual + $residual4depreciacao)), 9);
        $part3 = round((1-$residual),9);
        
        
        
        //Calculo para depreciação
        $depreciacao = 
        1-($part1+($part2*$valorconservacao))*($part3);
        //fim do calculo da depreciacao

        //transforma o valor da depreciacao em percentual
        $percdepreciacao = ($depreciacao*100);
        //depois de transformar em % faz o arredondamento das casas decimais
        $arredondamentodep = round($percdepreciacao, 1);

        //calculo do valor R$ da depreciacao
        $vldepreciacao = number_format(((($depreciacao*100)*$valorunitario)/100), 2, '.', '  ');
       
        return view('app.property.show', compact('property', 'depreciacao', 'residual', 'percresidual', 'padraoacabamento', 'valorconservacao', 'valorunitario', 'arredondamentodep', 'vldepreciacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
