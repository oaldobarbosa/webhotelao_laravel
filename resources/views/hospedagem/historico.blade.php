@extends('layouts.main')

@section('title', 'Historico')


@section('content')

<div class="col-sm-12">
    
    <div class="col-sm-06 camp-search">
        <form action="post">
            <div class="form-group row"> 
                    
                    <div class="input-group">
                        <label for="" class="col-sm-2 col-form-label">Data Inicial: </label>
                        <input type="date" class="form-control" id="inputEmail3" placeholder="" required >

                        <label for="" class="col-sm-2 col-form-label">     Data Final: </label>
                        <input type="date" class="form-control" id="inputEmail3" placeholder="" required >
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
        <th scope="col">CPF Hóspede</th>
        <th scope="col">Dt Hospedagem</th>
        <th scope="col">Dt Checkout</th>
        <th scope="col">Nrº Quarto</th>
        <th scope="col">Valor</th>
        <th scope="col">Ação</th>       
    </tr>      
</thead>


<tbody>
    @foreach($historicos as $historico)
        <tr>
            <td scope="row">{{ $historico->id }}</td>
            <td> {{ $historico->cpf_hospede }} </td>
            <td>{{ $historico->data_hospedagem }}</td>
            <td> {{ $historico->data_checkout }} </td>
            <td> {{ $historico->numero_quarto }} </td>
            <td> {{ $historico->valor_total }} </td>
            <td> 
                <a href="/historico/{{ $historico->id }}" class="btn btn-success view-btn"><i class="bi bi-eye"></i></a>              
            </td>
        </tr>
    @endforeach    
</tbody>


</table>

@endsection