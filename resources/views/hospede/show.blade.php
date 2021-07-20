@extends('layouts.main')

@section('title', $hospede->nome)


@section('content')

{{-- <p class="campo">Nome: <info class="info">{{ $hospede->nome }}</info></p> --}}
<p class="campo"><info class="info-camp">CPF:</info> <info class="info">{{ $hospede->cpf_hospede }}</info></p>
<p class="campo">  <label for="info">Telefone:</label> <info class="info">{{ $hospede->telefone }}</info></p>
<p class="campo">Sexo: <info class="info">{{ $hospede->sexo }}</info></p>
<p class="campo">Data Nascimento: <info class="info">{{ $hospede->data_nascimento }}</info></p>

<div class=" op-view col-sm-12"> 
            <a href="/hospedes/edit/{{ $hospede->cof_hospede }}">
                <button type="button" class="btn btn-warning">Editar</button>
            </a>

            <form class="delete" action="/hospedes/{{ $hospede->cpf_hospede }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
            </form>           
           
        </div>   
@endsection