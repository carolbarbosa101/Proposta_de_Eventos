<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\SecretariaRepositoryInterface;
use Validator;

class SecretariaController extends Controller
{
    private $route = 'secretarias';
    private $page = 'Secretarias';
    private $paginate = 20;
    private $search = ['id','nome','sigla','responsavel','email'];
    private $model;

    public function __construct(SecretariaRepositoryInterface $model){
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $columnList = ['id'=>'#','nome'=>'Nome','sigla'=>'Sigla','responsavel'=>'Responsável','email'=>'E-mail'];
        
        $search = "";
        if(isset($request->search)){
          $search = $request->search;
          $list = DB::table('secretarias')->where('id', 'like', "%{$search}%")->get();
        }else{
          $list = DB::table('secretarias')->paginate(15);
        }
        //dd($list)
        $page = $this->page;

        $routeName = $this->route;

        $breadcrumb= [
            (object)['url'=>route('home'),'title'=>'Home'],
            (object)['url'=>'','title'=>'Gerencia de Secretarias'],
        ];

        return view('admin.'.$routeName.'.index',compact('list','search','page','routeName','columnList', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = $this->page;
        $routeName = $this->route;

        $breadcrumb= [
            (object)['url'=>route('home'),'title'=>'Home'],
            (object)['url'=>route('secretarias.index'),'title'=>'Gerencia de Secretarias'],
            (object)['url'=>'','title'=>'Cadastro de Secretarias'],
        ];

        return view('admin.'.$routeName.'.create',compact('page','routeName', 'breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("ok");
        $data= $request->all();

        Validator::make($data, [
            'nome' => 'required|string|max:100',
            'sigla' => 'required|string|max:5',
            'responsavel' => 'required|string|max:100',
            'email' => 'required|string|max:100',
        ])->validate();

        if($this->model->create($data)){
            $request->session()->flash('msg', 'Registro adicionado com sucesso!');
            $request->session()->flash('status', 'success');
            return redirect()->back();
        }else{
            $request->session()->flash('msg', 'Erro ao adicionar o Registro!');
            $request->session()->flash('status', 'error');
            return redirect()->back();
        }
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
