@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" class="form-horizontal" action="{{url('/empleados')}}" enctype="multipart/form-data">
{{csrf_field()}}

@include('empleados.form',['Modo'=>'crear'])
    
</form>
</div>
@endsection