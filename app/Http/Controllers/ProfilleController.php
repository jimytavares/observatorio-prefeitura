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

        $title = 'Crianças';
        $description = 'Dados sobre Crianças';

        return view('pages.categoria-criancas-e-adolescentes.criancas-e-adolescentes', compact(["title", "description"]));
    }

    public function dados_criancas(){

        $title = 'Dados sobre Crianças';
        $description = 'Informações detalhadas sobre crianças';

        return view('pages.categoria-criancas-e-adolescentes.dados-criancas', compact(["title", "description"]));
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

}