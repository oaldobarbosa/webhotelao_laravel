@extends('layouts.main')

@section('title', 'EditarInformações do Hóspede')


@section('content')

<form id="form2">
 
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Nome</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputPassword3" value="Aldp" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">CPF</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" value="07564812456" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Telefone</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" value="77991054875" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Sexo</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPassword3" value="Masculino" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Data de Nascimento</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="inputPassword3" value="10/10/2010" required>
        </div>
    </div>
  
      
    <div class="form-group row" id="btn-form">  
        <div class="col-sm-12"> 
            <a href="/hospedes">
                <button type="button" class="btn btn-success">Salvar</button>
            </a>           
            <button type="submit" class="btn btn-danger">Cancelar</button>
        </div>   
    </div>
    
</form>

@endsection