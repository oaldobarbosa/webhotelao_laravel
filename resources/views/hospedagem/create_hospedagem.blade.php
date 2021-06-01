@extends('layouts.main')

@section('title', 'Nova Hospedagem')

@section('content')
<form id="form2">

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Cpf Hóspede</label>

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
        <label for="inputPassword3" class="col-sm-3 col-form-label">Nr. Quarto</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="inputPassword3" placeholder="Número Quarto" required>
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

    <div class="form-group row">
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

        <form id="form-modal">

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="imputCpf" placeholder="Nome" required >                        
                    </div>            
                </div>        
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Cpf</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="imputCpf" placeholder="Cpf" required >                        
                    </div>            
                </div>        
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Telefone</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="imputCpf" placeholder="Telefone" required >                        
                    </div>            
                </div>        
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Sexo</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="imputCpf" placeholder="Sexo" required >                        
                    </div>            
                </div>        
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Data Nascimento</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="date" class="form-control" id="imputCpf" placeholder="Data de Nascimento" required >                        
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