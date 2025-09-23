<!-- Hero Section -->
<section class="hero-section" 
         style="background-image: url('{{ $image ?? asset('images/crianca-ia.png') }}'); 
                background-repeat: no-repeat; 
                border-radius:0px; 
                background-size: cover; 
                background-position: center; 
                width:100%; 
                height:400px;"> 
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">{{ $title }}</h1>
            <p class="hero-subtitle">{{ $description }}</p>
        </div>
    </div>
</section>

<section class="row">
    <div style="background-color:#17669b; height:20px; color:white; text-align:right; padding-right: 20px;">
        <i>Prefeitura Municipal de Natal</i>
    </div>
</section>
