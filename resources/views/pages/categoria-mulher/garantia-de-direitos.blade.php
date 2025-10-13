@extends('layouts.main')

@section('title', 'Painel de Dados - Jovens 15 a 29 anos')

@section('content')

<style>
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
        font-weight: 400;
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
        font-weight: 400;
        margin-bottom: 15px;
        font-size:27px;
    }
    
    .info-card p {
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 0;
        font-size:21px;
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
        font-weight: 400;
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
@include('globals.title-page', [
    'image' => asset('images/lgbt.ia.png')  
])

<!-- Breadcrumb -->
@include('globals.breadcrumb')

<!-- Estatística Destacada -->
<section class="content-section" style="margin-top: -60px;">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                <div class="image-showcase">
                    <img src="{{ asset('images/lgbt2.jpeg') }}" style="width: 624px;" alt="População em situação de rua" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="info-card text-justify" >
                    <h4><i class="fas fa-info-circle"></i> Informação</h4>
                    <p>A garantia de direitos das mulheres compreende o conjunto de políticas públicas, serviços especializados e ações afirmativas voltadas para a promoção da igualdade de gênero, o enfrentamento à violência e o fortalecimento da autonomia social, econômica e política. Nesse sentido, destacam-se a rede de atendimento às mulheres em situação de violência, composta por delegacias especializadas, casas-abrigo, defensorias públicas e serviços de saúde, bem como políticas específicas para a promoção da saúde da mulher, incluindo atenção à saúde materna, sexual e reprodutiva. Também são fundamentais os programas que incentivam a inserção e permanência das mulheres no mercado de trabalho e em espaços de liderança, as ações educativas voltadas para a igualdade de gênero e combate a estereótipos e, por fim, as iniciativas que asseguram a participação feminina nos processos de formulação, execução e monitoramento das políticas públicas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conteúdo Unificado -->
<section class="content-section" style="margin-top: -90px;">
    <div class="container">
        <h2 class="section-title">Dados e Análises Completos</h2>

        <!-- ## Chart01: Acompanhamento LGBT -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">
                            <i class="fas fa-chart-bar"></i> Acompanhamento e Serviços LGBT
                        </h4>
                        <div id="acompanhamentoLGBTChart"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h4><i class="fas fa-users"></i> Análise dos Serviços LGBT</h4>
                        <p>Os dados revelam um conjunto abrangente de serviços e programas direcionados à população LGBT, demonstrando o compromisso com a garantia de direitos e inclusão social.</p>
                        
                        <p><strong>Destaques dos serviços:</strong></p>
                        
                        <ul class="custom-list">
                            <li><strong>Centro LGBT:</strong> 103 pessoas acompanhadas</li>
                            <li><strong>Cadastro Único:</strong> 82 pessoas inseridas</li>
                            <li><strong>Cesta Básica:</strong> 72 beneficiários</li>
                            <li><strong>Auxílio Social:</strong> 13 beneficiários</li>
                            <li><strong>Bolsa Família:</strong> 39 pessoas inseridas</li>
                            <li><strong>Ambulatório TT:</strong> 650 pessoas cadastradas</li>
                            <li><strong>Processo Transexualizador:</strong> 200 pessoas atendidas</li>
                        </ul>
                        
                        <p>O <strong>Ambulatório TT (Transexualizador) com 650 pessoas</strong> representa o maior volume de atendimento, seguido pelo <strong>processo transexualizador com 200 pessoas</strong>, evidenciando a demanda específica por cuidados de saúde da população trans.</p>
                        
                        <span class="badge badge-info">
                            <i class="fas fa-heart"></i> Cuidado Integral
                        </span>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Gráfico 1: Acompanhamento e Serviços LGBT
    var acompanhamentoLGBTOptions = {
        series: [{
            name: 'Pessoas Atendidas',
            data: [103, 82, 72, 13, 39, 650, 200]
        }],
        chart: {
            type: 'bar',
            height: 400,
            fontFamily: 'Arial, sans-serif',
            toolbar: {
                show: true,
                tools: {
                    download: true,
                    selection: false,
                    zoom: false,
                    zoomin: false,
                    zoomout: false,
                    pan: false,
                    reset: false
                }
            }
        },
        colors: ['#6f42c1'],
        plotOptions: {
            bar: {
                borderRadius: 8,
                columnWidth: '60%',
                distributed: true
            }
        },
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '12px',
                fontWeight: 'bold',
                colors: ['#fff']
            },
            formatter: function (val) {
                return val.toLocaleString('pt-BR');
            }
        },
        xaxis: {
            categories: ['Centro LGBT', 'Cadastro Único', 'Cesta Básica', 'Auxílio Social', 'Bolsa Família', 'Ambulatório TT', 'Processo Trans'],
            labels: {
                style: {
                    fontSize: '10px',
                    fontWeight: '600',
                    colors: '#333'
                },
                rotate: -45
            }
        },
        yaxis: {
            title: {
                text: 'Número de Pessoas',
                style: {
                    fontSize: '14px',
                    fontWeight: '600',
                    color: '#333'
                }
            },
            labels: {
                formatter: function (val) {
                    return val.toLocaleString('pt-BR');
                },
                style: {
                    fontSize: '12px',
                    colors: '#333'
                }
            }
        },
        title: {
            text: 'Serviços e Programas LGBT',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#6f42c1'
            }
        },
        subtitle: {
            text: 'Total de atendimentos por tipo de serviço',
            align: 'center',
            style: {
                fontSize: '12px',
                color: '#666'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Centro LGBT', 'Cadastro Único', 'Cesta Básica', 'Auxílio Social', 'Bolsa Família', 'Ambulatório TT', 'Processo Trans'];
                    const category = categories[opts.dataPointIndex];
                    
                    return val.toLocaleString('pt-BR') + ' pessoas atendidas em ' + category;
                }
            },
            style: {
                fontSize: '12px'
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        },
        legend: {
            show: false
        }
    };

    var acompanhamentoLGBTChart = new ApexCharts(document.querySelector("#acompanhamentoLGBTChart"), acompanhamentoLGBTOptions);
    acompanhamentoLGBTChart.render();

    // Gráfico 2: Violações por Faixa Etária
    var violacoesFaixaEtariaOptions = {
        series: [
            {
                name: 'Violência Patrimonial',
                data: [22, 16, 28]
            },
            {
                name: 'Trabalho Infantil',
                data: [15, 8, 9]
            },
            {
                name: 'Denúncias Recebidas',
                data: [298, 321, 154]
            }
        ],
        chart: {
            type: 'bar',
            height: 400,
            fontFamily: 'Arial, sans-serif',
            toolbar: {
                show: true,
                tools: {
                    download: true,
                    selection: false,
                    zoom: false,
                    zoomin: false,
                    zoomout: false,
                    pan: false,
                    reset: false
                }
            }
        },
        colors: ['#dc3545', '#fd7e14', '#28a745'],
        plotOptions: {
            bar: {
                borderRadius: 6,
                columnWidth: '70%',
                dataLabels: {
                    position: 'top'
                }
            }
        },
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '11px',
                fontWeight: 'bold',
                colors: ['#333']
            },
            formatter: function (val) {
                return val;
            },
            offsetY: -20
        },
        xaxis: {
            categories: ['Criança/Adolescente', 'Adolescente', 'Total Outras Faixas'],
            labels: {
                style: {
                    fontSize: '11px',
                    fontWeight: '600',
                    colors: '#333'
                }
            }
        },
        yaxis: {
            title: {
                text: 'Número de Casos',
                style: {
                    fontSize: '14px',
                    fontWeight: '600',
                    color: '#333'
                }
            },
            labels: {
                formatter: function (val) {
                    return val.toLocaleString('pt-BR');
                },
                style: {
                    fontSize: '12px',
                    colors: '#333'
                }
            }
        },
        title: {
            text: 'Violações por Faixa Etária',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#333'
            }
        },
        subtitle: {
            text: 'Distribuição de violações por tipo e idade',
            align: 'center',
            style: {
                fontSize: '12px',
                color: '#666'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val) {
                    return val.toLocaleString('pt-BR') + ' casos';
                }
            },
            style: {
                fontSize: '12px'
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            floating: false,
            fontSize: '12px',
            fontWeight: 600,
            markers: {
                width: 12,
                height: 12,
                radius: 6
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        }
    };

    var violacoesFaixaEtariaChart = new ApexCharts(document.querySelector("#violacoesFaixaEtariaChart"), violacoesFaixaEtariaOptions);
    violacoesFaixaEtariaChart.render();

    // Gráfico 3: Atendimento por Unidades
    var atendimentoUnidadesOptions = {
        series: [{
            name: 'Adolescentes Atendidos',
            data: [38, 3, 11, 1, 1, 8]
        }],
        chart: {
            type: 'bar',
            height: 400,
            fontFamily: 'Arial, sans-serif',
            toolbar: {
                show: true,
                tools: {
                    download: true,
                    selection: false,
                    zoom: false,
                    zoomin: false,
                    zoomout: false,
                    pan: false,
                    reset: false
                }
            }
        },
        colors: ['#17a2b8'],
        plotOptions: {
            bar: {
                borderRadius: 8,
                columnWidth: '60%',
                distributed: true
            }
        },
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '14px',
                fontWeight: 'bold',
                colors: ['#fff']
            },
            formatter: function (val) {
                return val;
            }
        },
        xaxis: {
            categories: ['CASE PITIMBU', 'CASE CAICÓ', 'CASE MOSSORÓ', 'CASEF P. JOÃO', 'CASEMI NAZARÉ', 'CASEMI S. DELMIRA'],
            labels: {
                style: {
                    fontSize: '10px',
                    fontWeight: '600',
                    colors: '#333'
                },
                rotate: -45
            }
        },
        yaxis: {
            title: {
                text: 'Número de Adolescentes',
                style: {
                    fontSize: '14px',
                    fontWeight: '600',
                    color: '#333'
                }
            },
            labels: {
                formatter: function (val) {
                    return val;
                },
                style: {
                    fontSize: '12px',
                    colors: '#333'
                }
            }
        },
        title: {
            text: 'Atendimento por Unidades Especializadas',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#17a2b8'
            }
        },
        subtitle: {
            text: 'Distribuição de adolescentes por unidade de atendimento',
            align: 'center',
            style: {
                fontSize: '12px',
                color: '#666'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['CASE PITIMBU', 'CASE CAICÓ', 'CASE MOSSORÓ', 'CASEF P. JOÃO', 'CASEMI NAZARÉ', 'CASEMI S. DELMIRA'];
                    const category = categories[opts.dataPointIndex];
                    
                    let typeInfo = '';
                    if (category.includes('CASE')) {
                        typeInfo = ' (Privação de Liberdade)';
                    } else if (category.includes('CASEF')) {
                        typeInfo = ' (Internação)';
                    } else if (category.includes('CASEMI')) {
                        typeInfo = ' (Semiliberdade)';
                    }
                    
                    return val + ' adolescentes em ' + category + typeInfo;
                }
            },
            style: {
                fontSize: '12px'
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        },
        legend: {
            show: false
        }
    };

    var atendimentoUnidadesChart = new ApexCharts(document.querySelector("#atendimentoUnidadesChart"), atendimentoUnidadesOptions);
    atendimentoUnidadesChart.render();

    // Gráfico Denúncias Recebidas (mantido do código anterior)
    var denunciasRecebidasOptions = {
        series: [{
            name: 'Denúncias',
            data: [451, 591, 70, 558, 525]
        }],
        chart: {
            type: 'bar',
            height: 400,
            fontFamily: 'Arial, sans-serif',
            toolbar: {
                show: true,
                tools: {
                    download: true,
                    selection: false,
                    zoom: false,
                    zoomin: false,
                    zoomout: false,
                    pan: false,
                    reset: false
                }
            }
        },
        colors: ['#28a745'],
        plotOptions: {
            bar: {
                borderRadius: 8,
                columnWidth: '60%',
                distributed: true
            }
        },
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '14px',
                fontWeight: 'bold',
                colors: ['#fff']
            },
            formatter: function (val) {
                return val.toLocaleString('pt-BR');
            }
        },
        xaxis: {
            categories: ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'],
            labels: {
                style: {
                    fontSize: '11px',
                    fontWeight: '600',
                    colors: '#333'
                },
                rotate: -15
            }
        },
        yaxis: {
            title: {
                text: 'Número de Denúncias',
                style: {
                    fontSize: '14px',
                    fontWeight: '600',
                    color: '#333'
                }
            },
            labels: {
                formatter: function (val) {
                    return val.toLocaleString('pt-BR');
                },
                style: {
                    fontSize: '12px',
                    colors: '#333'
                }
            }
        },
        title: {
            text: 'Denúncias Recebidas por Demografia',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#28a745'
            }
        },
        subtitle: {
            text: 'Total de 1.564 denúncias registradas',
            align: 'center',
            style: {
                fontSize: '12px',
                color: '#666'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'];
                    const category = categories[opts.dataPointIndex];
                    const total = 1564;
                    const percentage = ((val / total) * 100).toFixed(1);
                    
                    let categoryInfo = '';
                    if (category === 'Branco' || category === 'Preto/Pardo' || category === 'Outra') {
                        categoryInfo = ' (Raça/Cor)';
                    } else {
                        categoryInfo = ' (Gênero)';
                    }
                    
                    return val.toLocaleString('pt-BR') + ' denúncias' + categoryInfo + ' (' + percentage + '%)';
                }
            },
            style: {
                fontSize: '12px'
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        },
        legend: {
            show: false
        }
    };

    var denunciasRecebidasChart = new ApexCharts(document.querySelector("#denunciasRecebidasChart"), denunciasRecebidasOptions);
    denunciasRecebidasChart.render();
});
</script>

@endsection