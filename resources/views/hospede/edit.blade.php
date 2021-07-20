@extends('layouts.main')

@section('title', 'Editando: '. $hospede->nome )


@section('content')

<form id="form2" action="/hospedes/update/{{ $hospede->cpf_hospede }}" method="POST">

    @csrf
    @method('PUT')
 
    <div class="form-group row">
        <label for="nome" class="col-sm-3 col-form-label">Nome</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $hospede->nome }}" placeholder="Nome" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="cpf" class="col-sm-3 col-form-label">CPF</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" name="cpf_hospede" id="cpf_hospede" value="{{ $hospede->cpf_hospede }}" placeholder="CPF" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="telefone" class="col-sm-3 col-form-label">Telefone</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" name="telefone" id="telefone" value="{{ $hospede->telefone }}" placeholder="Telefone" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>       
        <div class="col-sm-9">    
            <select name="sexo" id="sexo" value="{{ $hospede->sexo }}" class="form-control">

                <option value="Masculino" 
                    @if($hospede->sexo == 'masculino') {{ "selected" }} @endif 
                >Masculino</option>

                <option value="Feminino"
                    @if($hospede->sexo == 'feminino') {{ "selected" }} @endif
                >Feminino</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Data de Nascimento</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="{{ $hospede->data_nascimento }}" placeholder="Data de Mascimento" required>
        </div>
    </div>
  
      
    <div class="form-group row" id="btn-form">  
        <div class="col-sm-12"> 
            <a href="/hospedes">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>           
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>   
    </div>
    
</form>

@endsection