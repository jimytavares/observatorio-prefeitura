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
@include('globals.title-page', [
    'image' => asset('images/juventude.ia.png')  
])

<!-- Breadcrumb -->
@include('globals.breadcrumb')

<!-- Estatística Destacada -->
<section class="content-section" style="margin-top: -60px;">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="info-card text-justify">
                    <h4><i class="fas fa-info-circle"></i> Informação</h4>
                    <p>As violações de direitos que atingem os jovens estão relacionadas a diferentes dimensões de sua vida e comprometem seu desenvolvimento pleno e sua inserção social. Entre as mais recorrentes, estão a evasão e o abandono escolar, a dificuldade de acesso ao ensino superior e técnico de qualidade, o desemprego e a precarização do trabalho, que impactam diretamente suas perspectivas de futuro. </p><br> <p>Soma-se a isso a violência urbana, que vitimiza de forma desproporcional, a juventude, sobretudo a juventude exposta a homicídios, encarceramento e abordagens policiais discriminatórias. </p><br> <p>Além disso, muitos jovens enfrentam barreiras no acesso à saúde integral, incluindo saúde mental, sexual e reprodutiva, e sofrem com discriminação de gênero, orientação sexual, raça, deficiência ou condição social. Essas situações de violação reduzem as oportunidades de autonomia e participação cidadã, afetando a dignidade e a qualidade de vida da juventude.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conteúdo Unificado -->
<section class="content-section" style="margin-top: -90px;">
    <div class="container">
        <h2 class="section-title">Dados e Análises Completos</h2>
        
        <!-- ## Chart01: Violência Doméstica -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">
                            <i class="fas fa-chart-bar"></i> Violência Doméstica por Demografia
                        </h4>
                        <div id="violenciaDomesticaChart"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h4><i class="fas fa-home"></i> Análise da Violência Doméstica</h4>
                        <p>Os dados revelam um total alarmante de <strong>1.951 casos de violência doméstica</strong> envolvendo jovens de 15 a 29 anos em Natal, demonstrando a gravidade desta problemática que afeta significativamente a juventude.</p>
                        
                        <p><strong>Distribuição por raça/cor:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Pessoas brancas:</strong> 609 casos (31,2%)</li>
                            <li><strong>Pessoas pretas/pardas:</strong> 752 casos (38,5%)</li>
                            <li><strong>Outras etnias:</strong> 138 casos (7,1%)</li>
                        </ul>
                        
                        <p><strong>Distribuição por gênero:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Mulheres jovens:</strong> 821 casos (42,1%)</li>
                            <li><strong>Homens jovens:</strong> 631 casos (32,4%)</li>
                        </ul>
                        
                        <p>Os dados evidenciam que <strong>mulheres jovens pretas/pardas</strong> são desproporcionalmente afetadas, destacando a interseccionalidade entre gênero e raça nas violações de direitos.</p>
                        
                        <span class="badge badge-warning">
                            <i class="fas fa-exclamation-triangle"></i> Situação Crítica
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## Chart02: Violência Patrimonial -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="">
                        <h4><i class="fas fa-coins"></i> Análise da Violência Patrimonial</h4>
                        <p>A violência patrimonial contra jovens apresenta <strong>88 casos registrados</strong>, representando uma forma específica de violação que compromete a autonomia econômica e a dignidade da juventude.</p>
                        
                        <p><strong>Características dos casos:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Pessoas brancas:</strong> 12 casos (13,6%)</li>
                            <li><strong>Pessoas pretas/pardas:</strong> 25 casos (28,4%)</li>
                            <li><strong>Outras etnias:</strong> 7 casos (8,0%)</li>
                            <li><strong>Mulheres jovens:</strong> 16 casos (18,2%)</li>
                            <li><strong>Homens jovens:</strong> 28 casos (31,8%)</li>
                        </ul>
                        
                        <p>Diferentemente de outros tipos de violência, a <strong>violência patrimonial afeta mais homens jovens</strong>, possivelmente relacionada a questões de responsabilidade financeira e expectativas sociais sobre o papel masculino como provedor.</p>
                        
                        <p>A <strong>população preta/parda representa 28,4%</strong> dos casos, evidenciando vulnerabilidades socioeconômicas específicas.</p>
                        
                        <span class="badge badge-info">
                            <i class="fas fa-balance-scale"></i> Padrão Distinto
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">
                            <i class="fas fa-chart-bar"></i> Violência Patrimonial por Demografia
                        </h4>
                        <div id="violenciaPatrimonialChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## Chart03: Violência Sexual -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">
                            <i class="fas fa-chart-bar"></i> Violência Sexual por Demografia
                        </h4>
                        <div id="violenciaSexualChart"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h4><i class="fas fa-user-shield"></i> Análise da Violência Sexual</h4>
                        <p>A violência sexual contra jovens registra <strong>174 casos</strong>, representando uma grave violação de direitos que causa traumas profundos e impactos duradouros na vida das vítimas.</p>
                        
                        <p><strong>Perfil das vítimas por raça/cor:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Pessoas brancas:</strong> 42 casos (24,1%)</li>
                            <li><strong>Pessoas pretas/pardas:</strong> 43 casos (24,7%)</li>
                            <li><strong>Outras etnias:</strong> 2 casos (1,1%)</li>
                        </ul>
                        
                        <p><strong>Distribuição por gênero:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Mulheres jovens:</strong> 70 casos (40,2%)</li>
                            <li><strong>Homens jovens:</strong> 17 casos (9,8%)</li>
                        </ul>
                        
                        <p>Os dados confirmam que <strong>mulheres jovens são desproporcionalmente afetadas</strong>, representando 80,5% dos casos quando considerado apenas o recorte de gênero informado.</p>
                        
                        <p>A distribuição racial equilibrada sugere que a violência sexual transcende barreiras étnicas, afetando toda a juventude feminina.</p>
                        
                        <span class="badge badge-warning">
                            <i class="fas fa-female"></i> Impacto Desproporcional
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## Chart04: Assédio / Importunação Sexual -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="">
                        <h4><i class="fas fa-ban"></i> Análise do Assédio Sexual</h4>
                        <p>O assédio e importunação sexual apresenta <strong>20 casos registrados</strong>, embora este número provavelmente represente apenas uma fração dos casos reais devido à subnotificação característica deste tipo de violência.</p>
                        
                        <p><strong>Distribuição demográfica:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Pessoas brancas:</strong> 7 casos (35,0%)</li>
                            <li><strong>Pessoas pretas/pardas:</strong> 3 casos (15,0%)</li>
                            <li><strong>Outras etnias:</strong> 0 casos</li>
                            <li><strong>Mulheres jovens:</strong> 8 casos (40,0%)</li>
                            <li><strong>Homens jovens:</strong> 2 casos (10,0%)</li>
                        </ul>
                        
                        <p>Como esperado, <strong>mulheres jovens são as principais vítimas</strong> (80% dos casos com gênero identificado), refletindo padrões sociais de objetificação e violência de gênero.</p>
                        
                        <p>A <strong>subnotificação é um desafio significativo</strong>, pois muitas vítimas não denunciam devido ao estigma, medo de retaliação ou normalização da violência.</p>
                        
                        <span class="badge badge-warning">
                            <i class="fas fa-eye-slash"></i> Subnotificação
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">
                            <i class="fas fa-chart-bar"></i> Assédio Sexual por Demografia
                        </h4>
                        <div id="assedioSexualChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## Chart05: Discriminação -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">
                            <i class="fas fa-chart-bar"></i> Discriminação por Demografia
                        </h4>
                        <div id="discriminacaoChart"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h4><i class="fas fa-users-slash"></i> Análise da Discriminação</h4>
                        <p>Os casos de discriminação (etarismo, capacitismo, racial, LGBTfobia, etc.) somam <strong>30 registros</strong>, evidenciando as múltiplas formas de preconceito que afetam a juventude natalense.</p>
                        
                        <p><strong>Perfil das vítimas:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Pessoas brancas:</strong> 2 casos (6,7%)</li>
                            <li><strong>Pessoas pretas/pardas:</strong> 9 casos (30,0%)</li>
                            <li><strong>Outras etnias:</strong> 4 casos (13,3%)</li>
                            <li><strong>Mulheres jovens:</strong> 2 casos (6,7%)</li>
                            <li><strong>Homens jovens:</strong> 13 casos (43,3%)</li>
                        </ul>
                        
                        <p>Interessantemente, <strong>homens jovens pretos/pardos</strong> aparecem como o grupo mais afetado pela discriminação, possivelmente relacionado ao racismo estrutural e estereótipos negativos sobre jovens negros.</p>
                        
                        <p>A <strong>população preta/parda representa 30%</strong> dos casos, três vezes mais que pessoas brancas, evidenciando o impacto do racismo na juventude.</p>
                        
                        <span class="badge badge-info">
                            <i class="fas fa-fist-raised"></i> Luta Antirracista
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ## Chart06: Denúncias Recebidas -->
        <div class="content-block">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="">
                        <h4><i class="fas fa-phone-alt"></i> Análise das Denúncias Recebidas</h4>
                        <p>O sistema registrou um total expressivo de <strong>532 denúncias</strong> relacionadas a violações de direitos da juventude, demonstrando tanto a prevalência dos problemas quanto a confiança no sistema de denúncias.</p>
                        
                        <p><strong>Distribuição por raça/cor:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Pessoas brancas:</strong> 98 denúncias (18,4%)</li>
                            <li><strong>Pessoas pretas/pardas:</strong> 127 denúncias (23,9%)</li>
                            <li><strong>Outras etnias:</strong> 64 denúncias (12,0%)</li>
                        </ul>
                        
                        <p><strong>Distribuição por gênero:</strong></p>
                        <ul class="custom-list">
                            <li><strong>Mulheres jovens:</strong> 145 denúncias (27,3%)</li>
                            <li><strong>Homens jovens:</strong> 98 denúncias (18,4%)</li>
                        </ul>
                        
                        <p>As <strong>mulheres jovens são mais ativas</strong> na realização de denúncias, representando 59,7% quando considerado apenas o recorte de gênero, possivelmente devido à maior exposição a violências.</p>
                        
                        <span class="badge badge-info">
                            <i class="fas fa-bullhorn"></i> Voz Ativa
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart-container">
                        <h4 class="chart-title">
                            <i class="fas fa-chart-bar"></i> Denúncias Recebidas por Demografia
                        </h4>
                        <div id="denunciasRecebidasChart"></div>
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
    // Gráfico 1: Violência Doméstica
    var violenciaDomesticaOptions = {
        series: [{
            name: 'Casos',
            data: [609, 752, 138, 821, 631]
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
        colors: ['#dc3545'],
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
            text: 'Violência Doméstica - Total: 1.951 casos',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#dc3545'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'];
                    const category = categories[opts.dataPointIndex];
                    const total = 1951;
                    const percentage = ((val / total) * 100).toFixed(1);
                    
                    let categoryInfo = '';
                    if (category === 'Branco' || category === 'Preto/Pardo' || category === 'Outra') {
                        categoryInfo = ' (Raça/Cor)';
                    } else {
                        categoryInfo = ' (Gênero)';
                    }
                    
                    return val.toLocaleString('pt-BR') + ' casos' + categoryInfo + ' (' + percentage + '%)';
                }
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        }
    };

    var violenciaDomesticaChart = new ApexCharts(document.querySelector("#violenciaDomesticaChart"), violenciaDomesticaOptions);
    violenciaDomesticaChart.render();

    // Gráfico 2: Violência Patrimonial
    var violenciaPatrimonialOptions = {
        series: [{
            name: 'Casos',
            data: [12, 25, 7, 16, 28]
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
        colors: ['#fd7e14'],
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
            text: 'Violência Patrimonial - Total: 88 casos',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#fd7e14'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'];
                    const category = categories[opts.dataPointIndex];
                    const total = 88;
                    const percentage = ((val / total) * 100).toFixed(1);
                    
                    let categoryInfo = '';
                    if (category === 'Branco' || category === 'Preto/Pardo' || category === 'Outra') {
                        categoryInfo = ' (Raça/Cor)';
                    } else {
                        categoryInfo = ' (Gênero)';
                    }
                    
                    return val.toLocaleString('pt-BR') + ' casos' + categoryInfo + ' (' + percentage + '%)';
                }
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        }
    };

    var violenciaPatrimonialChart = new ApexCharts(document.querySelector("#violenciaPatrimonialChart"), violenciaPatrimonialOptions);
    violenciaPatrimonialChart.render();

    // Gráfico 3: Violência Sexual
    var violenciaSexualOptions = {
        series: [{
            name: 'Casos',
            data: [42, 43, 2, 70, 17]
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
            text: 'Violência Sexual - Total: 174 casos',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#6f42c1'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'];
                    const category = categories[opts.dataPointIndex];
                    const total = 174;
                    const percentage = ((val / total) * 100).toFixed(1);
                    
                    let categoryInfo = '';
                    if (category === 'Branco' || category === 'Preto/Pardo' || category === 'Outra') {
                        categoryInfo = ' (Raça/Cor)';
                    } else {
                        categoryInfo = ' (Gênero)';
                    }
                    
                    return val.toLocaleString('pt-BR') + ' casos' + categoryInfo + ' (' + percentage + '%)';
                }
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        }
    };

    var violenciaSexualChart = new ApexCharts(document.querySelector("#violenciaSexualChart"), violenciaSexualOptions);
    violenciaSexualChart.render();

    // Gráfico 4: Assédio Sexual
    var assedioSexualOptions = {
        series: [{
            name: 'Casos',
            data: [7, 3, 0, 8, 2]
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
        colors: ['#e83e8c'],
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
            text: 'Assédio/Importunação Sexual - Total: 20 casos',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#e83e8c'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'];
                    const category = categories[opts.dataPointIndex];
                    const total = 20;
                    const percentage = ((val / total) * 100).toFixed(1);
                    
                    let categoryInfo = '';
                    if (category === 'Branco' || category === 'Preto/Pardo' || category === 'Outra') {
                        categoryInfo = ' (Raça/Cor)';
                    } else {
                        categoryInfo = ' (Gênero)';
                    }
                    
                    return val.toLocaleString('pt-BR') + ' casos' + categoryInfo + ' (' + percentage + '%)';
                }
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        }
    };

    var assedioSexualChart = new ApexCharts(document.querySelector("#assedioSexualChart"), assedioSexualOptions);
    assedioSexualChart.render();

    // Gráfico 5: Discriminação
    var discriminacaoOptions = {
        series: [{
            name: 'Casos',
            data: [2, 9, 4, 2, 13]
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
        colors: ['#20c997'],
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
            text: 'Discriminação - Total: 30 casos',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#20c997'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'];
                    const category = categories[opts.dataPointIndex];
                    const total = 30;
                    const percentage = ((val / total) * 100).toFixed(1);
                    
                    let categoryInfo = '';
                    if (category === 'Branco' || category === 'Preto/Pardo' || category === 'Outra') {
                        categoryInfo = ' (Raça/Cor)';
                    } else {
                        categoryInfo = ' (Gênero)';
                    }
                    
                    return val.toLocaleString('pt-BR') + ' casos' + categoryInfo + ' (' + percentage + '%)';
                }
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        }
    };

    var discriminacaoChart = new ApexCharts(document.querySelector("#discriminacaoChart"), discriminacaoOptions);
    discriminacaoChart.render();

    // Gráfico 6: Denúncias Recebidas
    var denunciasRecebidasOptions = {
        series: [{
            name: 'Denúncias',
            data: [98, 127, 64, 145, 98]
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
            text: 'Denúncias Recebidas - Total: 532 denúncias',
            align: 'center',
            style: {
                fontSize: '16px',
                fontWeight: '700',
                color: '#17a2b8'
            }
        },
        tooltip: {
            theme: 'light',
            y: {
                formatter: function (val, opts) {
                    const categories = ['Branco', 'Preto/Pardo', 'Outra', 'Feminino', 'Masculino'];
                    const category = categories[opts.dataPointIndex];
                    const total = 532;
                    const percentage = ((val / total) * 100).toFixed(1);
                    
                    let categoryInfo = '';
                    if (category === 'Branco' || category === 'Preto/Pardo' || category === 'Outra') {
                        categoryInfo = ' (Raça/Cor)';
                    } else {
                        categoryInfo = ' (Gênero)';
                    }
                    
                    return val.toLocaleString('pt-BR') + ' denúncias' + categoryInfo + ' (' + percentage + '%)';
                }
            }
        },
        grid: {
            show: true,
            borderColor: '#e0e0e0',
            strokeDashArray: 3
        }
    };

    var denunciasRecebidasChart = new ApexCharts(document.querySelector("#denunciasRecebidasChart"), denunciasRecebidasOptions);
    denunciasRecebidasChart.render();
});
</script>

@endsection