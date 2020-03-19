<div class="form-group col-6">
    <label for="nome">Nome da Secretaria</label>
    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}">
    @error('nome')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group col-6">
    <label for="sigla">Sigla</label>
    <input type="text" class="form-control @error('sigla') is-invalid @enderror" name="sigla" value="{{old('sigla')}}">
    @error('sigla')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group col-6">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control @error('responsavel') is-invalid @enderror" name="responsavel" value="{{old('responsavel')}}">
    @error('responsavel')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group col-6">
    <label for="email">E-mail</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
