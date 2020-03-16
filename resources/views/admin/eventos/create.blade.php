@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row py-2">
      <div class="col-12">
        <h3 class="py-2">Cadastrando Proposta</h3>
      </div>
        <div class="form-group col-6">
          <label for="name">Setores</label>
          <select class="form-control" name="" id="">
            <option value="">Selecione um setor...</option>
          @foreach($setores as $key => $value)
            <option value="{{$value->id}}">{{$value->nome}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group col-6">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group col-6">
          <label for="email">E-mail</label>
          <input type="mail" class="form-control" name="email" value="">
        </div>
        <div class="form-group col-6">
          <label for="password">Senha</label>
          <input type="mail" class="form-control" name="password" value="">
        </div>
        <div class="form-group col-6">
          <label for="password_confirmation">Confirmar senha</label>
          <input type="mail" class="form-control" name="password_confirmation" value="">
        </div>
      </div>
      <button class="btn btn-primary btn-lg float-right">Adicionar</button>
    </div>
  </div>

@endsection