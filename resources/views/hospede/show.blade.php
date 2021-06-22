@extends('layouts.main')

@section('title', $hospede->nome)


@section('content')

{{-- <p class="campo">Nome: <info class="info">{{ $hospede->nome }}</info></p> --}}
<p class="campo">CPF: <info class="info">{{ $hospede->cpf }}</info></p>
<p class="campo"p>Telefone: <info class="info">{{ $hospede->telefone }}</info></p>
<p class="campo">Sexo: <info class="info">{{ $hospede->sexo }}</info></p>
<p class="campo">Data Nascimento: <info class="info">{{ $hospede->data_nascimento }}</info></p>

<div class=" op-view col-sm-12"> 
            <a href="/hospedes/edit/{{ $hospede->id }}">
                <button type="button" class="btn btn-warning">Editar</button>
            </a>

            <form class="delete" action="/hospedes/{{ $hospede->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
            </form>           
           
        </div>   
@endsection