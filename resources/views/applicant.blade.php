@extends('template/base-template')

<head>
<link rel="stylesheet" href="{{ asset('css/applicant.css') }}">
</head>


<!--@ section('sidebar-itens','')-->

@section ('main-content')

<div class="tituloapp">
    <p>Tela de Cadastro</p>
</div>

<div class="square"></div>


<div class="formu">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="topo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>

        <form action="/applicant" method='post'>
            @csrf
            <div class="row">
                <div class="col-md-10">
                    

                        <div class="form-group">

                                <label for="nome">Nome Completo   </label>
                                <input type="text" class="form-control" name="nome" placeholder="Seu nome"> 

                        </div>

                    
                
                </div>

                <div class="col-md-2">


                        <div class="form-group">

                                <label for="idade">Idade</label>
                                <input type="number" class="form-control" name="idade" id="idade" placeholder="Sua Idade">

                        </div>


                </div>

            </div>

            <div class="row">
                <div class="col-md-8">


                        <div class="form-group">

                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Example@hotmail.com">

                        </div>

                </div>
                <div class="col-md-4">

                        <div class="form-group">

                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="tel" placeholder="(13) 1234-5678">

                        </div>

                </div>
            </div>

            <div class="row">
                
                <div class="col-md-4">

                        <div class="form-group">

                                <label for="pais">Pa??s</label>
                                <select name="pais" select class="form-control">
                                <option>Brasil</option>
                                </select>

                        </div>

                </div>
                <div class="col-md-4">


                        <div class="form-group">

                            <label for="estado">Estado</label>
                            <select  name="estado" select class="form-control">
                                <option>S??o Paulo</option>
                            </select>

                        </div>


                </div>
                <div class="col-md-4">


                        <div class="form-group">

                            <label for="cidade">Cidade</label>
                            <select  name="cidade" select class="form-control">
                                <option>Cubat??o</option>
                                <option>Santos</option>
                                <option>S??o Paulo</option>
                                <option>S??o Vicente</option>
                            </select>

                        </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="carreira">Resumo da carreira</label>
                        <textarea class="form-control" name="carreira" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="estudo">Resumo dos estudos</label>
                        <textarea class="form-control" name="estudos" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for="proficiencia">Profici??ncia - Portugu??s</label>
                            <select name="linguas_portugues"  select class="form-control">
                            <option>N??o conhe??o</option>
                            <option>B??sico</option>
                            <option>Intermedi??rio</option>
                            <option>Avan??ado</option>
                            <option>Fluente</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for="proficiencia">Profici??ncia - Ingl??s</label>
                            <select name="linguas_ingles"  select class="form-control">
                            <option>N??o conhe??o</option>
                            <option>B??sico</option>
                            <option>Intermedi??rio</option>
                            <option>Avan??ado</option>
                            <option>Fluente</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for="proficiencia">Profici??ncia - Espanhol</label>
                            <select  name="linguas_espanhol" select class="form-control">
                            <option>N??o conhe??o</option>
                            <option>B??sico</option>
                            <option>Intermedi??rio</option>
                            <option>Avan??ado</option>
                            <option>Fluente</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for="proficiencia">Profici??ncia - Chin??s</label>
                            <select name="linguas_chines"  select class="form-control">
                            <option>N??o conhe??o</option>
                            <option>B??sico</option>
                            <option>Intermedi??rio</option>
                            <option>Avan??ado</option>
                            <option>Fluente</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for="proficiencia">Profici??ncia - Franc??s</label>
                            <select  name="linguas_frances" select class="form-control">
                            <option>N??o conhe??o</option>
                            <option>B??sico</option>
                            <option>Intermedi??rio</option>
                            <option>Avan??ado</option>
                            <option>Fluente</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for="proficiencia">Profici??ncia - Alem??o</label>
                            <select  name="linguas_alemao" select class="form-control">
                            <option>N??o conhe??o</option>
                            <option>B??sico</option>
                            <option>Intermedi??rio</option>
                            <option>Avan??ado</option>
                            <option>Fluente</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for="proficiencia">Profici??ncia - Japon??s</label>
                            <select name="linguas_japones"  select class="form-control">
                            <option>N??o conhe??o</option>
                            <option>B??sico</option>
                            <option>Intermedi??rio</option>
                            <option>Avan??ado</option>
                            <option>Fluente</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="but">
                <button type="submit">Salvar</button>
            </div>
            
        
        </form>
    </div>
</div>


@stop