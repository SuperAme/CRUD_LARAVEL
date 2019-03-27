<form method="post" action="{{url('/empleados')}}" enctype="multipart/form-data">
{{csrf_field()}}
@include('empleados.form',['Modo'=>'crear'])
    
</form>