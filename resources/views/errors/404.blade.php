@extends('errors.illustrated-layout')

@section('code', '404')
@section('title', __('No encontrad@'))

@section('image')
<div style="background-image: url('/svg/404.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Sorry!, no pudimos encontrar lo que buscas.'))
