<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilleController;

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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Pessoas em Situação de Rua [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/pessoas-em-situacao-de-rua',[ProfilleController::class, 'categoria_pessoas_situacao_rua'])->name('categoria-pessoas-situacao-rua');
Route::get('/categoria/pessoas-em-situacao-de-rua/dados-quantas-pessoas-em-situacao-de-rua/', [ProfilleController::class, 'dados_quantas_pessoas_situacao_rua'])->name('dados-quantas-pessoas-situacao-rua');

/*
|--------------------------------------------------------------------------
| Crianças [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/criancas-e-adolescentes/', [ProfilleController::class, 'criancas_e_adolescentes'])->name('criancas_e_adolescentes');

Route::get('/categoria/criancas-e-adolescentes/dados-criancas/', [ProfilleController::class, 'dados_criancas'])->name('dados-criancas');

Route::get('/categoria/criancas-e-adolescentes/painel-dados-criancas-adolescentes/', [ProfilleController::class, 'painel_dados_criancas_adolescentes'])->name('painel-dados-criancas-adolescentes');
Route::get('/categoria/jovens-15-29-anos/painel-dados-jovens-indicadores/', [ProfilleController::class, 'painel_dados_jovens_indicadores'])->name('painel-dados-jovens-indicadores');
Route::get('/categoria/dados-jovens/painel-dados-jovens/', [ProfilleController::class, 'painel_dados_jovens'])->name('painel-dados-jovens');
