@extends('layouts.main')

@section('title', 'Hospedes')


@section('content')

<div class="col-sm-12">
    <div class="col-sm-6 btn-add">
        <a href="/hospedes/create">
            <button type="" class="btn btn-success">Novo Hóspede</button>
        </a>
    </div>

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

<div class="table-info-container">



<table class="table">

<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Telefone</th>
        <th scope="col">Sexo</th>
        <th scope="col">DT Nascimento</th>
        <th scope="col">Ação</th>
        
    </tr>      
</thead>


<tbody>
   @foreach($hospedes as $hospede)
        <tr>
            <td scope="row">{{ $hospede->id }}</td>
            <td>{{ $hospede->nome }}</td>
            <td>{{ $hospede->cpf }}</td>
            <td>{{ $hospede->telefone }}</td>
            <td>{{ $hospede->sexo}}</td>
            <td>{{ date( 'd/m/Y' , strtotime($hospede->data_nascimento)) }}</td>

            <td>
                <a href="/hospedes/{{ $hospede->id }}" class="btn btn-success view-btn"><i class="bi bi-eye"></i></a> 

                <a href="/hospede/edit" class="btn btn-warning edit-btn"><i class="bi bi-pencil-square"></i></a> 
                
                <form action="/hospedes/{{ $hospede->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach  
</tbody>


</table>

</div>
@endsection