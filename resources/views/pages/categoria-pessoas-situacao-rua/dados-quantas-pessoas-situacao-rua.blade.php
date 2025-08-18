@extends('layouts.main')

@section('title', 'Quantas pessoas estão em situação de rua no Brasil?')

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
    
    .hero-section {
        background: linear-gradient(135deg, rgba(23, 102, 155, 0.9), rgba(1, 137, 211, 0.9)), 
                    url('{{ asset("images/banner-natal.png") }}') center/cover;
        padding: 80px 0;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
    }
    
    .hero-title {
        color: white;
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        line-height: 1.2;
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        opacity: 0.9;
    }
    
    .breadcrumb-nav {
        background: #f8f9fa;
        padding: 20px 0;
        border-bottom: 1px solid #e9ecef;
    }
    
    .breadcrumb-custom {
        background: none;
        margin: 0;
        padding: 0;
    }
    
    .breadcrumb-custom .breadcrumb-item a {
        color: #17669b;
        text-decoration: none;
    }
    
    .breadcrumb-custom .breadcrumb-item.active {
        color: #6c757d;
    }
    
    .content-section {
        padding: 60px 0;
        background: white;
    }
    
    .statistics-highlight {
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        padding: 40px;
        border-radius: 20px;
        text-align: center;
        margin: 40px 0;
        box-shadow: 0 15px 35px rgba(23, 102, 155, 0.3);
    }
    
    .stat-number {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    .stat-label {
        font-size: 1.2rem;
        opacity: 0.9;
    }
    
    .faq-section {
        background: #f8f9fa;
        padding: 60px 0;
    }
    
    .faq-item {
        background: white;
        border-radius: 15px;
        margin-bottom: 20px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }
    
    .faq-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }
    
    .faq-question {
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        padding: 25px 30px;
        cursor: pointer;
        font-size: 1.6rem;
        font-weight: 600;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .faq-question:hover {
        background: linear-gradient(135deg, #0e4a6b, #016ba0);
    }
    
    .faq-answer {
        padding: 30px;
        display: none;
        border-top: 3px solid #17669b;
    }

    .faq-answer p{
        margin: 0;
        line-height: 1.6;
        color: black;
        font-size:20px;
    }

    .faq-answer ul li{
        margin-bottom: 10px;
        margin-top:10px;
        color: black;
        font-size: 18px;
    }
    
    .faq-answer.active {
        display: block;
        animation: fadeInDown 0.3s ease;
    }
    
    .faq-icon {
        transition: transform 0.3s ease;
    }
    
    .faq-icon.rotated {
        transform: rotate(180deg);
    }
    
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .chart-container {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        margin: 30px 0;
        text-align: center;
    }
    
    .chart-title {
        color: #17669b;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .chart-placeholder {
        width: 100%;
        height: 300px;
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border: 2px dashed #17669b;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #17669b;
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .info-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        margin: 20px 0;
        border-left: 5px solid #17669b;
    }
    
    .info-card h4 {
        color: #17669b;
        font-weight: 700;
        margin-bottom: 15px;
        font-size:27px;
    }
    
    .info-card p {
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 0;
        font-size:18px;
        color:black;
    }

    .info-card ul li{
        margin-bottom: 10px;
        margin-top:10px;
        color: black;
        font-size: 18px;
    }
    
    .link-button {
        display: inline-block;
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        padding: 15px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(23, 102, 155, 0.3);
        margin: 10px 10px 10px 0;
    }
    
    .link-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(23, 102, 155, 0.4);
        text-decoration: none;
        color: white;
    }
    
    .image-showcase {
        text-align: center;
        margin: 40px 0;
    }
    
    .image-showcase img {
        max-width: 100%;
        height: auto;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .section-title {
        color: #17669b;
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #17669b, #0189d3);
        border-radius: 2px;
    }
    
    /* Filtro de Escala de Cinza */
    .grayscale-filter {
        filter: grayscale(100%);
        background-color: #000000 !important;
        transition: all 0.5s ease;
    }
    
    .grayscale-filter .hero-section,
    .grayscale-filter .content-section,
    .grayscale-filter .faq-section,
    .grayscale-filter .breadcrumb-nav {
        background-color: #000000 !important;
    }
    
    .grayscale-filter .faq-item,
    .grayscale-filter .chart-container,
    .grayscale-filter .info-card {
        background-color: #1a1a1a !important;
        color: #ffffff !important;
    }
    
    .grayscale-filter .section-title,
    .grayscale-filter .chart-title,
    .grayscale-filter .info-card h4 {
        color: #ffffff !important;
    }
    
    .grayscale-filter .info-card p {
        color: #cccccc !important;
    }
    
    .filter-toggle-btn {
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(23, 102, 155, 0.3);
        transition: all 0.3s ease;
        z-index: 1000;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .filter-toggle-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(23, 102, 155, 0.4);
    }
    
    .filter-toggle-btn.active {
        background: linear-gradient(135deg, #6c757d, #495057);
    }
    
    /* Botões de Acessibilidade */
    .accessibility-controls {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    
    .accessibility-btn {
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        border: none;
        padding: 12px 16px;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(23, 102, 155, 0.3);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
        min-width: 120px;
        justify-content: center;
    }
    
    .accessibility-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(23, 102, 155, 0.4);
    }
    
    .accessibility-btn.active {
        background: linear-gradient(135deg, #6c757d, #495057);
    }
    
    .font-size-btn {
        background: linear-gradient(135deg, #28a745, #20c997);
        min-width: 60px;
        padding: 12px 16px;
        font-size: 16px;
        font-weight: 700;
    }
    
    .font-size-btn:hover {
        background: linear-gradient(135deg, #218838, #1abc9c);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.4);
    }
    
    /* Controles de Fonte */
    .font-controls {
        display: flex;
        gap: 5px;
    }
    
    /* Classes para controle de tamanho de fonte */
    .font-size-small {
        font-size: 0.85em !important;
    }
    
    .font-size-normal {
        font-size: 1em !important;
    }
    
    .font-size-large {
        font-size: 1.15em !important;
    }
    
    .font-size-extra-large {
        font-size: 1.3em !important;
    }
    
    /* Aplicar aos elementos de texto */
    body.font-increase-1 .hero-title {
        font-size: 3.45rem !important;
    }
    
    body.font-increase-1 .hero-subtitle {
        font-size: 1.38rem !important;
    }
    
    body.font-increase-1 .section-title {
        font-size: 2.875rem !important;
    }
    
    body.font-increase-1 .faq-question {
        font-size: 1.84rem !important;
    }
    
    body.font-increase-1 .faq-answer p {
        font-size: 23px !important;
    }
    
    body.font-increase-1 .faq-answer ul li {
        font-size: 20.7px !important;
    }
    
    body.font-increase-1 .info-card h4 {
        font-size: 31.05px !important;
    }
    
    body.font-increase-1 .info-card p {
        font-size: 20.7px !important;
    }
    
    body.font-increase-1 .chart-title {
        font-size: 1.725rem !important;
    }
    
    body.font-increase-2 .hero-title {
        font-size: 3.9rem !important;
    }
    
    body.font-increase-2 .hero-subtitle {
        font-size: 1.56rem !important;
    }
    
    body.font-increase-2 .section-title {
        font-size: 3.25rem !important;
    }
    
    body.font-increase-2 .faq-question {
        font-size: 2.08rem !important;
    }
    
    body.font-increase-2 .faq-answer p {
        font-size: 26px !important;
    }
    
    body.font-increase-2 .faq-answer ul li {
        font-size: 23.4px !important;
    }
    
    body.font-increase-2 .info-card h4 {
        font-size: 35.1px !important;
    }
    
    body.font-increase-2 .info-card p {
        font-size: 23.4px !important;
    }
    
    body.font-increase-2 .chart-title {
        font-size: 1.95rem !important;
    }
    
    body.font-decrease-1 .hero-title {
        font-size: 2.55rem !important;
    }
    
    body.font-decrease-1 .hero-subtitle {
        font-size: 1.02rem !important;
    }
    
    body.font-decrease-1 .section-title {
        font-size: 2.125rem !important;
    }
    
    body.font-decrease-1 .faq-question {
        font-size: 1.36rem !important;
    }
    
    body.font-decrease-1 .faq-answer p {
        font-size: 17px !important;
    }
    
    body.font-decrease-1 .faq-answer ul li {
        font-size: 15.3px !important;
    }
    
    body.font-decrease-1 .info-card h4 {
        font-size: 22.95px !important;
    }
    
    body.font-decrease-1 .info-card p {
        font-size: 15.3px !important;
    }
    
    body.font-decrease-1 .chart-title {
        font-size: 1.275rem !important;
    }
    
    /* Estilos para Conteúdo Unificado */
    .content-block {
        margin-bottom: 80px;
        position: relative;
    }
    
    .content-block:nth-child(even) {
        background: rgba(248, 249, 250, 0.5);
        padding: 40px 0;
        border-radius: 20px;
        margin: 40px -30px 80px -30px;
    }
    
    .content-title {
        color: #17669b;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .content-title i {
        font-size: 1.5rem;
    }
    
    .content-text {
        padding: 20px 0;
    }
    
    .content-text p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #2c3e50;
        margin-bottom: 1.2rem;
    }
    
    .custom-list {
        list-style: none;
        padding-left: 0;
    }
    
    .custom-list li {
        padding: 10px 0 10px 30px;
        position: relative;
        font-size: 1rem;
        line-height: 1.6;
        color: #2c3e50;
        border-bottom: 1px solid #e9ecef;
    }
    
    .custom-list li:before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 10px;
        color: #17669b;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    .custom-list li:last-child {
        border-bottom: none;
    }
    
    .timeline-stats {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        padding: 30px;
        border-radius: 15px;
        margin: 20px 0;
    }
    
    .stat-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px 0;
        border-bottom: 1px solid #dee2e6;
    }
    
    .stat-item:last-child {
        border-bottom: none;
    }
    
    .stat-item.highlight {
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin-top: 10px;
        border-bottom: none;
    }
    
    .stat-item .year {
        font-size: 1.2rem;
        font-weight: 700;
        min-width: 60px;
        color: #17669b;
    }
    
    .stat-item.highlight .year {
        color: white;
    }
    
    .stat-item .number {
        font-size: 1.5rem;
        font-weight: 700;
        color: #0189d3;
        min-width: 100px;
    }
    
    .stat-item.highlight .number {
        color: white;
        font-size: 1.8rem;
    }
    
    .stat-item .label {
        font-size: 0.95rem;
        color: #6c757d;
    }
    
    .stat-item.highlight .label {
        color: rgba(255, 255, 255, 0.9);
    }
    
    .city-list, .region-list {
        list-style: none;
        padding-left: 0;
    }
    
    .city-list li, .region-list li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        border-bottom: 1px solid #e9ecef;
        font-size: 1rem;
    }
    
    .city-list li:last-child, .region-list li:last-child {
        border-bottom: none;
    }
    
    .city-list .number, .region-list .percentage {
        font-weight: 700;
        color: #17669b;
        background: rgba(23, 102, 155, 0.1);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.9rem;
    }
    
    .feature-box {
        text-align: center;
        padding: 30px 20px;
        margin-bottom: 30px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border-top: 4px solid transparent;
    }
    
    .feature-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        border-top-color: #17669b;
    }
    
    .feature-box h5 {
        color: #2c3e50;
        font-weight: 700;
        margin: 15px 0 10px;
        font-size: 1.1rem;
    }
    
    .feature-box p {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.5;
        margin: 0;
    }
    
    .causes-list {
        margin-top: 20px;
    }
    
    .cause-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        padding: 20px;
        margin-bottom: 15px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        border-left: 4px solid #17669b;
        transition: all 0.3s ease;
    }
    
    .cause-item:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }
    
    .cause-item i {
        font-size: 1.5rem;
        color: #17669b;
        margin-top: 5px;
        min-width: 24px;
    }
    
    .cause-item h6 {
        color: #2c3e50;
        font-weight: 700;
        margin: 0 0 8px 0;
        font-size: 1.1rem;
    }
    
    .cause-item p {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.5;
        margin: 0;
    }
    
    .badge {
        font-size: 0.9rem;
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
    }
    
    .badge-info {
        background: #17669b;
        color: white;
    }
    
    .badge-warning {
        background: #ffc107;
        color: #212529;
    }
    
    .quick-access-section {
        background: linear-gradient(135deg, rgba(23, 102, 155, 0.05), rgba(1, 137, 211, 0.05));
        padding: 50px 30px;
        border-radius: 20px;
        margin-top: 60px;
        border: 2px solid rgba(23, 102, 155, 0.1);
    }
    
    .quick-access-section h4 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .quick-access-section p {
        font-size: 1.1rem;
        color: #6c757d;
        margin-bottom: 30px;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .stat-number {
            font-size: 2.5rem;
        }
        
        .accessibility-controls {
            top: 10px;
            right: 10px;
        }
        
        .accessibility-btn {
            padding: 10px 14px;
            font-size: 12px;
            min-width: 100px;
        }
        
        .font-size-btn {
            min-width: 50px;
            padding: 10px 14px;
            font-size: 14px;
        }
        
        .faq-question {
            padding: 20px;
            font-size: 1rem;
        }
        
        .faq-answer {
            padding: 20px;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/categoria-pessoas-situacao-rua.png') }}'); background-repeat: no-repeat; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:0px; background-size: cover; background-position: center; background-repeat: no-repeat; width:100%; height:;">
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">Quantas pessoas estão em situação de rua no Brasil?</h1>
            <p class="hero-subtitle">Dados, análises e informações sobre a população em situação de rua no território nacional</p>
        </div>
    </div>
</section>
<section class="row" >
    <div class="col" style="background-color:#17669b; height:20px; color:white; text-align:right; padding-right: 20px;">
        <i>Prefeitura Municipal de Natal</i>
    </div>
</section>

<!-- Breadcrumb -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pessoas em Situação de Rua</a></li>
                        <li class="breadcrumb-item active">Quantas pessoas estão em situação de rua</li>
                    </ol>
                </div>
            </nav>
        </div>
        <div class="col-2" style="text-align: right;">
            <button class="mt-4 btn btn-danger btn-sm" id="fontIncrease" onclick="increaseFontSize()">
                +Fonte
            </button>
            <button class="mt-4 btn btn-danger btn-sm" id="fontDecrease" onclick="decreaseFontSize()">
                -Fonte
            </button>
        </div>
    </div>
</div>

<!-- Estatística Destacada -->
<section class="content-section" style="margin-top:-90px;">
    <div class="container-fluid">
        <div class="statistics-highlight">
            <div class="stat-number">281.472</div>
            <div class="stat-label">Pessoas em situação de rua cadastradas no Cadastro Único (2025)</div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="image-showcase">
                    <img src="{{ asset('images/categoria-pessoas-situacao-rua-dados-2.png') }}" alt="População em situação de rua" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-card">
                    <h4><i class="fas fa-info-circle"></i> Sobre os Dados</h4>
                    <p>
                        Os dados apresentados são baseados no Cadastro Único para Programas Sociais do Governo Federal, que registra informações de famílias de baixa renda no Brasil. É importante ressaltar que estes números podem representar uma subestimação da realidade, devido às dificuldades inerentes ao mapeamento desta população.
                        <br/><br/>
                        A população em situação de rua no Brasil é diversa e enfrenta desafios significativos para garantir seus direitos básicos. 
                        <br/><br/>
                        De acordo com o  Decreto nº 7.053 de 2009 , essa população inclui pessoas em extrema pobreza, com vínculos familiares rompidos ou fragilizados, que utilizam espaços públicos, áreas degradadas ou abrigos temporários como moradia e sustento.   
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conteúdo Unificado -->
<section class="content-section" style="margin-top: -90px;">
    <div class="container">
        <h2 class="section-title">Dados e Análises Completos</h2>
        
        <!-- Seção 1: Quantas pessoas estão em situação de rua no Brasil? -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-users text-primary"></i>
                            Quantas pessoas estão em situação de rua no Brasil?
                        </h3>
                        <p>Segundo os dados mais recentes do Cadastro Único, existem <strong>281.472 pessoas em situação de rua</strong> registradas no sistema. No entanto, este número representa apenas uma parcela da realidade, pois muitas pessoas nesta condição não estão cadastradas nos sistemas oficiais.</p>
                        <p>Estudos indicam que o número real pode ser significativamente maior, chegando a estimativas de <strong>mais de 400 mil pessoas</strong> em todo o território nacional, considerando aqueles que não possuem registro formal.</p>
                        <div class="mt-3">
                            <span class="badge badge-info">Dados oficiais: 281.472</span>
                            <span class="badge badge-warning">Estimativa real: +400.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">População Registrada vs Estimada</h4>
                        <div class="chart-placeholder">
                            <div>
                                <i class="fas fa-chart-bar fa-3x mb-3"></i><br>
                                Gráfico comparativo entre<br>
                                dados oficiais e estimativas<br>
                                da população em situação de rua
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção 2: Por que é difícil medir o tamanho dessa população? -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-search-minus text-warning"></i>
                            Por que é difícil medir o tamanho dessa população?
                        </h3>
                        <p>Medir a população em situação de rua apresenta desafios únicos que tornam os dados sempre subestimados:</p>
                        <ul class="custom-list">
                            <li><strong>Mobilidade constante:</strong> Muitas pessoas se deslocam frequentemente entre diferentes locais</li>
                            <li><strong>Desconfiança institucional:</strong> Receio de participar de cadastros ou pesquisas oficiais</li>
                            <li><strong>Invisibilidade social:</strong> Tendência a evitar espaços onde possam ser identificadas</li>
                            <li><strong>Falta de documentação:</strong> Muitos não possuem documentos necessários para cadastros</li>
                            <li><strong>Metodologias diferentes:</strong> Cada estudo utiliza critérios e métodos distintos</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="chart-container">
                        <h4 class="chart-title">Desafios de Mensuração</h4>
                        <div class="chart-placeholder">
                            <div>
                                <i class="fas fa-chart-pie fa-3x mb-3"></i><br>
                                Gráfico pizza mostrando<br>
                                os principais obstáculos<br>
                                para contagem precisa
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção 3: Como o número tem evoluído? -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-chart-line text-success"></i>
                            Como o número de pessoas em situação de rua tem evoluído?
                        </h3>
                        <p>Os dados mostram uma tendência preocupante de crescimento nos últimos anos:</p>
                        <div class="timeline-stats">
                            <div class="stat-item">
                                <span class="year">2012</span>
                                <span class="number">~150.000</span>
                                <span class="label">pessoas (estimativa)</span>
                            </div>
                            <div class="stat-item">
                                <span class="year">2020</span>
                                <span class="number">221.869</span>
                                <span class="label">pessoas cadastradas</span>
                            </div>
                            <div class="stat-item highlight">
                                <span class="year">2025</span>
                                <span class="number">281.472</span>
                                <span class="label">pessoas cadastradas</span>
                            </div>
                        </div>
                        <p class="mt-3">Este aumento pode estar relacionado a fatores como crise econômica, desemprego, questões de saúde mental, dependência química e falta de políticas habitacionais adequadas.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">Evolução Temporal (2012-2025)</h4>
                        <div class="chart-placeholder">
                            <div>
                                <i class="fas fa-chart-line fa-3x mb-3"></i><br>
                                Gráfico de linha mostrando<br>
                                o crescimento da população<br>
                                ao longo dos anos
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção 4: Distribuição Geográfica -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-map-marked-alt text-info"></i>
                            Onde estão as pessoas em situação de rua?
                        </h3>
                        <p>A distribuição geográfica das pessoas em situação de rua no Brasil apresenta características específicas e concentração em determinadas regiões:</p>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h5><i class="fas fa-city"></i> Principais Cidades</h5>
                                <ul class="city-list">
                                    <li>São Paulo: <span class="number">~31.000</span></li>
                                    <li>Rio de Janeiro: <span class="number">~15.000</span></li>
                                    <li>Belo Horizonte: <span class="number">~9.000</span></li>
                                    <li>Salvador: <span class="number">~6.000</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-map"></i> Por Região</h5>
                                <ul class="region-list">
                                    <li>Sudeste: <span class="percentage">45%</span></li>
                                    <li>Nordeste: <span class="percentage">28%</span></li>
                                    <li>Sul: <span class="percentage">15%</span></li>
                                    <li>Norte: <span class="percentage">8%</span></li>
                                    <li>Centro-Oeste: <span class="percentage">4%</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="chart-container">
                        <h4 class="chart-title">Distribuição por Região</h4>
                        <div class="chart-placeholder">
                            <div>
                                <i class="fas fa-chart-pie fa-3x mb-3"></i><br>
                                Gráfico de pizza mostrando<br>
                                a distribuição regional<br>
                                da população
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção 5: Concentração Urbana (Sem Gráfico) -->
        <div class="content-block">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="content-text text-center">
                        <h3 class="content-title">
                            <i class="fas fa-building text-primary"></i>
                            Concentração em grandes centros urbanos
                        </h3>
                        <p>Os grandes centros urbanos concentram a maior parte da população em situação de rua devido a fatores socioeconômicos específicos que atraem e mantêm essa população vulnerável:</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-briefcase fa-2x text-success mb-3"></i>
                                    <h5>Oportunidades de Trabalho</h5>
                                    <p>Maior disponibilidade de atividades informais como reciclagem e trabalhos esporádicos</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-hands-helping fa-2x text-warning mb-3"></i>
                                    <h5>Serviços Assistenciais</h5>
                                    <p>Concentração de ONGs, albergues e serviços públicos especializados</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-user-secret fa-2x text-info mb-3"></i>
                                    <h5>Anonimato Urbano</h5>
                                    <p>Menor exposição pessoal e redução do julgamento social</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-hospital fa-2x text-danger mb-3"></i>
                                    <h5>Infraestrutura</h5>
                                    <p>Acesso facilitado a transportes, hospitais e outros serviços essenciais</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção 6: Interiorização do Fenômeno -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-arrow-right text-danger"></i>
                            Avanço na interiorização do fenômeno
                        </h3>
                        <p>Nos últimos anos, observa-se um crescimento preocupante da população em situação de rua em cidades médias e pequenas, representando uma mudança no padrão tradicional de concentração urbana:</p>
                        
                        <div class="causes-list">
                            <div class="cause-item">
                                <i class="fas fa-exchange-alt"></i>
                                <div>
                                    <h6>Migração Interna</h6>
                                    <p>Pessoas se deslocam para cidades menores em busca de novas oportunidades</p>
                                </div>
                            </div>
                            <div class="cause-item">
                                <i class="fas fa-industry"></i>
                                <div>
                                    <h6>Crise Econômica Local</h6>
                                    <p>Fechamento de empresas e aumento do desemprego em cidades do interior</p>
                                </div>
                            </div>
                            <div class="cause-item">
                                <i class="fas fa-balance-scale"></i>
                                <div>
                                    <h6>Falta de Políticas Locais</h6>
                                    <p>Municípios menores com menor capacidade institucional de atendimento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">Crescimento no Interior</h4>
                        <div class="chart-placeholder">
                            <div>
                                <i class="fas fa-chart-area fa-3x mb-3"></i><br>
                                Gráfico de área mostrando<br>
                                o crescimento em cidades<br>
                                de médio e pequeno porte
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Links de Acesso Rápido -->
        <div class="quick-access-section">
            <div class="text-center mb-4">
                <h4 class="text-primary">Acesse Mais Dados</h4>
                <p>Explore informações detalhadas e recursos adicionais</p>
            </div>
            <div class="text-center">
                <a href="#" class="link-button">
                    <i class="fas fa-database"></i> Observatório do Cadastro Único
                </a>
                <a href="#" class="link-button">
                    <i class="fas fa-chart-area"></i> Painel de Dados Completo
                </a>
                <a href="#" class="link-button">
                    <i class="fas fa-download"></i> Baixar Relatório PDF
                </a>
                <a href="#" class="link-button">
                    <i class="fas fa-file-excel"></i> Planilha de Dados
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Condições de Moradia -->
<section class="faq-section" style="margin-top: -80px;">
    <div class="container">
        <h2 class="section-title">Condições de Moradia e Monitoramento</h2>
        
        <div class="row">
            <div class="col-md-6">
                <div class="info-card">
                    <h4><i class="fas fa-home"></i> Condições de Moradia</h4>
                    <p>A população em situação de rua vive em condições precárias, incluindo:</p>
                    <ul>
                        <li>Ruas, praças e espaços públicos (60%)</li>
                        <li>Albergues e abrigos públicos (25%)</li>
                        <li>Ocupações e imóveis abandonados (10%)</li>
                        <li>Outras situações (5%)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-card">
                    <h4><i class="fas fa-search"></i> Importância do Monitoramento</h4>
                    <p>Monitorar e qualificar esses dados é fundamental para:</p>
                    <ul>
                        <li>Desenvolvimento de políticas públicas efetivas</li>
                        <li>Alocação adequada de recursos</li>
                        <li>Avaliação de programas existentes</li>
                        <li>Compreensão das necessidades específicas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Links e Recursos -->
<section class="content-section">
    <div class="container">
        <h2 class="section-title">Links Úteis</h2>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-external-link-alt"></i> Ministério da Cidadania</h4>
                    <p>Acesse informações oficiais sobre políticas para população em situação de rua.</p>
                    <a href="#" class="link-button">Visitar Site</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-hands-helping"></i> Movimento Nacional</h4>
                    <p>Conheça o trabalho do Movimento Nacional da População de Rua.</p>
                    <a href="#" class="link-button">Mais Informações</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-book"></i> Pesquisas Acadêmicas</h4>
                    <p>Explore estudos e pesquisas sobre o tema realizados por universidades.</p>
                    <a href="#" class="link-button">Ver Estudos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Variável para controlar o nível de zoom da fonte
let fontSizeLevel = 0; // 0 = normal, 1 = increase-1, 2 = increase-2, -1 = decrease-1

function increaseFontSize() {
    const body = document.body;
    
    // Remover classes anteriores
    body.classList.remove('font-increase-1', 'font-increase-2', 'font-decrease-1');
    
    if (fontSizeLevel < 2) {
        fontSizeLevel++;
        if (fontSizeLevel === 1) {
            body.classList.add('font-increase-1');
        } else if (fontSizeLevel === 2) {
            body.classList.add('font-increase-2');
        }
    }
    
    updateFontButtons();
}

function decreaseFontSize() {
    const body = document.body;
    
    // Remover classes anteriores
    body.classList.remove('font-increase-1', 'font-increase-2', 'font-decrease-1');
    
    if (fontSizeLevel > -1) {
        fontSizeLevel--;
        if (fontSizeLevel === -1) {
            body.classList.add('font-decrease-1');
        }
    }
    
    updateFontButtons();
}

function updateFontButtons() {
    const increaseBtn = document.getElementById('fontIncrease');
    const decreaseBtn = document.getElementById('fontDecrease');
    
    if (increaseBtn && decreaseBtn) {
        // Resetar estilos
        increaseBtn.style.opacity = fontSizeLevel >= 2 ? '0.5' : '1';
        decreaseBtn.style.opacity = fontSizeLevel <= -1 ? '0.5' : '1';
        
        increaseBtn.style.cursor = fontSizeLevel >= 2 ? 'not-allowed' : 'pointer';
        decreaseBtn.style.cursor = fontSizeLevel <= -1 ? 'not-allowed' : 'pointer';
    }
}

function toggleGrayscale() {
    const body = document.body;
    const button = document.getElementById('grayscaleToggle');
    const filterText = document.getElementById('filterText');
    
    if (body.classList.contains('grayscale-filter')) {
        body.classList.remove('grayscale-filter');
        button.classList.remove('active');
        if (filterText) filterText.textContent = 'Escala de Cinza';
    } else {
        body.classList.add('grayscale-filter');
        button.classList.add('active');
        if (filterText) filterText.textContent = 'Colorido';
    }
}

// Adicionar efeitos visuais aos botões e animações de scroll
document.addEventListener('DOMContentLoaded', function() {
    const accessibilityBtns = document.querySelectorAll('.accessibility-btn, .font-size-btn');
    
    accessibilityBtns.forEach(button => {
        button.addEventListener('mouseenter', function() {
            if (this.style.cursor !== 'not-allowed') {
                this.style.transform = 'translateY(-3px) scale(1.05)';
            }
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Animação de entrada para os content-blocks
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Aplicar animação a todos os content-blocks
    document.querySelectorAll('.content-block').forEach(block => {
        block.style.opacity = '0';
        block.style.transform = 'translateY(30px)';
        block.style.transition = 'all 0.6s ease';
        observer.observe(block);
    });
    
    // Inicializar estado dos botões
    updateFontButtons();
});
</script>

@endsection