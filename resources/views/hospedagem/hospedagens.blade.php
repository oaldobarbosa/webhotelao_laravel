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
        <th scope="col">CPF Hóspede</th>
        <th scope="col">Dt Hospedagem</th>
        <!--<th scope="col">Dt Checkout</th>-->
        <th scope="col">Nrº Quarto</th>
        <!--<th scope="col">Valor</th>-->
        <th scope="col">Ação</th>       
    </tr>      
</thead>


<tbody>
   {{--  @foreach($quartos as $quarto) --}}
        <tr>
            <td scope="row"> 1</td>
            <td>045452221</td>
            <td>10/08/2021</td>
            <!--<td>12/08/2021</td>-->
            <td>4</td>
            <!--<td>R$:55,00</td>-->
            <td> 
                <a href="" class="btn btn-warning edit-btn"><i class="bi bi-pencil-square"></i></a>

                <form action="/hospedagens/checkout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><i class="bi bi-door-closed" ></i></button>
                </form>                 
            </td>
        </tr>
    {{-- @endforeach   --}}     
</tbody>


</table>

</div>
@endsection