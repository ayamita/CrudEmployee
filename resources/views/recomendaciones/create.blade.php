@extends('utilities.change')
@section('text2', 'Recomendacion')

@section('title2', 'Rellena todos los campos')

@section('body2')
    <form action="{{ url('/recomendacion/'.$employe->id)}}" method="post">
    @csrf
    @include('recomendaciones.form', [
        'action' => 'create'
    ])
    </form>
@endsection
