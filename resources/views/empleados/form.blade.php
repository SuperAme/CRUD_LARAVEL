<div class="from-group">
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
</div>
<div class="form-group">
    <label for="ApellidoPaterno" class="control-label">{{'ApellidoPaterno'}}</label>
    <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
</div>
<div class="form-group">
    <label for="ApellidoMaterno" class="control-label">{{'ApellidoMaterno'}}</label>
    <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
</div>
<div class="form-group">
    <label for="Correo" class="control-label">{{'Correo'}}</label>
    <input type="email" class="form-control" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
</div>
<div class="form-group">
    <label for="Foto" class="control-label">{{'Foto'}}</label>
    <input type="file" class="form-control" name="Foto" id="Foto" value="">
    @if(isset($empleado->Foto))
    <br/>
    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
    <br/>
    @endif
    <input type="submit" class="btn btn-success" value="{{$Modo == 'crear' ? 'Agregar':'Modificar'}}">
    <a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>
</div> 
    
    