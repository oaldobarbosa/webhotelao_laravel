@extends('layouts.main')

@section('title', 'Dados do Hóspede')


@section('content')

<p class="campo">Nome: <info class="info">Aldp</info></p>
<p class="campo">CPF: <info class="info">07564812456</info></p>
<p class="campo"p>Telefone: <info class="info">77991054875</info></p>
<p class="campo">Sexo: <info class="info">Masculino</info></p>
<p class="campo">Data Nascimento: <info class="info">10/10/2010</info></p>

<div class=" op-view col-sm-12"> 
            <a href="/hospedagens">
                <button type="button" class="btn btn-warning">Editar</button>
            </a>           
            <button type="submit" class="btn btn-danger">Deletar</button>
        </div>   
@endsection