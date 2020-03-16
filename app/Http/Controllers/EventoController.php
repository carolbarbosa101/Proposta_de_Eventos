<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    private $route = 'eventos';
    private $page = 'Eventos';
    private $paginate = 20;
    private $search = ['setor_id','municipio_id','data_id','titulo','descricao','data_inicio','data_fim','local','endereco','cep','obs'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $columnList = ['id'=>'#','setor_id'=>'Setor','municipop_id'=>'Municipio','data_id'=>'Data',
        'titulo'=>'Titulo', 'descricao'=>'Descrição', 'data_inicio'=>'Data de Início', 'data_fim'=>'Data Final',
        'data_limite'=>'Data limite','local'=>'Local', 'endereco'=>'Endereço','cep'=>'CEP', 'obs'=>'Observação'];

        $search = "";
        if(isset($request->search)){
          $search = $request->search;
          $list = DB::table('eventos')->where('setor_id', 'like', "%{$search}%")->get();
        }else{
          $list = DB::table('eventos')->paginate(15);
        }
        //dd($list)
        $page = $this->page;

        $routeName = $this->route;

        return view('admin.'.$routeName.'.index',compact('list','search','page','routeName','columnList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routeName = $this->route;

        $setores = $list = DB::table('setores')->get();

        return view('admin.'.$routeName.'.create', compact('setores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
