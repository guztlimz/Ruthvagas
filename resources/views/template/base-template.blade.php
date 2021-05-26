<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

<script src="{{ asset('script/jquery.mask.min.js')}}"></script>

    <script src="https://kit.fontawesome.com/8c1e7e2148.js" crossorigin="anonymous"></script>
    

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('page-title') / Ruth Vagas</title>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tel').mask('(00) 0000-0000');

            $('#idade').attr({
                "max" : 150,
                "min" : 1
            });
        });

        
    </script>
    
    
</head>
<body>

@section('sidebar-itens')
    <nav class="menu-h">
        <ul>
            
            <li><img class="negado" src="{{ asset('img/logo.png')}}"></li>    
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('applicant') }}">Cadastro</a></li>
            <li><a href="{{ url('vagas') }}">Vagas</a></li>
        </ul>
    </nav>

    

    @yield ('main-content')

<div class="Final">
    <footer class="text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Ruth Vagas</h5>

            <p>
            As Escolas Técnicas Estaduais (ETECs) são instituições de ensinos técnico, médio e técnico integrado ao médio (ETIM), pertencentes ao Centro Estadual de Educação Tecnológica Paula Souza (CEETEPS), autarquia da Secretaria de Desenvolvimento Econômico, Ciência e Tecnologia (SDECTI) do estado de São Paulo.</p>
            </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
            <li>
                <a href="#!" class="text">Link 1</a>
            </li>
            <li>
                <a href="#!" class="text">Link 2</a>
            </li>
            <li>
                <a href="#!" class="text">Link 3</a>
            </li>
            <li>
                <a href="#!" class="text">Link 4</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Links</h5>

            <ul class="list-unstyled">
            <li>
                <a href="#!" class="text">Link 1</a>
            </li>
            <li>
                <a href="#!" class="text">Link 2</a>
            </li>
            <li>
                <a href="#!" class="text">Link 3</a>
            </li>
            <li>
                <a href="#!" class="text">Link 4</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text" href="http://etecdrc.com.br/">Etec Ruth Cardoso</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>
    <!-- Footer -->


    
</body>
</html>