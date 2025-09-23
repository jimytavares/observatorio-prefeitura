@extends('layouts.main')

@section('title', 'Observatório')

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
     
    .box-group-transp{ width:90%; margin:0 auto; }
    .col-buttons-transp{ width:286px; margin-left: 70px; margin-top:20px; }
    .btn-all-transp{ width:385px; height:70px; margin:0 auto; }
    .btn-left-transp{ z-index:1000; border-radius:60px; background-color:#fddf10; width:16%; height:60px; text-align:center; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
    .btn-right-transp{ margin-left:-30px; background-color:rgba(0, 0, 0, 0.2); width:67%; height:62px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; backdrop-filter: blur(30px); }
    .btn-right-transp p{ color:white; font-size:19px; opacity: 1.0 !important; margin-left:29px; margin-top:19px; font-weight: 500; }
    .btn-right-transp-big{ font-size:15px !important; }
    .btn-right-transp-lg{ background-color:#0189d3; width:80%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
    .btn-right-transp-lg p{ color:white; font-size:18px; margin-left:12px; margin-top:10px; }
    .btn-right-transp:hover{ background-color:rgba(255, 255, 255, 0.3); transform: translateY(-2px); transition: all 0.3s ease; }
    .btn-all-transp{ width:385px; height:70px; margin:0 auto; transition: all 0.3s ease; }
    .btn-all-transp:hover{ box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15); }
    .icon-btn-transp{ font-size:30px; padding-top:23px; color:white; }
    .index-img-icon{ width:35px; padding-top:20px; }
    .btn-left-transp i { color: #4c6b4e; font-size:30px; }
    .fa-icon{ font-size:35px; padding-top:15px; color:#; }
    
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
        background-color:white;
        border-radius: 20px;
        padding: 2.5rem 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 1px solid rgba(23, 102, 155, 0.1);
        position: relative;
        overflow: hidden;
        width:83%;
        height:350px;
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
        <div id="landingHero" class="section-py landing-hero2 position-relative" style="background: linear-gradient(rgba(0, 80, 170, 0.85), rgba(0, 80, 170, 0.85)), url('/images/5.png') center/cover no-repeat; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:0px; background-size: cover; background-position: center; background-repeat: no-repeat; width:100%; height:750px;">
            <div class="row box-group-transp">

                <!-- left -->
                <div class="col-6" style="background-color:;">

                    <!-- 1 -->
                    <div class="row">
                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                <a href="{{ route('criancas_e_adolescentes') }}" style="text-decoration:none;">
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-child fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>Criança</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                <a href="{{ route('lgbt') }}" style="text-decoration:none;">
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-hand-holding-heart fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>LGBT</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2 -->
                    <div class="row">
                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                 <a href="{{ route('juventude_page') }}" style="text-decoration:none;">                                
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-user-graduate fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>Juventude</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                <a href="{{ route('igualdade_racial') }}" style="text-decoration:none;">
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-user-friends fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>Igualdade Racial</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="row">
                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                <a href="{{ route('pessoas_com_deficiencia') }}" style="text-decoration:none;">
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-wheelchair fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>PCD</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                <a href="{{ route('violacao_de_direitos') }}" style="text-decoration:none;">
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-exclamation fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>Violação de Direitos</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="row">
                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                <a href="{{ route('pessoa_idosa') }}" style="text-decoration:none;">
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-user-friends fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>Pessoas Idosa</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6" style="background-color: ; margin-top:4px;">
                            <div class="col-buttons-transp">
                                <a href="{{ route('transtorno_do_aspecto_autista') }}" style="text-decoration:none;">
                                    <div class="row btn-all-transp">
                                        <div class="btn-left-transp">
                                            <i class="fas fa-user-friends fa-icon"></i>
                                        </div>
                                        <div class="btn-right-transp">
                                            <p>TEA</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- right -->
                <div class="col-6" style="background-color:;">
                    
                    <div class="container">

                        <div class="col-12 mt-4">
                            <div class="info-card">
                                <div class="card-icon">
                                    <i class="fas fa-eye" style="color:white;"></i>
                                </div>
                                <h4 class="card-title">Observatório de Direitos Humanos</h4>
                                <p class="card-description">
                                    O Observatório é um instrumento de monitoramento, análise e divulgação 
                                    de informações sobre a situação dos direitos humanos em Natal.
                                </p>
                                <a href="#" class="card-btn" style="margin-top:-20px;">
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