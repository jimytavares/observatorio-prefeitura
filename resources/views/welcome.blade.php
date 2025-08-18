@extends('layouts.main')

@section('title', 'Rio Grande do Norte')

@section('content')

<style>
    .color-title{ color:#17669b; }
    .color-text{ color:#4d4d4d; }
    .txt-justify{ text-align: justify; }
    .bg-title{ background-color:#17669b; }
    .bg-title2{ background-color:#0189d3; border:none; }
    .bold{ font-weight: bold; }
    .txt-center{ text-align:center; }
    .center{ text-align:center; }
    .text_align_center{ text-align:center; }
    
    .landing-hero2 {
      border-radius: 0 0 0.5rem 0.7rem;
      padding-top: 10.0rem;
        background-color: rgba(184, 184, 184, 0.12);
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        height:550px;
    }
    .landing-hero2::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
    
    .icon-card{ width:150px; height:120px;}
    .card-body i{ font-size:30px; }
    .card-body p{ font-size:20px; }
    
    .fas{ animation: fadeIn 2s ease-in-out; }
    .far{ animation: fadeIn 2s ease-in-out; }
    @keyframes fadeIn {
        0% { opacity:0.3; }
        100% { opacity:1; }
    }
     
    .box-group-transp{ margin-top:-140px; }
    .col-buttons-transp{ width:286px; margin-left: 70px; margin-top:20px; }
    .btn-all-transp{ width:385px; height:70px; margin:0 auto; }
    .btn-left-transp{ background-color:#17669b; width:23%; text-align:center; border-top-left-radius: 5px; border-bottom-left-radius: 5px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
    .btn-right-transp{ background-color:rgba(1, 116, 178, 0.2); width:74%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
    .btn-right-transp p{ color:white; font-size:19px; opacity: 1.0 !important; margin-left:12px; margin-top:26px; font-weight: 500; }
    .btn-right-transp-big{ font-size:15px !important; }
    .btn-right-transp-lg{ background-color:#0189d3; width:80%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
    .btn-right-transp-lg p{ color:white; font-size:18px; margin-left:12px; margin-top:10px; }
    .btn-right-transp:hover{ background-color:rgba(255, 255, 255, 0.3); transform: translateY(-2px); transition: all 0.3s ease; }
    .btn-all-transp{ width:385px; height:70px; margin:0 auto; transition: all 0.3s ease; }
    .btn-all-transp:hover{ box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15); }
    .icon-btn-transp{ font-size:30px; padding-top:23px; color:white; }
    .index-img-icon{ width:35px; padding-top:20px; }
    .fa-icon{ font-size:35px; padding-top:20px; color:white; }
    
    .hover-menu{ height:105px; }
    .hover-menu:hover{ background-color:#f2f2f2; }
    
    .observatorio-title {
        color: white;
        font-size: 2.5rem;
        font-weight: 700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        letter-spacing: 3px;
        background: linear-gradient(135deg, white, white);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-transform: uppercase;
        position: relative;
        margin-bottom: 30px;
    }
    
    .observatorio-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(135deg, #17669b, #0189d3);
        border-radius: 2px;
    }
    
    .info-card {
        background-color:rgba(255, 255, 255, 0.78);
        border-radius: 20px;
        padding: 2.5rem 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 1px solid rgba(23, 102, 155, 0.1);
        position: relative;
        overflow: hidden;
        width:70%;
        margin:0 auto;
    }
    
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .info-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, #17669b, #0189d3);
        border-radius: 20px 20px 0 0;
    }
    
    .card-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #17669b, #0189d3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: black;
        box-shadow: 0 8px 20px rgba(23, 102, 155, 0.3);
    }
    
    .card-title {
        color: black;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-align: center;
    }
    
    .card-description {
        color: #1a1a1aff;
        font-size: 0.95rem;
        line-height: 1.6;
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .card-btn {
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        text-align: center;
        width: 100%;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
    }
    
    .card-btn:hover {
        background: linear-gradient(135deg, #0189d3, #17669b);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(23, 102, 155, 0.4);
    }
</style>

    {{-- .background + item --}}
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero2 position-relative" style="background-image: url('{{ asset('images/5.png') }}'); background-repeat: no-repeat; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:0px; background-size: cover; background-position: center; background-repeat: no-repeat; width:100%; height:750px;">

            <div class="row box-group-transp" style="background-color:; ">
                <!-- left -->
            <div class="col-7" style="background-color: ;">
                <!-- 1 -->
                <div class="row">
                    <div class="col-6" style="background-color: ;">
                        <div class="col-buttons-transp">
                            <a href="{{ route('categoria-pessoas-situacao-rua') }}" style="text-decoration:none;">
                                <div class="row btn-all-transp">
                                    <div class="btn-left-transp">
                                        <i class="fas fa-home fa-icon" style="margin-top:15px;"></i>
                                    </div>
                                    <div class="btn-right-transp">
                                        <p>Pessoas em Situação de Rua</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6" style="background-color: ; margin-top:4px;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-user-friends fa-icon"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Pessoas Idosas</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                    
                </div>
                
                <!-- 2 -->
                <div class="row">
                <div class="col-6 mt-4" style="background-color: ;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-shield-alt fa-icon" style="margin-top:15px;"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Defensores de Direitos Humanos</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6" style="background-color: ; margin-top:px;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-rainbow fa-icon"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Pessoas LGBTQIA+</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
                
                <!-- 3 -->
                <div class="row">
                    <div class="col-6 mt-4" style="background-color: ;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-lock fa-icon" style="margin-top:15px;"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Pessoas Privadas de Liberdade</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-6" style="background-color: ; margin-top:-20px;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-school fa-icon"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Violências nas Escolas</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>  
                
                <!-- 4 -->
                <div class="row">
                <div class="col-6 mt-4" style="background-color: ;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-certificate fa-icon" style="margin-top:14px;"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Registro Civil de Nascimento</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6" style="background-color: ; margin-top:-40px;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-building fa-icon"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Capacidade Institucional</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>

                <!-- 5 -->
                <div class="row">
                    <div class="col-6 mt-4" style="background-color: ;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-user-shield fa-icon" style="margin-top:17px;"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Direitos Humanos e Segurança Pública</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
               
                
                <div class="col-6" style="background-color: ; margin-top:-60px;">
                    <div class="col-buttons-transp">
                        <a href="{{ route('criancas_e_adolescentes') }}" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-child fa-icon"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Crianças e Adolescentes</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>

                <!-- 6 -->
                <div class="row">
                 <div class="col-6 mt-4" style="background-color: ;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-ban fa-icon" style="margin-top:15px;"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Enfrentamento ao Discurso de Ódio</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-6" style="background-color: ; margin-top:-80px;">
                        <div class="col-buttons-transp">
                            <a href="#" style="text-decoration:none;">
                                <div class="row btn-all-transp">
                                    <div class="btn-left-transp">
                                        <i class="fas fa-wheelchair fa-icon"></i>
                                    </div>
                                    <div class="btn-right-transp">
                                        <p>Pessoas com Deficiência</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="row">
                <div class="col-6"></div>
                <div class="col-6" style="background-color: ; margin-top:-100px;">
                    <div class="col-buttons-transp">
                        <a href="#" style="text-decoration:none;">
                            <div class="row btn-all-transp">
                                <div class="btn-left-transp">
                                    <i class="fas fa-book-open fa-icon"></i>
                                </div>
                                <div class="btn-right-transp">
                                    <p>Memória e Verdade</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>

                <!-- right -->
                <div class="col-5" style="background-color:;">
                    
                    <div class="container">

                        <div class="col-12 mt-4">
                            <div class="info-card">
                                <div class="card-icon">
                                    <i class="fas fa-eye" style="color:white;"></i>
                                </div>
                                <h4 class="card-title">Observatório de Direitos Humanos</h4>
                                <p class="card-description">
                                    O Observatório é um instrumento de monitoramento, análise e divulgação de informações sobre a situação dos direitos humanos em Natal. Acompanhamos indicadores, produzimos relatórios e promovemos ações para a garantia dos direitos fundamentais de todos os cidadãos.
                                </p>
                                <a href="#" class="card-btn">
                                    <i class="fas fa-info-circle" style="margin-right: 8px;"></i>
                                    Saiba Mais
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
     
@endsection