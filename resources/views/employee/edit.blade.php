
<form action="{{route ('employee.update', $employe->id)}}" method="post">
@csrf
@method('PATCH')
@include('employee.form', [
    'action' => 'Editar'
])
</form>
