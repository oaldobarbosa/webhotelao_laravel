@extends('layouts.main')

@section('title', 'Novo Hóspede')


@section('content')

<form id="form2">
 
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Nome</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Nome" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">CPF</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" placeholder="CPF" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Telefone</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" placeholder="Telefone" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Sexo</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Sexo" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Data de Nascimento</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="inputPassword3" placeholder="Data de Mascimento" required>
        </div>
    </div>
  
      
    <div class="form-group row" id="btn-form">  
        <div class="col-sm-12"> 
            <a href="/hospedagens">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>           
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>   
    </div>
    
</form>

@endsection