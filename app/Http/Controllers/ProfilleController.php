<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfilleController extends Controller
{

    public function categoria_pessoas_situacao_rua(){
        
        $title = 'Pessoas em Situação de Rua';

        return view('pages.categoria-pessoas-situacao-rua.categoria-pessoas-situacao-rua', compact(["title"]));
    }
    
    public function dados_quantas_pessoas_situacao_rua(){
        
        $title = 'Quantas pessoas estão em situação de rua no Brasil?';

        return view('pages.categoria-pessoas-situacao-rua.dados-quantas-pessoas-situacao-rua', compact(["title"]));
    }

    /*
    |--------------------------------------------------------------------------
    | Crianças [Categoria]
    |--------------------------------------------------------------------------
    */

    public function criancas_e_adolescentes(){

        $title = 'Crianças e Adolescentes';
        $description = 'Dados sobre Crianças e Adolescentes';

        return view('pages.categoria-criancas-e-adolescentes.criancas-e-adolescentes', compact(["title", "description"]));
    }

    public function populacao(){

        $title = 'População';
        $description = 'Crianças e Adolescentes';

        return view('pages.categoria-criancas-e-adolescentes.populacao', compact(["title", "description"]));
    }

    public function violacoes_de_direitos(){
        $title = 'Violação de Direitos';
        $description = 'Crianças e Adolescentes';

        return view('pages.categoria-criancas-e-adolescentes.violacoes-de-direitos', compact(["title", "description"]));
    }

    public function garantia_de_direitos(){
        $title = 'Garantia de Direitos';
        $description = 'Crianças e Adolescentes';

        return view('pages.categoria-criancas-e-adolescentes.garantia-de-direitos', compact(["title", "description"]));
    }   

    public function painel_dados_criancas_adolescentes(){

        $title = 'Crianças e Adolescentes';
        $description = 'Painel de Dados - Jovens 15 a 29 anos';

        return view('pages.categoria-criancas-e-adolescentes.painel-dados-criancas-adolescentes', compact(["title", "description"]));
    }

    public function painel_dados_jovens_indicadores(){

        $title = 'Crianças';
        $description = 'Painel Indicadores Sociais';

        return view('pages.categoria-criancas-e-adolescentes.painel-dados-jovens-indicadores', compact(["title", "description"]));
    }

    public function painel_dados_jovens(){

        $title = 'Crianças';
        $description = 'Painel de Mercado de Trabalho Juvenil';

        return view('pages.categoria-criancas-e-adolescentes.painel-dados-jovens', compact(["title", "description"]));
    }

    /*
    |--------------------------------------------------------------------------
    | Juventude [Categoria]
    |--------------------------------------------------------------------------
    */
     public function juventude_page()
    {
        $title = 'Juventude';
        $description = 'Dados sobre Juventude';

        return view('pages.categoria-juventude.juventude', compact(['title', 'description']));
    }

     /*
    |--------------------------------------------------------------------------
    | PCD [Categoria]
    |--------------------------------------------------------------------------
    */
    public function pessoas_com_deficiencia()
    {
        $title = 'Pessoas com Deficiência (PCD)';
        $description = 'Dados sobre Pessoas com Deficiência';

        return view('pages.categoria-pcd.pcd', compact(['title', 'description']));
    }

    public function pcd_dados(){
        $title = 'Dados sobre Pessoas com Deficiência (PCD)';
        $description = 'Informações detalhadas sobre Pessoas com Deficiência';

        return view('pages.categoria-pcd.pcd-dados', compact(['title', 'description']));
    }

     /*
    |--------------------------------------------------------------------------
    | Pessoa Idosa [Categoria]
    |--------------------------------------------------------------------------
    */
    public function pessoa_idosa()
    {
        $title = 'Pessoa Idosa';
        $description = 'Dados sobre Pessoas Idosas';

        return view('pages.categoria-pessoa-idosa.pessoa-idosa', compact(['title', 'description']));
    }

    public function pessoas_idosas_dados()
    {
        $title = 'Dados sobre Pessoas Idosas';
        $description = 'Informações detalhadas sobre pessoas idosas';

        return view('pages.categoria-pessoa-idosa.pessoas-idosas-dados', compact(['title', 'description']));
    }

     /*
    |--------------------------------------------------------------------------
    | LGBT [Categoria]
    |--------------------------------------------------------------------------
    */
    public function lgbt()
    {
        $title = 'LGBT';
        $description = 'Dados sobre a categoria LGBT';

        return view('pages.categoria-lgbt.lgbt', compact(['title', 'description']));
    }
     /*
    |--------------------------------------------------------------------------
    | Igualdade racial [Categoria]
    |--------------------------------------------------------------------------
    */
    public function igualdade_racial()
    {
        $title = 'Igualdade Racial';
        $description = 'Dados sobre Igualdade Racial';

        return view('pages.categoria-igualdade-racial.igualdade-racial', compact(['title', 'description']));
    }
     /*
    |--------------------------------------------------------------------------
    | Violação de Direitos [Categoria]
    |--------------------------------------------------------------------------
    */ 
    public function violacao_de_direitos()
    {
        $title = 'Violação de Direitos';
        $description = 'Dados sobre Violação de Direitos';

        return view('pages.categoria-violacao-dos-direitos.violacao-de-direitos', compact(['title', 'description']));
    }
     /*
    |--------------------------------------------------------------------------
    | TEA [Categoria]
    |--------------------------------------------------------------------------
    */
    public function transtorno_do_aspecto_autista()
    {
        $title = 'TEA - Transtorno do Espectro Autista';
        $description = 'Dados sobre Transtorno do Espectro Autista (TEA)';

        return view('pages.categoria-tea.tea', compact(['title', 'description']));
    }

}