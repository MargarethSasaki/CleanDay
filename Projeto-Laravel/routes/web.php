<?php

 

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Http\Controller\MapController;

/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider and all of them will

| be assigned to the "web" middleware group. Make something great!

|

*/

Route::get('/materiais', function(){
    return view('materiais');
});

Route::get('/sobre', function(){
    return view('sobre');
});

Route::get('/', function () {
    return view('welcome');

});

Route::get('/coleta', function () {

    return view('mapa');

});

Route::get('/consulta/{res}', function ($res) {
    $materiaisJSON = json_decode($res);
    // Primeiro, obtenha o ID do material com base no nome fornecido em $res.
    $materialIDs = DB::table('tb03material')
        ->select('tb03material.id')
        ->where('tb03nome', $materiaisJSON)
        ->get();

    
    
    // // // Em seguida, use o ID do material para obter os resultados desejados da tabela tb05materiais_unidade.
    $resultados = DB::table('tb05materiais_unidade')
        ->select('tb05materiais_unidade.tb05id_unidade')
        ->join('tb03material', 'tb05materiais_unidade.tb05id_material', '=', 'tb03material.id')
        ->whereIn('tb05id_material', $materialIDs->pluck('id')->all())
        ->get();

        $unidades = DB::table('tb04unidades')
        ->whereIn('id', $resultados->pluck('tb05id_unidade')->toArray())
        ->get();
        $endereco = DB::table('tb02endereco')
        ->whereIn('id', $resultados->pluck('tb05id_unidade')->toArray())
        ->get();

    return response()->json(['resultados' => $materiaisJSON, 'unidades' => $unidades, 'endereco' => $endereco]);
});

 

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

 

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

 

require __DIR__.'/auth.php';