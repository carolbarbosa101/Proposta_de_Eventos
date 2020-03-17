@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light my-3 d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Secretarias</li>
                </ol>
            </nav>

            <h1>Gerenciando Secretarias</h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-inline mb-3" method="GET" action="{{route($routeName.'.index')}}">
                <div class="form-group mr-auto">
                    <a href="{{route($routeName.'.create')}}" class="btn btn-primary btn-lg">Cadastrar</a>
                </div>
                <div class="form-group mx-sm-3">
                    <input type="search" class="form-control" name="search" placeholder="Buscar..." value="{{$search}}">
                </div>
                <button type="submit" class="btn btn-outline-success">Buscar</button>
                <a type="button" class="btn btn-outline-dark ml-2" href="{{route($routeName.'.index')}}">Limpar Busca</a>
                
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
                    <td>{{$value->nome}}</td>
                    <td>{{$value->sigla}}</td>
                    <td>{{$value->responsavel}}</td>
                    <td>{{$value->email}}</td>

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