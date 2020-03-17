@extends('layouts.app')

@section('content')
<form class=" " method="GET" action="{{route($routeName.'.create')}}">
  <div class="container">
    <div class="row py-2">
      <div class="col-12">
        <h3 class="py-2">Cadastrando Secretarias</h3>
      </div>
        <div class="form-group col-6">
          <label for="nome">Nome da Secretaria</label>
          <input type="text" class="form-control" name="nome" value="">
        </div>
        <div class="form-group col-6">
          <label for="sigla">Sigla</label>
          <input type="text" class="form-control" name="sigla" value="">
        </div>
        <div class="form-group col-6">
          <label for="responsavel">Responsável</label>
          <input type="text" class="form-control" name="responsavel" value="">
        </div>
        <div class="form-group col-6">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" value="">
        </div>
      </div>
      <button class="btn btn-primary btn-lg float-right">Adicionar</button>
    </div>
  </div>
</form>
@endsection