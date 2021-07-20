@extends('layouts.main')

@section('title', 'Informações da Hospedagem: ' . $hospedagem->id)


@section('content')

<p>Informações Parciais de Hospedagem: </p>

<div class="row" style="border: 1px solid;border-radius: 15px; padding: 20px; margin-left: 5px; margin-right: 20px;">

    <p class="campo" p>  <label class="label-vhospedagem" for="info">Nr. Quarto:</label> <info class="info">{{ $hospedagem->numero_quarto }}</info></p>
    <p class="campo" p>  <label class="label-vhospedagem" for="info">Qtd. Pessoas:</label> <info class="info">{{ $hospedagem->qtd_pessoas }}</info></p>

    <p class="campo" p>  <label class="label-vhospedagem" for="info">CPF Hóspede:</label> <info class="info">{{ $hospedagem->cpf_hospede }}</info></p>

    <p class="campo" p>  <label class="label-vhospedagem" for="info">Data Checkin:</label> <info class="info">{{  date( 'd/m/Y' , strtotime($hospedagem->data_hospedagem)) }}</info></p>
   
    <p class="campo" p>  <label class="label-vhospedagem" for="info">Valo Diária:</label> <info class="info">{{ $hospedagem->valor_diaria }}</info></p>
    
    <p class="campo" p>  
        <label class="label-vhospedagem" for="info">Observações:</label>
        @if($hospedagem->observacoes == "")
            <info class="info-ob">Sem Observações</info>
        
        @else
            <info class="info-ob">{{ $hospedagem->observacoes }}</info>

        @endif
    </p>

    <p class="campo" p>  <label class="label-vhospedagem" for="info">Status:</label> <info class="info">{{ $hospedagem->status }}</info></p>

    <p class="campo" p>  
        <label class="label-vhospedagem" for="info">Serviços:</label>
     
        @if($hospedagem->servicos == NULL)
            <info class="info">Sem Serviços Adicionais</info>
        @else
            <info class="info" >
                @foreach((array)$hospedagem->servicos as $servico)                
                    <i class="fas fa-check-square"></i> {{ $servico }}  <br>   
                @endforeach
            </info>
        @endif       
    </p>


        
    

    

    <div class=" op-view col-sm-12"> 
        <a href="/hospedagens/checkout/{{ $hospedagem->id }}">
            <button type="button" class="btn btn-danger"><i class="bi bi-door-closed" ></i>Checkout</button>
        </a>
    </div>  


</div>

@endsection

