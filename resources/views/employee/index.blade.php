@extends('layouts.dash')
@section('content')
<br>
<br>
<br>
<br>
<br>

<form>
@include('employee/create')
</form>
<table class="table table-light table-hover">
    <thead class="table table-light table-hover">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha Admision</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($employes as $employe)
    <tr>
        
        <td>{{$loop->iteration}}</td>
        <td>{{$employe->name}}</td>
        <td>{{$employe->email}}</td>
        <td>{{$employe->admission_date}}</td>
        <td>
            @include('recomendaciones/create')
            <!-- Button trigger modal -->
            <button  type="button" class="btn-secondary" data-toggle="modal" data-target="#edit{{$employe->id}}">
                Editar
            </button>
            <div class="fade modal " id="edit{{$employe->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar Empleado</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @include('employee/edit')
                        </div>

                    </div>
                </div>
            </div>
            <form method="post" action="{{ route ('employee.destroy',$employe->id)}}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
           
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection