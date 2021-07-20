@extends('layouts.main')

@section('title', 'Informações da Hospedagem: ' )


@section('content')



<div class="row" style="border: 1px solid; padding: 20px; margin-left: 5px; margin-right: 20px;">

    <p class="campo" p>  <label class="label-vhospedagem" for="info">CPF Hóspede:</label> <info class="info">{{ $historico->cpf_hospede }}</info></p>

    <p class="campo" p>  <label class="label-vhospedagem" for="info">Nrº Pessoas:</label> <info class="info">{{ $historico->qtd_pessoas }}</info></p>

    <p class="campo" p>  <label class="label-vhospedagem" for="info">Nrª Quarto:</label> <info class="info">{{ $historico->numero_quarto }}</info></p>
    
    <p class="campo" p>  <label class="label-vhospedagem" for="info">Valo Diária:</label> <info class="info">{{ $historico->valor_diaria }}</info></p>
       
    <p class="campo" p>  <label class="label-vhospedagem" for="info">Data Checkin:</label> <info class="info">{{ date('d/m/Y', strtotime($historico->data_hospedagem)) }}</info></p>
   
    <p class="campo" p>  <label class="label-vhospedagem" for="info">Data checkout:</label> <info class="info">{{ date('d/m/Y', strtotime($historico->data_checkout)) }}</info></p>

    <p class="campo" p>  
        <label class="label-vhospedagem" for="info">Serviços:</label>
     
        @if($historico->servicos == NULL)
            <info class="info">Sem Serviços Adicionais</info>
        @else
            <info class="info" >
                @foreach($historico->servicos as $servico)                
                    <i class="fas fa-check-square"></i> {{ $servico }}  <br>   
                @endforeach
            </info>
        @endif       
    </p>
   
    <p class="campo" p>  
        <label class="label-vhospedagem" for="info">Observações:</label>
        @if($historico->observacoes == "")
            <info class="info-ob">Sem Observações</info>
        
        @else
            <info class="info-ob">{{ $historico->observacoes }}</info>

        @endif
    </p>

    <p class="campo" p>  <label class="label-vhospedagem" for="info">Valo Total:</label> <info class="info">{{ $historico->valor_total }}</info></p>
   

    <div class=" op-view col-sm-12"> 
        <a href="/historico">
            <button type="button" class="btn btn-warning"><i class="bi bi-back" ></i> Voltar</button>
        </a>
    </div>  


</div>

@endsection