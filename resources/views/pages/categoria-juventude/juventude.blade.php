@extends('layouts.main')

@section('title', 'Pessoas em Situação de Rua')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/sub-categorias.css') }}" type="text/css">

@include('globals.title-page', [
    'image' => asset('images/juventude.ia.png')  
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
                    <p class="card-description">A população jovem compreende pessoas na faixa etária entre 15 e 29 anos, fase da vida marcada por intensas transformações sociais, econômicas e culturais, além da inserção em processos...</p>
                    <div class="text-center">
                        <a href="{{ route('populacao_juventude') }}" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="card-title">Violação de direitos</h3>
                    <p class="card-description">As violações de direitos que atingem os jovens estão relacionadas a diferentes dimensões de sua vida e comprometem seu desenvolvimento pleno e sua inserção social...</p>
                    <div class="text-center">
                         <a href="{{ route('violacao-de-direito-juventude') }}" class="card-link">Ver Dados</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="data-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="card-title">Garantia de direitos</h3>
                    <p class="card-description">A garantia de direitos da população jovem envolve a implementação de políticas públicas voltadas à promoção da educação, da empregabilidade, da saúde...</p>
                    <div class="text-center">
                        <a href="{{ route('garantia-de-direito-juventude') }}" class="card-link">Ver Dados</a>
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