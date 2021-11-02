@extends('utilities.modal')
@section('button-text', 'Agregar Empleado')
@section('modal-title', 'Agregar Empleado')
@section('modal-body')
    <form action="{{route ('employee.store')}}" method="post">
    @csrf
    @include('employee.form', [
        'action' => 'create'
    ])
    </form>
@endsection