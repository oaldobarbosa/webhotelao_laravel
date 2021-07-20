@extends('layouts.main')

@section('title', 'Quartos')


@section('content')

<div class="col-sm-12">
    
    <div class="col-sm-06 camp-search">
        <form action="/quartos" method="GET">
            <div class="form-group row">        
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Busca..."  >
                        <div class="input-group-btn">

                            <button type="submit" class="btn btn-success"><i class="bi bi-search"></i> Search</button>
                        </div>
                    </div>                                 
            </div>            
        </form>
    </div>
</div>

@if(count($quartos) == 0 && $search)

    <h2>Não foi possível achar nenhum Quarto com o número informado</h2>

@else
    <table class="table">

    <thead>
        <tr>
            
            <th scope="col">Nr Quarto</th>
            <th scope="col">Tipo</th>
            <th scope="col">Capacidade</th>
            <th scope="col">Valor Diária</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>
            
        </tr>      
    </thead>


    <tbody>
    @foreach($quartos as $quarto)
            <tr>
                
                <td> {{ $quarto->numero_quarto }} </td>
                <td> {{ $quarto->tipo }} </td>
                <td> {{ $quarto->qtd_pessoas }} </td>
                <td> {{ $quarto->valor_diaria }} </td>
                <td> {{ $quarto->status }} </td>

                <td>
                    @if($quarto->status == 'livre')
                    <a href="/quartos/edit/{{ $quarto->numero_quarto }}" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                    @endif                 
                </td>
            </tr>
        @endforeach  
    </tbody>


    </table>

    <p>* Para alterar o valor, o quarto tem de estar livre.</p>

@endif
@endsection