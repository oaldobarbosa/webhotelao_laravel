@extends('layouts.main')

@section('title', 'Editando o Quarto: ' . $quarto->numero_quarto )


@section('content')

<form id="form2" action="/quartos/update/{{ $quarto->numero_quarto }}" method="POST">

    @csrf
    @method('PUT')
 
    <div class="form-group row">
        <label for="nome" class="col-sm-3 col-form-label">Numero:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="numero_quarto" id="nome" value="{{$quarto->numero_quarto}}" placeholder="Número" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="cpf" class="col-sm-3 col-form-label">Tipo:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="tipo" id="cpf" value="{{$quarto->tipo}}" placeholder="CPF" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="telefone" class="col-sm-3 col-form-label">Valor Diária:</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" name="valor_diaria" id="telefone" value="{{$quarto->valor_diaria}}" placeholder="Telefone" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Status:</label>
        <div class="col-sm-9">
            <div class="form-control" style="background-color: #c4c4c4;">{{$quarto->status}}</div>
            <!--<input type="text" class="form-control" name="status" id="" value="{{$quarto->status}}" placeholder="" >-->
        </div>
    </div>
  
      
    <div class="form-group row" id="btn-form">  
        <div class="col-sm-12"> 
            <a href="/quartos">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>           
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>   
    </div>
    
</form>

@endsection