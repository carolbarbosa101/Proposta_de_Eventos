<div class="form-group col-6">
    <label for="nome">Nome da Secretaria</label>
    <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}">
</div>
<div class="form-group col-6">
    <label for="sigla">Sigla</label>
    <input type="text" class="form-control @error('sigla') is-invalid @enderror" name="sigla" value="{{old('sigla')}}">
</div>
<div class="form-group col-6">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control @error('responsavel') is-invalid @enderror" name="responsavel"
        value="{{old('responsavel')}}">
</div>
<div class="form-group col-6">
    <label for="email">E-mail</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
</div>
