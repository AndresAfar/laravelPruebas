<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="nombre" id="nombre">
    <input type="text" name="apellido" id="apellido">
    <input type="text" name="correo" id="correo">

    <input type="submit" value="Datos Guardados">


</form>