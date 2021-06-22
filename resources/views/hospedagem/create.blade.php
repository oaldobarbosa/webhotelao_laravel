@extends('layouts.main')

@section('title', 'Nova Hospedagem')

@section('content')
<form id="form2">

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">CPF Hóspede</label>

        <div class="col-sm-9">
            <div class="input-group">
                <input type="number" class="form-control" id="inputEmail3" placeholder="CPF Hóspede" required >
                <div class="input-group-btn">
                    
                    <button type="button" id="btn-new-hosp" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i class="bi bi-plus"></i></button>
                    
                </div>
            </div>            
        </div>        
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Qtd. Pessoas</label>
        <div class="col-sm-9">

            <select name="name" id="" class="form-control">
                
                <option value="" selected>Quantidade de pessoas...</option>
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

            <select name="name" id="" class="form-control">
                <option value="" selected>Número do quarto...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        
        </div>
    </div>

  

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Valor Diária</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" placeholder="Valor diária">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Dt Hospedagem</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="inputPassword3" placeholder="Data Hospedagem">
        </div>
    </div>

    
    <!--<div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Dt Checkout</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="inputPassword3" placeholder="Data Checkout">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Diárias</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" placeholder="Diárias">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Valor Hospedagem</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" placeholder="Valor Hospedagem">
        </div>
    </div>-->

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Qtd. Pessoas</label>
        <div class="col-sm-9">

            <select name="name" id="" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Serviços</label>
        <div class="col-sm-9">

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Serviço de Quarto
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            Cofre
        </label>
        </div>
            
        </div>
    </div>

    
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Observações</label>
        <div class="col-sm-9">

            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            
        </div>
    </div>
  
      
    <div class="form-group row" id="btn-form">  
        <div class="col-sm-12"> 
            <a href="/hospedagens">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>           
            <button type="submit" class="btn btn-success">Cadastrar</button>
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
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">

        <form id="form-modal" action="/hospedagens/create" method="POST">

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
                        <input type="number" class="form-control" id="imputCpf" name="cpf" placeholder="Cpf" required >                        
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
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
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
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Cadastrar</button>
      </div>--> 
    </div>
  </div>
</div>

@endsection