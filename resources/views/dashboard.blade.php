@extends('layouts.main')

@section('title', 'Dashboard')


@section('content')

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
        <div class="icon">
            <i class="bi bi-building"></i>
        </div>
        <div class="content">
            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">8</div>
            <div class="text">Hospedagens</div>
            
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-green">
        <div class="icon">
            <i class="bi bi-people"></i>
        </div>
        <div class="content">
            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">{{ $hospedes }}</div>
            <div class="text">Hóspedes</div>
            
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-red">
        <div class="icon">
            <i class="bi bi-gear"></i>
        </div>
        <div class="content">
            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">#</div>
            <div class="text">Em Const</div>
            
        </div>
    </div>
</div>


@endsection