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
   {{--  @foreach($quartos as $quarto) --}}
        <tr>
            <td scope="row"> 1</td>
            <td>045452221</td>
            <td>10/08/2021</td>
            <td>12/08/2021</td>
            <td>4</td>
            <td>R$:55,00</td>
            <td> 
                <a href="" class="btn btn-success view-btn"><i class="bi bi-eye"></i></a>

                <!--<form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><i class="bi bi-trash"></i></button>
                </form>-->               
            </td>
        </tr>
    {{-- @endforeach   --}}     
</tbody>


</table>

@endsection