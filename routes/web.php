<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;


/*Route::get('/empleado', function(){
    return view('empleado.index');
});


Route::get('/empleado',[EmpleadoController::class,'index']);
Route::get('/empleado/create',[EmpleadoController::class,'create']);*/

Route::resource('empleado',EmpleadoController::class);
