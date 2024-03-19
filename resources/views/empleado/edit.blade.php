
<form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">

@csrf

{{ method_filed('PATCH') }}


</form>


@include('empleado.form')