@extends('layouts.main')

@section('title', 'Pessoas em Situação de Rua')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/sub-categorias.css') }}" type="text/css">

@include('globals.title-page', [
    'image' => asset('images/pcd.ia.png')  
])

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
                    <h3 class="card-title">População</h3>
                    <p class="card-description">O conceito de pessoa com deficiência abrange aquela que tem impedimento de longo prazo de natureza física, mental, intelectual ou sensorial, o qual...</p>
                    <div class="text-center">
                        <a href="{{ route('populacao_pcd') }}" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="card-title">Violação de Direitos</h3>
                    <p class="card-description">Violação de direitos das pessoas com deficiência refere-se a qualquer ação ou omissão que atente contra os direitos humanos assegurados a este grupo...</p>
                    <div class="text-center">
                        <a href="{{ route('violacao-de-direito-pcd') }}" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="card-title">Garantia de Direitos</h3>
                    <p class="card-description">A garantia de direitos para pessoas com deficiência envolve medidas que promovam a acessibilidade, a inclusão plena e a igualdade de oportunidades...</p>
                    <div class="text-center">
                        <a href="{{ route('garantia-de-direito-pcd') }}" class="card-link">Ver Dados</a>
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