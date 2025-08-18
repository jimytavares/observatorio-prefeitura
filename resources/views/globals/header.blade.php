{{-- .nav-bar --}}
<section class="" style="background-color:white; height:85px; border-bottom: 4px solid #03588C;">
    <div class="container" style="width:1210px;">
        <div class="row" style="margin-top:1px; height:105px;">
            <div class="col-4" style="text-align:center; background-color:;">
                <a href="/"><img src="{{ URL::asset('images/logo-prefeitura-natal.png') }}" style="width:145px; padding-top:6px; margin-left:-180px;"/></a>
            </div>
            <div class="col" style="text-align:right; margin-left:170px;">
                <div class="row" style="margin-top:35px; font-size:14px; text-align:right; text-transform: uppercase;">
                    <div class="col-md-auto hover-menu"><a href="#" style="color:#023e64;">Acesso a Informação</a></div>
                    <div class="col-md-auto hover-menu"><a href="#" style="color:#023e64;">Legislação</a></div>
                    <div class="col-md-auto hover-menu"><a href="#" style="color:#023e64;">Governo</a></div>
                    <div class="col-md-auto hover-menu"><a href="{{ URL::asset('docs/manual-omdh.pdf') }}" target="_blank" style="color:#023e64;">Manual da Taxonomia</a></div>
                    <div class="col-md-auto hover-menu">
                        <button class="filter-toggle-btn" id="grayscaleToggle" onclick="toggleGrayscale()">
                            <i class="fas fa-adjust"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
