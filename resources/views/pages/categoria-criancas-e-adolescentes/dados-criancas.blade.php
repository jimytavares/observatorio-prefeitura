@extends('layouts.main')

@section('title', 'Painel de Dados - Jovens 15 a 29 anos')

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


<!-- background title -->
@include('globals.title-page')

<!-- Breadcrumb -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Crianças</a></li>
                        <li class="breadcrumb-item active">Dados sobre Crianças</li>
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
        
        <div class="row">
            <div class="col-md-6">
                <div class="image-showcase">
                    <img src="{{ asset('images/crianca-ia-full.png') }}" alt="População em situação de rua" class="img-fluid">
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
        
        <!-- ## Seção 1: População faixa etaria IBGE -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-users text-primary"></i>
                            Informação detalhada sobre o grafico de população por Faixa Etária (IBGE)
                        </h3>
                        <p style="width:90%; margin-left:20px;">Os dados do IBGE apresentados no gráfico acima mostram a distribuição da população de crianças e adolescentes em três faixas etárias: 0 a 6 anos, 7 a 11 anos e 12 a 17 anos. Observa-se que a faixa de 0 a 6 anos possui uma população total de <strong>60.919</strong> crianças, sendo <strong>29.766</strong> do sexo feminino e <strong>31.153</strong> do sexo masculino. Na faixa de 7 a 11 anos, são <strong>47.106</strong> crianças, com <strong>22.946</strong> meninas e <strong>24.160</strong> meninos. Já entre 12 e 17 anos, a população é de <strong>57.057</strong> adolescentes, sendo <strong>28.155</strong> do sexo feminino e <strong>28.902</strong> do sexo masculino.</p>
                        <div class="">
                            <span class="badge badge-info">Dados oficiais: 281.472</span>
                            <span class="badge badge-warning">Estimativa real: +400.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">População por Faixa Etária (IBGE)</h4>
                        <div id="apexchart-populacao-faixa-etaria"></div>
                        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                        <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var options = {
                                chart: {
                                    type: 'bar',
                                    height: 320
                                },
                                series: [
                                    {
                                        name: 'População',
                                        data: [60919, 47106, 57057]
                                    },
                                    {
                                        name: 'Feminino',
                                        data: [29766, 22946, 28155]
                                    },
                                    {
                                        name: 'Masculino',
                                        data: [31153, 24160, 28902]
                                    }
                                ],
                                xaxis: {
                                    categories: ['0-6 anos', '7-11 anos', '12-17 anos'],
                                    title: { text: 'Faixa Etária' }
                                },
                                yaxis: {
                                    title: { text: 'Quantidade' }
                                },
                                colors: ['#17669b', '#e83e8c', '#ffc107'],
                                plotOptions: {
                                    bar: {
                                        horizontal: false,
                                        columnWidth: '55%',
                                        endingShape: 'rounded'
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                legend: {
                                    position: 'top',
                                    horizontalAlign: 'center'
                                },
                                tooltip: {
                                    y: {
                                        formatter: function (val) {
                                            return val.toLocaleString('pt-BR');
                                        }
                                    }
                                }
                            };
                            var chart = new ApexCharts(document.querySelector("#apexchart-populacao-faixa-etaria"), options);
                            chart.render();
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## Seção 2: violencia domestica -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-map-marked-alt text-info"></i>
                            Violência Doméstica - Crianças/Adolescentes
                        </h3>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" style="background:#fff;">
                                        <thead style="background:#f8f9fa;">
                                            <tr>
                                                <th colspan="3" class="text-center"><b>Cor/Raça</b></th>
                                                <th colspan="2" class="text-center"><b>Sexo</b></th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Branco</th>
                                                <th class="text-center">Preto/Pardo</th>
                                                <th class="text-center">Outra</th>
                                                <th class="text-center">Feminino</th>
                                                <th class="text-center">Masculino</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">846</td>
                                                <td class="text-center">1355</td>
                                                <td class="text-center">133</td>
                                                <td class="text-center">1032</td>
                                                <td class="text-center">1246</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">726</td>
                                                <td class="text-center">900</td>
                                                <td class="text-center">49</td>
                                                <td class="text-center">828</td>
                                                <td class="text-center">817</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">765</td>
                                                <td class="text-center">981</td>
                                                <td class="text-center">104</td>
                                                <td class="text-center">1127</td>
                                                <td class="text-center">699</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="chart-container">
                        <div id="apexchart-violencia-domestica"></div>
                        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                        <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var options = {
                                chart: {
                                    type: 'pie',
                                    height: 320
                                },
                                series: [
                                    846+726+765, // Branco
                                    1355+900+981, // Preto/Pardo
                                    133+49+104   // Outra
                                ],
                                labels: ['Branco', 'Preto/Pardo', 'Outra'],
                                colors: ['#0040ff', '#ff0000', '#ff9900'],
                                legend: {
                                    position: 'bottom',
                                    horizontalAlign: 'center'
                                },
                                tooltip: {
                                    y: {
                                        formatter: function (val) {
                                            return val + ' casos';
                                        }
                                    }
                                },
                                dataLabels: {
                                    enabled: true,
                                    formatter: function (val, opts) {
                                        return opts.w.config.labels[opts.seriesIndex] + ': ' + opts.w.globals.series[opts.seriesIndex];
                                    },
                                    style: {
                                        fontSize: '15px',
                                        fontWeight: 'bold'
                                    }
                                },
                                title: {
                                    text: 'Casos por Cor/Raça (Total)',
                                    align: 'center',
                                    style: { fontSize: '16px' }
                                }
                            };
                            var chart = new ApexCharts(document.querySelector("#apexchart-violencia-domestica"), options);
                            chart.render();
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## Seção 3: Análise dos Dados de Violência Sexual -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="content-text">
                        <h3 class="content-title">
                            Análise dos Dados de Violência Sexual
                        </h3>
                        <p>
                            O gráfico ao lado apresenta os casos de violência sexual contra crianças e adolescentes, segmentados por cor/raça e sexo. Observa-se que, nas três linhas de dados analisadas, a maior parte dos casos envolve vítimas do sexo feminino, com números significativamente superiores aos do sexo masculino em todas as situações.<br><br>
                            Em relação à cor/raça, os grupos "Branco" e "Preto/Pardo" concentram a maioria dos registros, sendo que o grupo "Preto/Pardo" apresenta números próximos ou superiores ao grupo "Branco" em algumas linhas, evidenciando a vulnerabilidade desses segmentos. O grupo "Outra" apresenta números menores, mas ainda relevantes para o contexto.<br><br>
                            Esses dados reforçam a importância de políticas públicas específicas para a proteção de meninas e para o enfrentamento das desigualdades raciais, além de evidenciar a necessidade de ações integradas de prevenção e combate à violência sexual na infância e adolescência.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="chart-container">
                        <h4 class="chart-title">Violência Sexual - Crianças/Adolescentes</h4>
                        <div id="apexchart-violencia-sexual"></div>
                        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                        <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var options = {
                                chart: {
                                    type: 'bar',
                                    height: 320
                                },
                                series: [
                                    {
                                        name: 'Branco',
                                        data: [18, 54, 65]
                                    },
                                    {
                                        name: 'Preto/Pardo',
                                        data: [17, 39, 86]
                                    },
                                    {
                                        name: 'Outra',
                                        data: [8, 0, 20]
                                    },
                                    {
                                        name: 'Feminino',
                                        data: [33, 76, 139]
                                    },
                                    {
                                        name: 'Masculino',
                                        data: [5, 17, 22]
                                    }
                                ],
                                xaxis: {
                                    categories: ['0 - 6 ANOS', '7 - 11 ANOS', '12 - 17 ANOS'],
                                    title: { text: 'Faixa/Grupo' }
                                },
                                yaxis: {
                                    title: { text: 'Casos' }
                                },
                                colors: ['#0040ff', '#ff0000', '#ff9900', '#e83e8c', '#ffc107'],
                                plotOptions: {
                                    bar: {
                                        horizontal: false,
                                        columnWidth: '55%',
                                        endingShape: 'rounded'
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                legend: {
                                    position: 'top',
                                    horizontalAlign: 'center'
                                },
                                tooltip: {
                                    y: {
                                        formatter: function (val) {
                                            return val + ' casos';
                                        }
                                    }
                                },
                                title: {
                                    text: 'Casos de Violência Sexual por Cor/Raça e Sexo',
                                    align: 'center',
                                    style: { fontSize: '16px' }
                                }
                            };
                            var chart = new ApexCharts(document.querySelector("#apexchart-violencia-sexual"), options);
                            chart.render();
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção 3:  -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="content-text">
                        <h3 class="content-title">
                            <i class="fas fa-chart-line text-success"></i>
                            Analise dos dados
                        </h3>
                        <p>Os dados resume o assédio e importunação sexual de crianças/adolescentes do sexo feminino e masculino:</p>
                        <div class="timeline-stats">
                            <div class="stat-item">
                                <span class="year">0 - 6 ANOS</span>
                                <span class="number">10 / 0</span>
                                <span class="label">Feminino/Masculino</span>
                            </div>
                            <div class="stat-item">
                                <span class="year">7 - 11 ANOS</span>
                                <span class="number">10 / 1</span>
                                <span class="label">Feminino/Masculino</span>
                            </div>
                            <div class="stat-item highlight">
                                <span class="year">12 - 17 ANOS</span>
                                <span class="number">19 / 2</span>
                                <span class="label">Feminino/Masculino</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">Assédio / Importunação Sexual - Crianças/Adolescentes</h4>
                        <div id="apexchart-assedio-sexual"></div>
                        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                        <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var options = {
                                chart: {
                                    type: 'bar',
                                    height: 320
                                },
                                series: [
                                    {
                                        name: 'Branco',
                                        data: [4, 8, 10]
                                    },
                                    {
                                        name: 'Preto/Pardo',
                                        data: [5, 3, 10]
                                    },
                                    {
                                        name: 'Outra',
                                        data: [2, 0, 3]
                                    },
                                    {
                                        name: 'Feminino',
                                        data: [10, 10, 19]
                                    },
                                    {
                                        name: 'Masculino',
                                        data: [0, 1, 2]
                                    }
                                ],
                                xaxis: {
                                    categories: ['0 - 6 ANOS', '7 - 11 ANOS', '12 - 17 ANOS'],
                                    title: { text: 'Faixa/Grupo' }
                                },
                                yaxis: {
                                    title: { text: 'Casos' }
                                },
                                colors: ['#0040ff', '#ff0000', '#ff9900', '#e83e8c', '#ffc107'],
                                plotOptions: {
                                    bar: {
                                        horizontal: false,
                                        columnWidth: '55%',
                                        endingShape: 'rounded'
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                legend: {
                                    position: 'top',
                                    horizontalAlign: 'center'
                                },
                                tooltip: {
                                    y: {
                                        formatter: function (val) {
                                            return val + ' casos';
                                        }
                                    }
                                },
                                title: {
                                    text: 'Casos de Assédio/Importunação Sexual por Cor/Raça e Sexo',
                                    align: 'center',
                                    style: { fontSize: '16px' }
                                }
                            };
                            var chart = new ApexCharts(document.querySelector("#apexchart-assedio-sexual"), options);
                            chart.render();
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- Links de Acesso Rápido -->
        <div class="quick-access-section">
            <div class="text-center mb-4">
                <h4 class="text-primary">Download dos dados</h4>
                <p>Faça o download dos dados e gráficos desta página clicando no gráfico de sua preferência abaixo:</p>
            </div>
            <div class="text-center">
                <a href="#" class="link-button">
                    <i class="fas fa-download"></i> População por Faixa Etária (IBGE)
                </a>
                <a href="#" class="link-button">
                    <i class="fas fa-download"></i> Violência Doméstica
                </a>
                <a href="#" class="link-button">
                    <i class="fas fa-download"></i> Violência Sexual
                </a>
                <a href="#" class="link-button">
                    <i class="fas fa-download"></i> Assédio / Importunação Sexual
                </a>
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

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>

@endsection


