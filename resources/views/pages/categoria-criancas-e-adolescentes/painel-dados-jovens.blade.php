@extends('layouts.main')

@section('title', 'Painel de Dados')

@section('content')

<style>
    .painel-mercado-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 15px;
    }
    .painel-mercado-title {
        font-size: 2.2rem;
        color: #17669b;
        font-weight: 700;
        margin-bottom: 10px;
        text-align: center;
    }
    .painel-mercado-desc {
        font-size: 1.1rem;
        color: #444;
        text-align: center;
        margin-bottom: 30px;
    }
    .painel-mercado-graficos {
        display: flex;
        flex-direction: column;
        gap: 50px;
        margin-bottom: 40px;
    }
    .grafico-box {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 12px rgba(23,102,155,0.08);
        padding: 32px 32px 24px 32px;
        margin-bottom: 0;
        max-width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .grafico-titulo {
        font-size: 1.4rem;
        color: #17669b;
        font-weight: 700;
        margin-bottom: 10px;
        text-align: center;
    }
    .grafico-descricao {
        font-size: 1.05rem;
        color: #555;
        margin-bottom: 18px;
        text-align: center;
        max-width: 700px;
    }
    .grafico-box canvas {
        min-height: 380px !important;
        max-width: 900px;
        width: 100% !important;
        height: 380px !important;
        margin: 0 auto;
        display: block;
    }
    @media (max-width: 900px) {
        .painel-mercado-container {
            padding: 20px 5px;
        }
        .grafico-box {
            padding: 16px 5px 12px 5px;
        }
        .grafico-box canvas {
            min-height: 220px !important;
            height: 220px !important;
        }
    }
</style>

<!-- background title -->
@include('globals.title-page')

<!-- group buttons -->
@include('pages.categoria-criancas-e-adolescentes.globals.group-buttons')

<div class="painel-mercado-container">
    <div class="painel-mercado-title">Painel de Mercado de Trabalho Juvenil</div>
    <div class="painel-mercado-desc">
        Este painel apresenta dados sobre o mercado de trabalho para jovens, incluindo taxa de desemprego, setores de ocupação, tipos de vínculo, renda média e participação em programas de primeiro emprego.
    </div>

    <div class="painel-mercado-graficos">
        <div class="grafico-box">
            <div class="grafico-titulo">Taxa de Desemprego Juvenil (%)</div>
            <div class="grafico-descricao">Acompanhe a evolução da taxa de desemprego entre jovens de 15 a 29 anos nos últimos anos. O gráfico mostra a tendência de queda, refletindo políticas públicas e mudanças econômicas.</div>
            <canvas id="graficoDesemprego"></canvas>
        </div>
        <div class="grafico-box">
            <div class="grafico-titulo">Setores Mais Comuns de Ocupação</div>
            <div class="grafico-descricao">Veja os principais setores em que os jovens estão empregados. Comércio e serviços lideram, seguidos por indústria, agricultura e tecnologia.</div>
            <canvas id="graficoSetores"></canvas>
        </div>
        <div class="grafico-box" style="display:none;">
            <div class="grafico-titulo">Tipo de Vínculo</div>
            <div class="grafico-descricao">Distribuição dos tipos de vínculo empregatício entre jovens: formal, informal, estágio e aprendiz. O vínculo formal ainda é o mais comum, mas o informal tem grande participação.</div>
            <canvas id="graficoVinculo"></canvas>
        </div>
        <div class="grafico-box">
            <div class="grafico-titulo">Renda Média (R$)</div>
            <div class="grafico-descricao">Evolução da renda média dos jovens ao longo dos anos. O gráfico mostra crescimento gradual, indicando avanços na qualificação e oportunidades.</div>
            <canvas id="graficoRenda"></canvas>
        </div>
        <div class="grafico-box" style="display:none;">
            <div class="grafico-titulo">Participação em Programas de Primeiro Emprego</div>
            <div class="grafico-descricao">Percentual de jovens que participam de programas de primeiro emprego. A maioria ainda não participa, destacando a importância de ampliar o acesso a essas iniciativas.</div>
            <canvas id="graficoProgramas"></canvas>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Dados fictícios para os gráficos
const taxaDesemprego = [18.2, 17.5, 16.8, 15.9, 15.2]; // anos 2021-2025
const anos = ['2021', '2022', '2023', '2024', '2025'];

const setores = ['Comércio', 'Serviços', 'Indústria', 'Agricultura', 'Tecnologia'];
const setoresData = [35, 28, 18, 10, 9];

const tiposVinculo = ['Formal', 'Informal', 'Estágio', 'Aprendiz'];
const vinculoData = [42, 38, 12, 8];

const rendaMedia = [1200, 1350, 1400, 1500, 1600]; // anos 2021-2025

const programas = ['Sim', 'Não'];
const programasData = [22, 78]; // % de jovens participantes

document.addEventListener('DOMContentLoaded', function() {
    // Taxa de desemprego
    new Chart(document.getElementById('graficoDesemprego').getContext('2d'), {
        type: 'line',
        data: {
            labels: anos,
            datasets: [{
                label: 'Desemprego (%)',
                data: taxaDesemprego,
                borderColor: '#e74c3c',
                backgroundColor: 'rgba(231,76,60,0.1)',
                tension: 0.3,
                fill: true,
                pointRadius: 6,
                pointHoverRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } },
            scales: { y: { beginAtZero: false } }
        }
    });

    // Setores de ocupação
    new Chart(document.getElementById('graficoSetores').getContext('2d'), {
        type: 'bar',
        data: {
            labels: setores,
            datasets: [{
                label: 'Jovens (%)',
                data: setoresData,
                backgroundColor: ['#17669b', '#0189d3', '#2ecc71', '#f39c12', '#8e44ad'],
                borderRadius: 12,
                barThickness: 60
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });

    // Tipo de vínculo
    new Chart(document.getElementById('graficoVinculo').getContext('2d'), {
        type: 'doughnut',
        data: {
            labels: tiposVinculo,
            datasets: [{
                data: vinculoData,
                backgroundColor: ['#17669b', '#f39c12', '#2ecc71', '#e74c3c'],
            }]
        },
        options: { responsive: true }
    });

    // Renda média
    new Chart(document.getElementById('graficoRenda').getContext('2d'), {
        type: 'line',
        data: {
            labels: anos,
            datasets: [{
                label: 'Renda Média (R$)',
                data: rendaMedia,
                borderColor: '#2ecc71',
                backgroundColor: 'rgba(46,204,113,0.1)',
                tension: 0.3,
                fill: true,
                pointRadius: 6,
                pointHoverRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: true } },
            scales: { y: { beginAtZero: false } }
        }
    });

    // Programas de primeiro emprego
    new Chart(document.getElementById('graficoProgramas').getContext('2d'), {
        type: 'pie',
        data: {
            labels: programas,
            datasets: [{
                data: programasData,
                backgroundColor: ['#17669b', '#e74c3c'],
            }]
        },
        options: { responsive: true }
    });
});
</script>

@endsection
