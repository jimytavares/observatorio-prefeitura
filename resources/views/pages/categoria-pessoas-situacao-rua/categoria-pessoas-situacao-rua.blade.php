@extends('layouts.main')

@section('title', 'Pessoas em Situação de Rua')

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
        background: rgba(0, 0, 0, 0.3);
        z-index: 1;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
    }
    
    .hero-title {
        color:white;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
        margin-bottom: 2rem;
        opacity: 0.9;
    }
    
    .cards-container {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .section-title {
        text-align: center;
        color: #17669b;
        font-size: 2.5rem;
        font-weight: 700;
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
    
    .data-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(23, 102, 155, 0.1);
        cursor: pointer;
    }
    
    .data-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(23, 102, 155, 0.2);
        border-color: #17669b;
    }
    
    .data-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(135deg, #17669b, #0189d3);
        border-radius: 20px 20px 0 0;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .data-card:hover::before {
        transform: scaleX(1);
    }
    
    .card-icon {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #17669b, #0189d3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        font-size: 2.5rem;
        color: white;
        box-shadow: 0 10px 25px rgba(23, 102, 155, 0.3);
        transition: all 0.3s ease;
    }
    
    .data-card:hover .card-icon {
        transform: rotateY(360deg) scale(1.1);
        box-shadow: 0 15px 35px rgba(23, 102, 155, 0.5);
    }
    
    .card-title {
        color: #2c3e50;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-align: center;
        line-height: 1.4;
        transition: color 0.3s ease;
    }
    
    .data-card:hover .card-title {
        color: #17669b;
    }
    
    .card-description {
        color: #6c757d;
        font-size: 1rem;
        line-height: 1.6;
        text-align: center;
        margin-bottom: 1.5rem;
    }
    
    .card-link {
        display: inline-block;
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(23, 102, 155, 0.3);
        position: relative;
        overflow: hidden;
    }
    
    .card-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }
    
    .card-link:hover::before {
        left: 100%;
    }
    
    .card-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(23, 102, 155, 0.4);
        text-decoration: none;
        color: white;
    }
    
    .statistics-section {
        background: white;
        padding: 60px 0;
        margin: 40px 0;
    }
    
    .stat-item {
        text-align: center;
        padding: 2rem;
    }
    
    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        color: #17669b;
        display: block;
    }
    
    .stat-label {
        font-size: 1.1rem;
        color: #6c757d;
        margin-top: 0.5rem;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .data-card {
            padding: 2rem;
        }
        
        .card-icon {
            width: 70px;
            height: 70px;
            font-size: 2rem;
        }
        
    .card-title {
        font-size: 1.2rem;
    }
}

/* Filtro de Escala de Cinza */
.grayscale-filter {
    filter: grayscale(100%);
    background-color: #000000 !important;
    transition: all 0.5s ease;
}

.grayscale-filter .hero-section,
.grayscale-filter .cards-container,
.grayscale-filter .statistics-section {
    background-color: #000000 !important;
}

.grayscale-filter .data-card {
    background-color: #1a1a1a !important;
    color: #ffffff !important;
}

.grayscale-filter .card-title {
    color: #ffffff !important;
}

.grayscale-filter .card-description {
    color: #cccccc !important;
}

.grayscale-filter .section-title {
    color: #ffffff !important;
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

.filter-toggle-btn i {
    font-size: 16px;
}

.filter-toggle-btn.active {
    background: linear-gradient(135deg, #6c757d, #495057);
}

@media (max-width: 768px) {
    .filter-toggle-btn {
        top: 10px;
        right: 10px;
        padding: 10px 16px;
        font-size: 12px;
    }
}
</style>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/categoria-pessoas-situacao-rua.png') }}'); background-repeat: no-repeat; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:0px; background-size: cover; background-position: center; background-repeat: no-repeat; width:100%; height:;">
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">Pessoas em Situação de Rua</h1>
            <p class="hero-subtitle">Dados e informações sobre a população em situação de rua no Brasil</p>
        </div>
    </div>
</section>


<section class="row" >
    <div class="" style="background-color:#17669b; height:20px; color:white; text-align:right; padding-right: 20px;">
        <i>Prefeitura Municipal de Natal</i>
    </div>
</section>

<!-- Cards Section -->
<section class="cards-container" style="margin-top: -20px;">
    <div class="container">
        <h2 class="section-title">Dados e Informações</h2>
        
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="card-title">Quantas pessoas estão em situação de rua no Brasil?</h3>
                    <p class="card-description">Dados estatísticos sobre o número de pessoas em situação de rua no território nacional.</p>
                    <div class="text-center">
                        <a href="{{ route('dados-quantas-pessoas-situacao-rua') }}" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="card-title">Quem são as pessoas em situação de rua no Brasil?</h3>
                    <p class="card-description">Perfil demográfico e características da população em situação de rua.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Ver Perfil</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="card-title">Escolaridade das pessoas em situação de rua</h3>
                    <p class="card-description">Dados sobre o nível educacional da população em situação de rua.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="card-title">Trabalho e rendimento das pessoas em situação de rua</h3>
                    <p class="card-description">Informações sobre emprego e renda da população em situação de rua.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="card-title">Acesso a políticas públicas Assistência Social</h3>
                    <p class="card-description">Dados sobre o acesso aos serviços de assistência social.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="card-title">Acesso a políticas públicas Saúde</h3>
                    <p class="card-description">Informações sobre o acesso aos serviços de saúde pública.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 7 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="card-title">Violência contra a população em situação de rua</h3>
                    <p class="card-description">Dados sobre violência e segurança da população em situação de rua.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 8 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="card-title">Painel de Dados</h3>
                    <p class="card-description">Painel interativo com dados estatísticos e indicadores.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Acessar Painel</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 9 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="card-title">Índice de Capacidade Institucional Pessoas em Situação de Rua</h3>
                    <p class="card-description">Avaliação da capacidade institucional para atendimento da população.</p>
                    <div class="text-center">
                        <a href="#" class="card-link">Ver Índice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleGrayscale() {
    const body = document.body;
    const button = document.getElementById('grayscaleToggle');
    const filterText = document.getElementById('filterText');
    
    if (body.classList.contains('grayscale-filter')) {
        // Remover filtro de escala de cinza
        body.classList.remove('grayscale-filter');
        button.classList.remove('active');
        filterText.textContent = 'Escala de Cinza';
    } else {
        // Aplicar filtro de escala de cinza
        body.classList.add('grayscale-filter');
        button.classList.add('active');
        filterText.textContent = 'Colorido';
    }
}

// Adicionar efeito visual ao botão
document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('grayscaleToggle');
    
    button.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-3px) scale(1.05)';
    });
    
    button.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(-2px) scale(1)';
    });
});
</script>

@endsection