@extends('template/base-template')

@component('components.alerts.alert')
    <strong>Errou!</strong>
    Oloco meu, deu erro meu maninho!
@endcomponent

@component('components.alerts.alert2')
    @slot('title')
        Outro Alerta, meu cumpadi
    @endslot
    <strong>Errou Novamente!</strong>
    Oloco meu, alert duplo na sua tela!
@endcomponent

@component('components.alerts.alert3')
    @slot('type')
        warning
    @endslot
    @slot('title')
        Alerta com Tipo
    @endslot
    <strong>Errou com Estilo!</strong>
    Oloco meu, alert com Tipo Editavel!
@endcomponent

<x-alerta type='success' title='Lindo Título'>
    Recursos Ilimitados sendo apresentados!!!
</x-alerta>
