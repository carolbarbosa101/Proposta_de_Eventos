@extends('layouts.app')

@section('content')
  <form action="{{route('secretarias.store')}}" method="POST">
  @csrf
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <h3 class="py-2">Cadastrando Secretarias</h3>
            </div>
            @include('admin.Secretarias.form')
        </div>
        <button class="btn btn-primary btn-lg float-right">Adicionar</button>
    </div>

  </form>
@endsection
