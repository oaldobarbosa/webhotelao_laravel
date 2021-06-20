@extends('layouts.main')

@section('title', 'Quartos')


@section('content')

<div class="col-sm-12">
    
    <div class="col-sm-06 camp-search">
        <form action="post">
            <div class="form-group row">        
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Busca..." required >
                        <div class="input-group-btn">

                            <button type="submit" class="btn btn-success"><i class="bi bi-search"></i> Search</button>
                        </div>
                    </div>                                 
            </div>            
        </form>
    </div>
</div>

<table class="table">

<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nr Quarto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Valor Diária</th>
        <th scope="col">Status</th>
        <th scope="col">Ação</th>
        
    </tr>      
</thead>


<tbody>
   @foreach($quartos as $quarto)
        <tr>
            <td scope="row"> {{ $quarto->id  }} </td>
            <td> {{ $quarto->numero }} </td>
            <td> {{ $quarto->tipo }} </td>
            <td> {{ $quarto->valor_diaria }} </td>
            <td> {{ $quarto->status }} </td>

            <td> 
                <a href="" class="btn btn-warning edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>                 
            </td>
        </tr>
    @endforeach  
</tbody>


</table>

@endsection