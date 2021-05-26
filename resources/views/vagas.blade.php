@extends('template/base-template')

<head>
<link rel="stylesheet" href="{{ asset('css/vagas.css') }}">
</head>

@section ('page-title', 'HOME')

@section ('main-content')
<div class="etec"></div>

<div class="titulohome">
    <p>Vagas disponíveis!</p>
</div>

<div class="square"></div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card cart">
                <div class="card-body">
                    <h5 class="card-title">Vaga 1</h5>
                    <p class="card-text">Vaga para Web Designer Jr:<br>HTML<br>CSS<br>JavaScript<br>UI/UX</p>
                    <a href="#" class="btn btn-danger">Inscrição</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card cart">
                <div class="card-body">
                    <h5 class="card-title">Vaga 2</h5>
                    <p class="card-text">Vaga para Web Designer Jr:<br>HTML<br>CSS<br>JavaScript<br>UI/UX</p>
                    <a href="#" class="btn btn-danger">Inscrição</a>
                </div>
            </div>
        </div>
    </div>
</div>





@stop