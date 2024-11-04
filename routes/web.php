<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Models\Computer;

#Route::get('/noe', function () {
#    return view('VISTAS.inicio');
#});

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/plantilla', function () {
    return view('components/app-layout');
});*/

Route::get('/c', [PrincipalController::class, 'index']);
Route::get('/c++', [PrincipalController::class, 'dos']);
Route::get('/noe', [PrincipalController::class, 'tres']);
Route::get('/java', [PrincipalController::class, 'cuatro']);
Route::get('/php', [PrincipalController::class, 'cinco']);
Route::get('/python', [PrincipalController::class, 'seis']);


Route::get('/insertarvalor', function () {
    
    $computer = new Computer;
    $computer->model='Es una computadora demostrativa';
    $computer->mark='EcoHero';
    $computer->size=14;
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->size=14;
    $computer->save();
    return $computer;

});

Route::get('/seleccionarvalor', function () {
    
    $computer = Computer::find(1);
    //return $computer->published_at;
    //return $computer->published_at->format('d-m-Y');
    return $computer->published_at->diffForHumans();

});

Route::get('/where', function () {

    $computer = Computer::where('model','Envy')->first();
    return $computer;

});

Route::get('/modificar', function () {

    $computer = Computer::where('model','Envy')->first();
    $computer->model = 'Envy 15';
    $computer->save();
    return $computer;

});

Route::get('/todos', function () {

    $computer = Computer::all();
    return $computer;

});

Route::get('/selectwhere', function () {

    $computer = Computer::where('id','>=',2)->get();
    return $computer;
    
    $computer = Computer::where('id','>=',2)->orderBy('id','desc')->get();
    return $computer;
    
    $computer = Computer::where('id','>=',2)
						    ->select('id','model')
						    ->orderBy('id','desc')
						    ->get();
    return $computer;
    
});

Route::get('/delete', function () {

    $computer = Computer::find(2);
    $computer->delete();
     return $computer;
 });