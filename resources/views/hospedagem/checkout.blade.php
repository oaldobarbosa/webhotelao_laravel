@extends('layouts.main')

@section('title', 'Checkout Cliente: 1')


@section('content')



<form id="form2" action="/hospedagens/update/{{ $hospedagem->id }}"  method="POST" name="form2" style="border: 1px solid; border-radius: 15px; padding: 20px;">

    @csrf
    @method('PUT')

    <h2 style="font-size: 20px;">Resumo Hospedagem</h2>
    <hr>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Hóspede</label>

        <div class="col-sm-9">
            <div class="input-group">
                
                <div class="form-control">{{$hospedagem->cpf_hospede }}</div>
                                
            </div>            
        </div>        
    </div>

    <div class="form-group row">

        <label for="inputPassword3" class="col-sm-3 col-form-label">Qtd. Pessoas</label>
        <div class="col-sm-2">
            <div class="form-control">{{$hospedagem->qtd_pessoas }}</div>
        </div>

        <div class="col-sm-1" style="border-right: 1px solid; border-left: 1px solid; margin-left:20px; margin-right:20px; width: 20px; height: 40px;"></div>


        <label for="inputPassword3" class="col-sm-3 col-form-label">Nr. Quarto:</label>
        <div class="col-sm-2">
            <div class="form-control">{{$hospedagem->numero_quarto }}</div>   
        </div>

    </div>


 

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Serviços:</label>
        <div class="col-sm-9">
          
            @if($hospedagem->servicos == NULL)
                <div class="form-control">Sem Serviços Adicionais</div>
            @else               
                @foreach((array)$hospedagem->servicos as $servico)                
                    <i class="fas fa-check-square"></i> {{ $servico }} ||
                @endforeach              
            @endif
           
        </div>
    </div>

   
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Observações:</label>
        <div class="col-sm-9">

            @if($hospedagem->observacoes == "")
                <div class="form-control">Sem Observações</div>      
            @else
                <div class="form-control">{{$hospedagem->observacoes }}</div>                
            @endif

        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Valor Diária:</label>
        <div class="col-sm-9">
            <input name="valor_diaria" class="form-control" id="valor_diaria" value="{{$hospedagem->valor_diaria}}" readonly >
  
        </div>
    </div>


    <div class="form-group row">

        <label for="inputPassword3" class="col-sm-3 col-form-label">Hospedagem:</label>
        <div class="col-sm-3">
            <input name="data_checkout" class="form-control" id="data_checkin" value="{{ $hospedagem->data_hospedagem }}" readonly >
        </div>

        <div class="col-sm-1" style="border-right: 1px solid; border-left: 1px solid; margin-left:10px; margin-right:10px; width: 20px; height: 40px;"></div>

        <label for="inputPassword3" class="col-sm-2 col-form-label">Checkout:</label>
        <div class="col-sm-3">
            <input name="data_checkout" class="form-control" id="data_checkout" value="{{ $hoje }}" readonly >
        </div>

    </div>


    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Quantidade Dias</label>
        <div class="col-sm-9">

            <input class="form-control" name="qtd_dias" id="qtd_dias" type="number" value="{{ $value }}" readonly >


        </div>
    </div>

    <hr>
    <hr>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Gastos Adicionais</label>
        <div class="col-sm-9">
            <input type="number" name="gastos_adicionais" class="form-control" id="gastos_adicionais" placeholder="Gastos Adicionais?" >
        </div>
    </div>


    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Desconto(%)</label>
        <div class="col-sm-9">
            <select name="desconto" id="desconto" class="form-control">

                <option value="" selected>Desconto...</option>

                <option value="10">10 %</option>
                <option value="15">15 %</option>
                <option value="20">20 %</option>

            </select>
            
            <!--<input type="number" name="desconto" class="form-control" id="inputPassword3" placeholder="% de Desconto?" >-->
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Valor Total</label>
        <div class="col-sm-9">
            <input type="number" name="valor_total" value="" class="form-control"  id="valor_total" readonly>
        </div>
    </div>


    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Forma Pagamento</label>
        <div class="col-sm-9">

            <select name="forma_pagamento" id="qtd_pessoas" class="form-control" required>

                <option value="" selected>Forma de Pagamento...</option>
                <option value="vista">À vista</option>
                <option value="cartao">Cartão</option>

            </select>
            
        </div>
    </div>

    <input type="text" name="status" value="finalizada" hidden>


    <!-- FORM ROW -->
        
    <div class="form-group row" id="btn-form">  
        <div class="col-sm-12"> 
            <a href="/hospedagens">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>           
            <button type="submit" class="btn btn-success">Finalizar Hospedagem</button>
        </div>   
    </div>
  
</form>

<script>
    var d1 = document.getElementById('data_checkin').value;
    var d2 = document.getElementById('data_checkout').value;

    var diff = moment(d2, "DD/MM/YYYY").diff(moment(d1, "DD/MM/YYYY"));

    var dias = moment.duration(diff).asDays();

    console.log(dias);

</script>

<script>

    var qtd_dias = document.getElementById('qtd_dias').value;

    var valor_diaria = document.getElementById('valor_diaria').value;

    var valor_t = Number(qtd_dias) * Number(valor_diaria);

    document.getElementById('valor_total').value = valor_t;
    
</script>

<script>
    
document.getElementById("gastos_adicionais").onkeyup = function(e) {
    var gastos_adicionais = document.getElementById('gastos_adicionais').value;
    var valor_adicional = Number(valor_t) + Number(gastos_adicionais);
    document.getElementById('valor_total').value = valor_adicional;

};

</script>

<script>
    $("#desconto").change(function(){
            var desconto = $("#desconto option:selected").val();
            var valor_total = document.getElementById('valor_total').value;

            if (desconto == 10) {
                
                document.getElementById('valor_total').value = valor_total - ((valor_total * desconto)/100);
                
            } else if (desconto == 15){
                var vf = valor_total - ((valor_total * desconto)/100);
                document.getElementById('valor_total').value = vf;
                
            } else if (desconto == 20){
                var vf = valor_total - ((valor_total * desconto)/100);
                document.getElementById('valor_total').value = vf;
            }
                
    });
</script>

@endsection

