<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('pagina-home');


Route::get('/products', function () {
    $pasta = config('pasta');
    $collection =collect($pasta);
    // $pasta_lunga = $collection ->where('tipo','lunga');
    // $pasta_corta = $collection ->where('tipo','corta');
    // $pasta_cortissima = $collection ->where('tipo','cortissima');

    $pasta_lunga = array_filter($pasta, function ($elemento) {
        return $elemento ['tipo'] == 'lunga';
    });
    

    $pasta_corta = array_filter($pasta, function ($elemento) {
        return $elemento['tipo'] == 'corta';
    });

    $pasta_cortissima = array_filter($pasta, function ($elemento) {
        return $elemento['tipo'] == 'cortissima';
    });

    $data =[
        'paste' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]   
    ];


    return view('products',$data);
})-> name('pagina-prodotti');

Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');
    if(is_numeric($id) >= 0 && $id <count($pasta)){
        $prodotto = $pasta[$id];

        $data = [
            'formato' => $prodotto
        ];
        return view('dettagli', $data);
    }else{
        abort('404');
    }

})->name('pagina-dettagli');


Route::get('/news', function () {
    return view('news');
})->name('pagina-notizie');
