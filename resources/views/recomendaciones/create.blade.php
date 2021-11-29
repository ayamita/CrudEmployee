
<form action="{{ url('/recomendacion/'.$employe->id)}}" method="post">
@csrf
@include('recomendaciones.form', [
    'action' => 'create'
])
</form>

