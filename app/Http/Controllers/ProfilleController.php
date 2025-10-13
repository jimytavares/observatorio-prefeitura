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

    public function populacao_juventude()
    {
        $title = 'População';
        $description = 'Juventude';
        // $imagem = asset('images/juventude-populacao.jpeg'); 
        return view('pages.categoria-juventude.populacao', compact(["title", "description"]));
    }

    public function violacao_direitos_juventude()
    {
        $title = 'Violação de Direitos';
        $description = 'Juventude';
        // $imagem = asset('images/juventude-violacoes.jpeg'); 
        return view('pages.categoria-juventude.violacoes-de-direitos', compact(["title", "description"]));
    }

    public function garantia_direito_juventude()
    {
        $title = 'Garantia de Direitos';
        $description = 'Juventude';
        // $imagem = asset('images/juventude-garantia.jpeg'); 
        return view('pages.categoria-juventude.garantia-de-direitos', compact(["title", "description"]));
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

    public function populacao_pcd()
    {
        $title = 'População';
        $description = 'Pessoas com Deficiência (PCD)';
        // $imagem = asset('images/pcd-populacao.jpeg'); 
        return view('pages.categoria-pcd.populacao', compact(["title", "description"]));
    }

    public function violacao_direitos_pcd()
    {
        $title = 'Violação de Direitos';
        $description = 'Pessoas com Deficiência (PCD)';
        // $imagem = asset('images/pcd-violacoes.jpeg'); 
        return view('pages.categoria-pcd.violacoes-de-direitos', compact(["title", "description"]));
    }

    public function garantia_direito_pcd()
    {
        $title = 'Garantia de Direitos';
        $description = 'Pessoas com Deficiência (PCD)';
        // $imagem = asset('images/pcd-garantia.jpeg'); 
        return view('pages.categoria-pcd.garantia-de-direitos', compact(["title", "description"]));
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

    public function populacao_idosa(){

        $title = 'População';
        $description = 'Pessoa Idosa';
        // $imagem = asset('images/pessoa-idosas.jpeg'); 
        return view('pages.categoria-pessoa-idosa.populacao', compact(["title", "description"]));
    }
    public function violacao_direitos_idosos(){
        $title = 'Violação de Direitos';
        $description = 'Pessoa Idosa';
        // $imagem = asset('images/pessoa-idosas.jpeg'); 
        return view('pages.categoria-pessoa-idosa.violacoes-de-direitos', compact(["title", "description"]));

    }
    public function garantia_direito_idosos(){
        $title = 'Garantia de Direitos';
        $description = 'Pessoa Idosa';
        // $imagem = asset('images/pessoa-idosas.jpeg'); 
        return view('pages.categoria-pessoa-idosa.garantia-de-direitos', compact(["title", "description"]));
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

    public function populacao_lgbt()
    {
        $title = 'População';
        $description = 'LGBT';
        // $imagem = asset('images/lgbt-populacao.jpeg'); 
        return view('pages.categoria-lgbt.populacao', compact(["title", "description"]));
    }

    public function violacao_direitos_lgbt()
    {
        $title = 'Violação de Direitos';
        $description = 'LGBT';
        // $imagem = asset('images/lgbt-violacoes.jpeg'); 
        return view('pages.categoria-lgbt.violacoes-de-direitos', compact(["title", "description"]));
    }

    public function garantia_direito_lgbt()
    {
        $title = 'Garantia de Direitos';
        $description = 'LGBT';
        // $imagem = asset('images/lgbt-garantia.jpeg'); 
        return view('pages.categoria-lgbt.garantia-de-direitos', compact(["title", "description"]));
    }

     /*
    |--------------------------------------------------------------------------
    | Povos e Comunidades Tradicionais [Categoria]
    |--------------------------------------------------------------------------
    */
    public function povos_comunidades_tradicionais()
    {
        $title = 'Povos e Comunidades Tradicionais';
        $description = 'Dados sobre Povos e Comunidades Tradicionais';

        return view('pages.categoria-povos-e-comunidades-tradicionais.povos-e-comunidades-tradicionais', compact(['title', 'description']));
    }

    public function populacao_povos_comunidades_tradicionais()
    {
        $title = 'População';
        $description = 'Povos e Comunidades Tradicionais';
        // $imagem = asset('images/povos-e-comunidades-tradicionais-populacao.jpeg'); 
        return view('pages.categoria-povos-e-comunidades-tradicionais.populacao', compact(['title', 'description']));
    }

    public function violacao_direitos_povos_comunidades_tradicionais()
    {
        $title = 'Violação de Direitos';
        $description = 'Povos e Comunidades Tradicionais';
        // $imagem = asset('images/povos-e-comunidades-tradicionais-violacoes.jpeg'); 
        return view('pages.categoria-povos-e-comunidades-tradicionais.violacoes-de-direitos', compact(['title', 'description']));
    }

    public function garantia_direito_povos_comunidades_tradicionais()
    {
        $title = 'Garantia de Direitos';
        $description = 'Povos e Comunidades Tradicionais';
        // $imagem = asset('images/povos-e-comunidades-tradicionais-garantia.jpeg'); 
        return view('pages.categoria-povos-e-comunidades-tradicionais.garantia-de-direitos', compact(['title', 'description']));
    }

     /*
    |--------------------------------------------------------------------------
    | Mulher [Categoria]
    |--------------------------------------------------------------------------
    */ 
    public function mulher()
    {
        $title = 'Mulher';
        $description = 'Dados sobre a categoria Mulher';

        return view('pages.categoria-mulher.mulher', compact(['title', 'description']));
    }

    public function populacao_mulher()
    {
        $title = 'População';
        $description = 'Mulher';
        // $imagem = asset('images/mulher-populacao.jpeg'); 
        return view('pages.categoria-mulher.populacao', compact(['title', 'description']));
    }

    public function violacao_direitos_mulher()
    {
        $title = 'Violação de Direitos';
        $description = 'Mulher';
        // $imagem = asset('images/mulher-violacoes.jpeg'); 
        return view('pages.categoria-mulher.violacoes-de-direitos', compact(['title', 'description']));
    }

    public function garantia_direito_mulher()
    {
        $title = 'Garantia de Direitos';
        $description = 'Mulher';
        // $imagem = asset('images/mulher-garantia.jpeg'); 
        return view('pages.categoria-mulher.garantia-de-direitos', compact(['title', 'description']));
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
    public function populacao_tea()
    {
        $title = 'População';
        $description = 'TEA';
        // $imagem = asset('images/tea-populacao.jpeg'); 
        return view('pages.categoria-tea.populacao', compact(["title", "description"]));
    }

    public function violacao_direitos_tea()
    {
        $title = 'Violação de Direitos';
        $description = 'TEA';
        // $imagem = asset('images/tea-violacoes.jpeg'); 
        return view('pages.categoria-tea.violacoes-de-direitos', compact(["title", "description"]));
    }

    public function garantia_direito_tea()
    {
        $title = 'Garantia de Direitos';
        $description = 'TEA';
        // $imagem = asset('images/tea-garantia.jpeg'); 
        return view('pages.categoria-tea.garantia-de-direitos', compact(["title", "description"]));
    }

}