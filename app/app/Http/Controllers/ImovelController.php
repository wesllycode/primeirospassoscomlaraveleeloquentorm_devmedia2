<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use Validator;

class ImovelController extends Controller
{

    protected function validarImovel($request){
        $validator = Validator::make($request->all(),[
           "descricao" => "required",
            "empresaImovel" => "required",
            "paisEndereco" => "required",
            "estadoEndereco" => "required",
            "cidadeEndereco" => "required",
            "logradouroEndereco" => "required",
            "bairroEndereco" => "required",
            "numeroEndereco" => "required | numeric",
            "cepEndereco" => "required" ,
            "pontoReferenciaEndereco" => "required",
            "imgImovel" => "required",
            "preco" => "required",
            "qtdQuartos" => "required | numeric",
            "qtdJanelas" => "required | numeric",
            "qtdLampadas" => "required | numeric",
            "qtdBanheiro" => "required | numeric",
            "garagem" => "required",
            "tipo" => "required",
            "finalidade" => "required"
        ]);
        return $validator;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarImovel($request);
        if($validator->fails()){
            return redirect()->back()->withErros($validator->errors());
        }
        $dados = $request->all();
        Imovel::create($dados);
        return redirect()->route('imoveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
