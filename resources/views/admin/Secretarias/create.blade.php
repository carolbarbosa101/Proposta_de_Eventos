@extends('layouts.app')

@section('content')
  <form action="{{route('secretarias.store')}}" method="POST">
  @csrf
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                @breadcrumb_component(['page'=>$page, 'items'=>$breadcrumb ?? []])
                @endbreadcrumb_component
                <h3 class="py-2">Cadastro de Secretarias</h3>
                @alert_component(['msg'=>session('msg'), 'status'=>session('status')])
                @endalert_component
            </div>
            @include('admin.Secretarias.form')
        </div>
        <button class="btn btn-primary btn-lg float-right">Adicionar</button>
    </div>

  </form>
@endsection
