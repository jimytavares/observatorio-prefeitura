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

    .painel-jovens-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 15px;
    }
    .painel-jovens-title {
        font-size: 2.5rem;
        color: #17669b;
        font-weight: 700;
        margin-bottom: 10px;
        text-align: center;
    }
    .painel-jovens-desc {
        font-size: 1.2rem;
        color: #444;
        text-align: center;
        margin-bottom: 40px;
    }
    .painel-jovens-filtros {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-bottom: 30px;
    }
    .painel-jovens-filtros select {
        padding: 8px 16px;
        border-radius: 8px;
        border: 1px solid #17669b;
        font-size: 1rem;
        color: #17669b;
        background: #f8f9fa;
    }
    .painel-jovens-graficos {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
        margin-bottom: 40px;
    }
    .grafico-box {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 12px rgba(23,102,155,0.08);
        padding: 24px;
        min-width: 320px;
        flex: 1 1 350px;
        max-width: 500px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .grafico-titulo {
        font-size: 1.2rem;
        color: #17669b;
        font-weight: 600;
        margin-bottom: 10px;
        text-align: center;
    }
    .painel-jovens-tabela {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 12px rgba(23,102,155,0.08);
        padding: 24px;
        margin-bottom: 40px;
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 1rem;
    }
    th, td {
        padding: 10px 8px;
        border-bottom: 1px solid #e9ecef;
        text-align: left;
    }
    th {
        background: #17669b;
        color: #fff;
        font-weight: 600;
    }
    tr:hover {
        background: #f8f9fa;
    }
    .export-btns {
        display: flex;
        gap: 15px;
        justify-content: flex-end;
        margin-bottom: 10px;
    }
    .export-btn {
        background: linear-gradient(135deg, #17669b, #0189d3);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 8px 18px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
    }
    .export-btn:hover {
        background: linear-gradient(135deg, #0189d3, #17669b);
    }
    @media (max-width: 900px) {
        .painel-jovens-graficos {
            flex-direction: column;
            gap: 20px;
        }
        .grafico-box {
            max-width: 100%;
        }
    }
</style>

<!-- background title -->
@include('globals.title-page')

<!-- group buttons -->
@include('pages.categoria-criancas-e-adolescentes.globals.group-buttons')

<!-- painel 01 - Jovens 15 a 29 anos -->
<div class="painel-jovens-container">
    <div class="painel-jovens-title">Painel de Dados - Jovens 15 a 29 anos</div>
    <div class="painel-jovens-desc">
        Visualize indicadores públicos sobre jovens de 15 a 29 anos, filtrando por faixa etária, sexo e categoria. Explore gráficos interativos e exporte os dados para referência e análise.
    </div>

    <div class="painel-jovens-filtros">
        <select id="faixaEtaria" onchange="filtrarDados()">
            <option value="todos">Todas as faixas etárias</option>
            <option value="15-17">15 a 17 anos</option>
            <option value="18-29">18 a 29 anos</option>
        </select>
        <select id="sexo" onchange="filtrarDados()">
            <option value="todos">Todos os sexos</option>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select>
        <select id="categoria" onchange="filtrarDados()">
            <option value="todos">Todas as categorias</option>
            <option value="aprendiz">Aprendizes</option>
            <option value="regime-fechado">Regime Fechado</option>
            <option value="regime-semiaberto">Regime Semiaberto</option>
            <option value="regime-aberto">Regime Aberto</option>
            <option value="semiliberdade">Semiliberdade</option>
            <option value="internacao-provisoria">Internação Provisória</option>
            <option value="internacao">Internação</option>
            <option value="acolhimento">Acolhimento Institucional</option>
            <option value="atencao-basica">Atenção Básica de Saúde</option>
            <option value="caps">CAPS</option>
            <option value="dependencia-quimica">Dependência Química</option>
            <option value="ists">ISTs Notificados</option>
            <option value="estudante">Estudante</option>
            <option value="trabalhador">Trabalhador</option>
            <option value="nem-estuda-nem-trabalha">Nem estuda nem trabalha</option>
            <option value="atleta">Atletas com apoio financeiro</option>
        </select>
    </div>

    <div class="export-btns">
        <button class="export-btn" onclick="exportGraficos('png')"><i class="fas fa-file-image"></i> Exportar PNG</button>
        <button class="export-btn" onclick="exportGraficos('pdf')"><i class="fas fa-file-pdf"></i> Exportar PDF</button>
    </div>

    <div class="painel-jovens-graficos">
        <div class="grafico-box">
            <div class="grafico-titulo">Distribuição por Faixa Etária</div>
            <canvas id="graficoBarra"></canvas>
        </div>
        <div class="grafico-box">
            <div class="grafico-titulo">Distribuição por Sexo</div>
            <canvas id="graficoPizza"></canvas>
        </div>
        <div class="grafico-box">
            <div class="grafico-titulo">Evolução de Indicadores</div>
            <canvas id="graficoLinha"></canvas>
        </div>
    </div>

    <div class="painel-jovens-tabela">
        <div style="font-weight:600; color:#17669b; font-size:1.1rem; margin-bottom:10px;">Tabela de Dados Brutos</div>
        <table id="tabelaDados">
            <thead>
                <tr>
                    <th>Faixa Etária</th>
                    <th>Sexo</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados dinâmicos -->
            </tbody>
        </table>
    </div>
</div>




<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- jsPDF CDN para exportação PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<!-- html2canvas CDN para exportação PNG -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
// Dados simulados para exemplo
const dadosJovens = [
    { faixa: '15-17', sexo: 'feminino', categoria: 'estudante', quantidade: 1200 },
    { faixa: '15-17', sexo: 'masculino', categoria: 'estudante', quantidade: 1100 },
    { faixa: '18-29', sexo: 'feminino', categoria: 'trabalhador', quantidade: 2500 },
    { faixa: '18-29', sexo: 'masculino', categoria: 'trabalhador', quantidade: 2700 },
    { faixa: '18-29', sexo: 'feminino', categoria: 'nem-estuda-nem-trabalha', quantidade: 800 },
    { faixa: '18-29', sexo: 'masculino', categoria: 'nem-estuda-nem-trabalha', quantidade: 900 },
    { faixa: '15-17', sexo: 'feminino', categoria: 'aprendiz', quantidade: 300 },
    { faixa: '15-17', sexo: 'masculino', category: 'aprendiz', quantidade: 320 },
    { faixa: '18-29', sexo: 'feminino', categoria: 'atleta', quantidade: 50 },
    { faixa: '18-29', sexo: 'masculino', categoria: 'atleta', quantidade: 60 },
    // ... outros dados simulados
];

let filtroFaixa = 'todos';
let filtroSexo = 'todos';
let filtroCategoria = 'todos';

function filtrarDados() {
    filtroFaixa = document.getElementById('faixaEtaria').value;
    filtroSexo = document.getElementById('sexo').value;
    filtroCategoria = document.getElementById('categoria').value;
    atualizarGraficosETabela();
}

function atualizarGraficosETabela() {
    // Filtrar dados
    let dadosFiltrados = dadosJovens.filter(d =>
        (filtroFaixa === 'todos' || d.faixa === filtroFaixa) &&
        (filtroSexo === 'todos' || d.sexo === filtroSexo) &&
        (filtroCategoria === 'todos' || d.categoria === filtroCategoria)
    );

    // Gráfico de barras por faixa etária
    const faixas = ['15-17', '18-29'];
    const barraData = faixas.map(faixa =>
        dadosFiltrados.filter(d => d.faixa === faixa).reduce((acc, d) => acc + d.quantidade, 0)
    );
    graficoBarra.data.labels = faixas;
    graficoBarra.data.datasets[0].data = barraData;
    graficoBarra.update();

    // Gráfico de pizza por sexo
    const sexos = ['feminino', 'masculino'];
    const pizzaData = sexos.map(sexo =>
        dadosFiltrados.filter(d => d.sexo === sexo).reduce((acc, d) => acc + d.quantidade, 0)
    );
    graficoPizza.data.labels = ['Feminino', 'Masculino'];
    graficoPizza.data.datasets[0].data = pizzaData;
    graficoPizza.update();

    // Gráfico de linha por categoria (exemplo: evolução fictícia)
    const categorias = ['estudante', 'trabalhador', 'nem-estuda-nem-trabalha', 'atleta'];
    graficoLinha.data.labels = categorias;
    graficoLinha.data.datasets[0].data = categorias.map(cat =>
        dadosFiltrados.filter(d => d.categoria === cat).reduce((acc, d) => acc + d.quantidade, 0)
    );
    graficoLinha.update();

    // Tabela de dados
    const tbody = document.querySelector('#tabelaDados tbody');
    tbody.innerHTML = '';
    dadosFiltrados.forEach(d => {
        const tr = document.createElement('tr');
        tr.innerHTML = `<td>${d.faixa}</td><td>${d.sexo.charAt(0).toUpperCase() + d.sexo.slice(1)}</td><td>${d.categoria.replace(/-/g, ' ')}</td><td>${d.quantidade}</td>`;
        tbody.appendChild(tr);
    });
}

// Inicialização dos gráficos
let graficoBarra, graficoPizza, graficoLinha;
document.addEventListener('DOMContentLoaded', function() {
    graficoBarra = new Chart(document.getElementById('graficoBarra').getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['15-17', '18-29'],
            datasets: [{
                label: 'Quantidade',
                data: [0, 0],
                backgroundColor: ['#17669b', '#0189d3'],
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });
    graficoPizza = new Chart(document.getElementById('graficoPizza').getContext('2d'), {
        type: 'pie',
        data: {
            labels: ['Feminino', 'Masculino'],
            datasets: [{
                data: [0, 0],
                backgroundColor: ['#17669b', '#0189d3'],
            }]
        },
        options: { responsive: true }
    });
    graficoLinha = new Chart(document.getElementById('graficoLinha').getContext('2d'), {
        type: 'line',
        data: {
            labels: ['estudante', 'trabalhador', 'nem-estuda-nem-trabalha', 'atleta'],
            datasets: [{
                label: 'Quantidade',
                data: [0, 0, 0, 0],
                borderColor: '#17669b',
                backgroundColor: 'rgba(23,102,155,0.1)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });
    atualizarGraficosETabela();
});

// Exportação dos gráficos
function exportGraficos(tipo) {
    const exportar = (canvasId, nome) => {
        const canvas = document.getElementById(canvasId);
        if (tipo === 'png') {
            html2canvas(canvas).then(function(canvasExport) {
                const link = document.createElement('a');
                link.download = nome + '.png';
                link.href = canvasExport.toDataURL();
                link.click();
            });
        } else if (tipo === 'pdf') {
            const pdf = new window.jspdf.jsPDF();
            pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 10, 10, 180, 90);
            pdf.save(nome + '.pdf');
        }
    };
    exportar('graficoBarra', 'grafico-barra');
    exportar('graficoPizza', 'grafico-pizza');
    exportar('graficoLinha', 'grafico-linha');
}
</script>
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
