@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light my-3 d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Listar eventos</li>
                <li class="breadcrumb-item active" aria-current="page">Vizualizar Respostas</li>
                </ol>
            </nav>

            <h1>Gerenciando Eventos</h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-inline" method="GET" action="{{route($routeName.'.index')}}">
                <div class="form-group mb-2 mr-auto">
                <button href="#" type="button" class="btn btn-primary btn-lg">Cadastrar</button>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                <input type="search" class="form-control" name="search" placeholder="Buscar..." value="{{$search}}">
                </div>
                <button type="submit" class="btn btn-outline-success">Buscar</button>
                <a type="button" class="btn btn-outline-dark" href="{{route($routeName.'.index')}}">Limpar Busca</a>
                
            </form>



            <table class="table">
                <thead>
                <tr>
                    @foreach ($columnList as $key => $value)
                    <th scope="col">{{$value}}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach ($list as $key => $value)

                    <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->setor_id}}</td>
                    <td>{{$value->municipio_id}}</td>
                    <td>{{$value->data_id}}</td>
                    <td>{{$value->titulo}}</td>
                    <td>{{$value->descricao}}</td>
                    <td>{{$value->data_inicio}}</td>
                    <td>{{$value->data_fim}}</td>
                    <td>{{$value->data_limite}}</td>
                    <td>{{$value->local}}</td>
                    <td>{{$value->endereco}}</td>
                    <td>{{$value->cep}}</td>
                    <td>{{$value->obs}}</td>

                    </tr>
                @endforeach


                </tbody>
            </table>
            @if (!$search && $list)
                <div class="">
                {{$list->links()}}
                </div>
            @endif

        </div>
    </div>
</div>
@endsection