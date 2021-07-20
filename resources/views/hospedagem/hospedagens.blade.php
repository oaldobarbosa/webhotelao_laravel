@extends('layouts.main')

@section('title', 'Hospedagens')


@section('content')

<div class="col-sm-12">
    <div class="col-sm-6 btn-add">
        <a href="/hospedagens/create">
            <button type="" class="btn btn-success">Nova Hospedagem</button>
        </a>
    </div>

    <div class="col-sm-06 camp-search">
        <form action="/hospedagens" method="GET">
            <div class="form-group row">        
                <div class="input-group">
                    <input type="number" class="form-control" id="inputEmail3" name="search" placeholder="CPF do hóspede..." >

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-success"><i class="bi bi-search"></i> Search</button>
                    </div>
                </div>                                 
            </div>            
        </form>
    </div>
</div>


@if(count($hospedagens) == 0 && $search)

    <h2>Não foi possível achar nenhuma Hospedagem com o hóspede de CPF: {{ $search }}</h2>

@else

<div class="table-info-container">
    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">CPF Hospede</th>

                <th scope="col">Dt Hospedagem</th>
                
                <th scope="col">Nrº Quarto</th>
                
                <th scope="col">Status</th>
                <th scope="col">Ação</th>       
            </tr>      
        </thead>

        <tbody>
            @foreach($hospedagens as $hospedagem)
                <tr>
                    <td scope="row"> {{ $hospedagem->id }} </td>
                    <td>{{ $hospedagem->cpf_hospede }}</td>

                    <td>{{ date( 'd/m/Y' , strtotime($hospedagem->data_hospedagem)) }}</td>

                    <td>{{ $hospedagem->numero_quarto }}</td>               

                    <td>{{ $hospedagem->status }}</td>
                    <td> 
                        <a href="/hospedagens/ {{ $hospedagem->id }}" class="btn btn-success edit-btn"><i class="bi bi-eye"></i></a>
                        <a href="/hospedagens/checkout/{{ $hospedagem->id }}" class="btn btn-danger delete-btn"><i class="bi bi-door-closed"></i></a>
                    
                    </td>
                </tr>
            @endforeach 
        </tbody>
                   
    </table>

</div>

@endif

@endsection