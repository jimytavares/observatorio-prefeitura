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
/*
|--------------------------------------------------------------------------
| Juventude [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/juventude/', [ProfilleController::class, 'juventude_page'])->name('juventude_page');


/*
|--------------------------------------------------------------------------
| PCD [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/PCD/', [ProfilleController::class, 'pessoas_com_deficiencia'])->name('pessoas_com_deficiencia');


/*
|--------------------------------------------------------------------------
| Pessoa Idosa [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/pessoa-idosa/', [ProfilleController::class, 'pessoa_idosa'])->name('pessoa_idosa');



/*
|--------------------------------------------------------------------------
| LGBT [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/LGBT/', [ProfilleController::class, 'lgbt'])->name('lgbt');


/*
|--------------------------------------------------------------------------
| Igualdade Racial [Categoria]
|--------------------------------------------------------------------------
*/

Route::get('/categoria/igualdade-racial/', [ProfilleController::class, 'igualdade_racial'])->name('igualdade_racial');

/*
|--------------------------------------------------------------------------
| Violação de Direitos [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/violacao-de-direitos/', [ProfilleController::class, 'violacao_de_direitos'])->name('violacao_de_direitos');


/*
|--------------------------------------------------------------------------
| TEA [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/TEA/', [ProfilleController::class, 'transtorno_do_aspecto_autista'])->name('transtorno_do_aspecto_autista');