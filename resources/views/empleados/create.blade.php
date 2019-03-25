<form method="post" action="{{url('/empleados')}}" enctype="multipart/form-data">
{{csrf_field()}}
    <label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="nombre" value="">

    <label for="apellidoP">{{'apellidoP'}}</label>
    <input type="text" name="apellidoP" id="apellidoP" value="">

    <label for="apellidoM">{{'apellidoM'}}</label>
    <input type="text" name="apellidoM" id="apellidoM" value="">

    <label for="correo">{{'correo'}}</label>
    <input type="email" name="correo" id="correo" value="">

    <label for="foto">{{'foto'}}</label>
    <input type="file" name="foto" id="foto" value="">

    <input type="submit" value="agregar">
</form>