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

Route::get('/categoria/criancas-e-adolescentes/populacao/', [ProfilleController::class, 'populacao'])->name('populacao');
Route::get('/categoria/criancas-e-adolescentes/violacoes-de-direitos/', [ProfilleController::class, 'violacoes_de_direitos'])->name('violacoes_de_direitos');
Route::get('/categoria/criancas-e-adolescentes/garantia-de-direitos/', [ProfilleController::class, 'garantia_de_direitos'])->name('garantia_de_direitos');

Route::get('/categoria/criancas-e-adolescentes/painel-dados-criancas-adolescentes/', [ProfilleController::class, 'painel_dados_criancas_adolescentes'])->name('painel-dados-criancas-adolescentes');
Route::get('/categoria/jovens-15-29-anos/painel-dados-jovens-indicadores/', [ProfilleController::class, 'painel_dados_jovens_indicadores'])->name('painel-dados-jovens-indicadores');
Route::get('/categoria/dados-jovens/painel-dados-jovens/', [ProfilleController::class, 'painel_dados_jovens'])->name('painel-dados-jovens');
/*
|--------------------------------------------------------------------------
| Juventude [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/juventude/', [ProfilleController::class, 'juventude_page'])->name('juventude_page');


Route::get('/categoria/juventude/populacao/', [ProfilleController::class, 'populacao_juventude'])->name('populacao_juventude');

Route::get('/categoria/juventude/violacoes/', [ProfilleController::class, 'violacao_direitos_juventude'])->name('violacao-de-direito-juventude');

Route::get('/categoria/juventude/garantia/', [ProfilleController::class, 'garantia_direito_juventude'])->name('garantia-de-direito-juventude');

/*
|--------------------------------------------------------------------------
| PCD [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/PCD/', [ProfilleController::class, 'pessoas_com_deficiencia'])->name('pessoas_com_deficiencia');

Route::get('/categoria/PCD/populacao/', [ProfilleController::class, 'populacao_pcd'])->name('populacao_pcd');

Route::get('/categoria/PCD/violacoes/', [ProfilleController::class, 'violacao_direitos_pcd'])->name('violacao-de-direito-pcd');

Route::get('/categoria/PCD/garantia/', [ProfilleController::class, 'garantia_direito_pcd'])->name('garantia-de-direito-pcd');


/*
|--------------------------------------------------------------------------
| Pessoa Idosa [Categoria]
|--------------------------------------------------------------------------
*/

Route::get('/categoria/pessoa-idosa/', [ProfilleController::class, 'pessoa_idosa'])->name('pessoa_idosa');

Route::get('/categoria/pessoa-idosa/pessoas-idosas-dados/', [ProfilleController::class, 'pessoas_idosas_dados'])->name('pessoas-idosas-dados');

Route::get('/categoria/pessoa-idosa/populacao/', [ProfilleController::class, 'populacao_idosa'])->name('populacao_idosa');

Route::get('/categoria/pessoa-idosa/violacoes/', [ProfilleController::class, 'violacao_direitos_idosos'])->name('violacao-de-direito-idoso');

Route::get('/categoria/pessoa-idosa/garantia/', [ProfilleController::class, 'garantia_direito_idosos'])->name('garantia-de-direito-idoso');


/*
|--------------------------------------------------------------------------
| LGBT [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/LGBT/', [ProfilleController::class, 'lgbt'])->name('lgbt');


Route::get('/categoria/LGBT/populacao/', [ProfilleController::class, 'populacao_lgbt'])->name('populacao_lgbt');

Route::get('/categoria/LGBT/violacoes/', [ProfilleController::class, 'violacao_direitos_lgbt'])->name('violacao-de-direito-lgbt');

Route::get('/categoria/LGBT/garantia/', [ProfilleController::class, 'garantia_direito_lgbt'])->name('garantia-de-direito-lgbt');

/*
|--------------------------------------------------------------------------
| Povos e Comunidades Tradicionais [Categoria]
|--------------------------------------------------------------------------
*/

Route::get('/categoria/povos-e-comunidades-tradicionais/', [ProfilleController::class, 'povos_comunidades_tradicionais'])->name('povos-e-comunidades-tradicionais');

Route::get('/categoria/povos-e-comunidades-tradicionais/populacao/', [ProfilleController::class, 'populacao_povos_comunidades_tradicionais'])->name('populacao_povos_comunidades_tradicionais');

Route::get('/categoria/povos-e-comunidades-tradicionais/violacoes/', [ProfilleController::class, 'violacao_direitos_povos_comunidades_tradicionais'])->name('violacao-de-direito-povos-comunidades-tradicionais');

Route::get('/categoria/povos-e-comunidades-tradicionais/garantia/', [ProfilleController::class, 'garantia_direito_povos_comunidades_tradicionais'])->name('garantia-de-direito-povos-comunidades-tradicionais');


/*
|--------------------------------------------------------------------------
| Mulher [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/mulher/', [ProfilleController::class, 'mulher'])->name('mulher');

Route::get('/categoria/mulher/populacao/', [ProfilleController::class, 'populacao_mulher'])->name('populacao_mulher');

Route::get('/categoria/mulher/violacoes/', [ProfilleController::class, 'violacao_direitos_mulher'])->name('violacao-de-direito-mulher');

Route::get('/categoria/mulher/garantia/', [ProfilleController::class, 'garantia_direito_mulher'])->name('garantia-de-direito-mulher');


/*
|--------------------------------------------------------------------------
| TEA [Categoria]
|--------------------------------------------------------------------------
*/
Route::get('/categoria/TEA/', [ProfilleController::class, 'transtorno_do_aspecto_autista'])->name('transtorno_do_aspecto_autista');


Route::get('/categoria/TEA/populacao/', [ProfilleController::class, 'populacao_tea'])->name('populacao_tea');

Route::get('/categoria/TEA/violacoes/', [ProfilleController::class, 'violacao_direitos_tea'])->name('violacao-de-direito-tea');

Route::get('/categoria/TEA/garantia/', [ProfilleController::class, 'garantia_direito_tea'])->name('garantia-de-direito-tea');
