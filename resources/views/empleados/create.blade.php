<form method="post" action="{{url('/empleados')}}" enctype="multipart/form-data">
{{csrf_field()}}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">

    <label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="">

    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="">

    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="">

    <label for="Foto">{{'Foto'}}</label>
    <input type="file" name="Foto" id="Foto" value="">

    <input type="submit" value="agregar">
    <a href="{{url('empleados')}}">Regresar</a>
</form>