@extends('layouts.main')

@section('title', 'Nova Hospedagem')

@section('content')
<form id="form2" action="/hospedagens" name="form2" method="POST">

    @csrf

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Hóspede</label>

        <div class="col-sm-9">
            <div class="input-group">
                                
                <select name="cpf_hospede" id="cpf_hospede" class="form-control" required>
                    
                    <option value="" style="color: #c4c4c4 ;">Selecione o Hóspede</option>

                    @foreach($hospedes as $hospede)

                        <option value="{{ $hospede->cpf_hospede }}">{{ $hospede->nome }} - CPF: {{ $hospede->cpf_hospede }}</option>

                    @endforeach

                </select>                
            
                <div class="input-group-btn">
                    <a href="/hospedes/create">
                        <button type="button" id="btn-new-hosp" class="btn btn-success"><i class="bi bi-plus"></i></button>
                    </a>                 
                    <!--<button type="button" id="btn-new-hosp" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i class="bi bi-plus"></i></button>-->
                    
                </div>
            </div>            
        </div>        
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Qtd. Pessoas</label>
        <div class="col-sm-9">

            <select name="qtd_pessoas" id="qtd_pessoas" class="form-control" required>
                
                <option value="" >Quantidade de pessoas...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Nr. Quarto</label>
        <div class="col-sm-9">

            <select name="numero_quarto" id="numero_quarto" class="form-control" required>                           

            </select>
        
        </div>
    </div>

  

    

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Dt Hospedagem</label>
        <div class="col-sm-9">
            <input type="date" name="data_hospedagem" value="{{ $hoje }}" class="form-control" id="inputPassword3" readonly>
        </div>
    </div>



    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Serviços</label>
        <div class="col-sm-9">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="servicos[]" value="Servico de Quarto" id="checkServico">
                    <label class="form-check-label" for="flexCheckDefault">
                        Serviço de Quarto  +  5 R$/dia
                    </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="servicos[]" value="Cofre" id="checkCofre">
                    <label class="form-check-label" for="flexCheckChecked">
                        Cofre  +  5 R$/dia
                    </label>
            </div>
            
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Valor Diária</label>
        <div class="col-sm-9">
            <input type="number" name="valor_diaria" class="form-control" id="valorDiaria" placeholder="Valor diária" readonly>
        </div>
    </div>
   
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Observações</label>
        <div class="col-sm-9">

            <textarea name="observacoes" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            
        </div>
    </div>
        
    <div class="form-group row" id="btn-form">  
        <div class="col-sm-12"> 
            <a href="/hospedagens">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>           
            <button type="submit" class="btn btn-success">Realizar Hospedagem</button>
        </div>   
    </div>
  
</form>
   
<!-- MODALLLLLLLLLLL -->

<!-- Modal -->
<div class="modal fade modal-corpo" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Novo Hóspede</h5>        
      </div>
      <div class="modal-body">

        <form id="form-modal" action="/hospedes" method="POST">

            @csrf

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="imputCpf" name="nome" placeholder="Nome" required >                        
                    </div>            
                </div>        
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Cpf</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="imputCpf" name="cpf_hospede" placeholder="Cpf" required >                        
                    </div>            
                </div>        
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Telefone</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="imputCpf" name="telefone" placeholder="Telefone" required >                        
                    </div>            
                </div>        
            </div>

            <div class="form-group row">
                <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>       
                <div class="col-sm-6">    
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Data Nascimento</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="date" class="form-control" id="imputCpf" name="data_nascimento" placeholder="Data de Nascimento" required >                        
                    </div>            
                </div>        
            </div>         

            <div class="row" >
                
                <div class="btn-modal" id="btn-modal">  
                    <button type="button" class="btn btn-danger navbar-right" data-dismiss="modal" >Cancelar</button>      
                    <button type="submit" class="btn btn-success">Cadastrar</button>                
                </div>
            </div>

        </form>

      </div> 
    </div>
  </div>
</div>

<script>


 //servicos javascript
 $('#checkServico').on('click', function(){
    var checkboxServico = $('#checkServico:checked').length;
    console.log(checkboxServico);

    
    
    if(checkboxServico === 1)
    {
        var valor = document.getElementById('valorDiaria').value;
        document.getElementById('valorDiaria').value = Number(valor) + 5;       
    }else{
        var valor = document.getElementById('valorDiaria').value;
        document.getElementById('valorDiaria').value = valor - 5;
    }
    });

    $('#checkCofre').on('click', function(){

    var checkboxCofre = $('#checkCofre:checked').length;
    console.log(checkboxCofre);
    
    if(checkboxCofre === 1) 
    {
        var valor = document.getElementById('valorDiaria').value;      
        document.getElementById('valorDiaria').value = Number(valor) + 5;
    }else{
        var valor = document.getElementById('valorDiaria').value;
        document.getElementById('valorDiaria').value = valor - 5;
    }
    });
 
</script>


<script>
    // funcao para pegar o valor do select no momento q alterar
    $("#qtd_pessoas").change(function(){
            var qtd_pessoas = $("#qtd_pessoas option:selected").val();
            $("#numero_quarto").empty();
            
            $.ajax({
                type: "POST",
                url: "/quartos/search",
                data: {
                    "_token": "{{ csrf_token() }}",
                    qtd_pessoas,
                },
                complete: function(quartos) { 
                    if(quartos.responseJSON.length == 0) {                        
                        $("#numero_quarto").append('<option value="">Não Existe quartos livres com Essa capacidade</option>');                                         
                    } else {
                        $("#numero_quarto").append('<option value="">Escolha Um Quarto</option>');
                        quartos.responseJSON.map((quarto) => {
                            $("#numero_quarto").append(`<option value="${quarto.numero_quarto}">${quarto.numero_quarto} - Valor: ${quarto.valor_diaria}/Pessoa</option>`);
                        })
                    }
                }             

            });
                
    });
</script> 

<script>
    $("#numero_quarto").change(function(){

            var numero_quarto = $("#numero_quarto option:selected").val();
            var qtd_pessoas = $("#qtd_pessoas option:selected").val();
                        
            $.ajax({
                type: "POST",
                url: "/quartos/searchValor",
                data: {
                    "_token": "{{ csrf_token() }}",
                    numero_quarto,
                },
                complete: function(quartos) { 
                    if(quartos.responseJSON.length == 0) {                        
                        document.getElementById('valorDiaria').value = 0;                                        
                    } else {
                        
                        quartos.responseJSON.map((quarto) => {

                            document.getElementById('valorDiaria').value = parseInt(quarto.valor_diaria * qtd_pessoas);

                        })
                    }
                }             

            });
                
    });

</script>




@endsection

