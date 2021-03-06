@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-2 justify-content-center">
        <div class="col-md-12">

            @breadcrumb_component(['page'=>$page, 'items'=>$breadcrumb ?? []])
            @endbreadcrumb_component

            <h1>Gerencia de Secretarias</h1>

            @alert_component(['msg'=>session('msg'), 'status'=>session('status')])
            @endalert_component

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