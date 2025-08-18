@extends('layouts.main')

@section('title', 'Painel 02 - Indicadores Sociais de Jovens')

@section('content')
<style>
.painel-indicadores-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 15px;
}
.painel-indicadores-title {
    font-size: 2.2rem;
    color: #17669b;
    font-weight: 700;
    margin-bottom: 10px;
    text-align: center;
}
.painel-indicadores-desc {
    font-size: 1.1rem;
    color: #444;
    text-align: center;
    margin-bottom: 30px;
}
.painel-indicadores-grafico {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(23,102,155,0.08);
    padding: 24px;
    margin-bottom: 30px;
}
.painel-indicadores-tabela {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(23,102,155,0.08);
    padding: 24px;
    margin-bottom: 40px;
    overflow-x: auto;
}
@media (max-width: 900px) {
    .painel-indicadores-grafico {
        padding: 10px;
    }
}
</style>

<!-- background title -->
@include('globals.title-page')

<!-- group buttons -->
@include('pages.categoria-criancas-e-adolescentes.globals.group-buttons')

<div class="painel-indicadores-container">
    <div class="painel-indicadores-title">Painel de Indicadores Sociais de Jovens</div>
    <div class="painel-indicadores-desc">
        Visualize os indicadores sociais de jovens categorizados por Classe, Subclasse, Espécie e Subespécie. Clique nas classes para explorar detalhes e distribuições.
    </div>

    <div class="painel-indicadores-grafico">
        <canvas id="graficoIndicadores"></canvas>
        <div id="graficoLegenda" style="margin-top:20px;"></div>
    </div>

    <div class="painel-indicadores-tabela">
        <div style="font-weight:600; color:#17669b; font-size:1.1rem; margin-bottom:10px;">Tabela de Referência dos Indicadores</div>
        <table id="tabelaIndicadores">
            <thead>
                <tr>
                    <th>Indicador</th>
                    <th>Classe</th>
                    <th>Subclasse</th>
                    <th>Espécie</th>
                    <th>Subespécie</th>
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

<script>
// Dados fictícios estruturados
const indicadores = [
    { indicador: 'Liberdade', classe: 'Direitos', subclasse: 'Liberdade', especie: 'Individual', subespecie: '', quantidade: 120 },
    { indicador: 'Institucional', classe: 'Direitos', subclasse: 'Institucional', especie: 'Coletivo', subespecie: '', quantidade: 80 },
    { indicador: 'Saúde', classe: 'Saúde', subclasse: 'Atenção Básica', especie: 'Preventiva', subespecie: '', quantidade: 200 },
    { indicador: 'CAPS', classe: 'Saúde', subclasse: 'CAPS', especie: 'Psicossocial', subespecie: '', quantidade: 60 },
    { indicador: 'Dependência Química', classe: 'Saúde', subclasse: 'CAPS', especie: 'Química', subespecie: '', quantidade: 40 },
    { indicador: 'ISTs Notificados', classe: 'Saúde', subclasse: 'ISTs', especie: 'Notificados', subespecie: '', quantidade: 30 },
    { indicador: 'Estudante', classe: 'Educação', subclasse: 'Formal', especie: 'Ensino Médio', subespecie: '', quantidade: 300 },
    { indicador: 'Trabalhador', classe: 'Trabalho', subclasse: 'Formal', especie: 'CLT', subespecie: '', quantidade: 150 },
    { indicador: 'Trabalha', classe: 'Trabalho', subclasse: 'Informal', especie: 'Autônomo', subespecie: '', quantidade: 100 },
    { indicador: 'Municipal', classe: 'Apoio', subclasse: 'Financeiro', especie: 'Atleta', subespecie: '', quantidade: 20 },
];

const coresClasse = {
    'Direitos': '#17669b',
    'Saúde': '#0189d3',
    'Educação': '#2ecc71',
    'Trabalho': '#f39c12',
    'Apoio': '#e74c3c'
};

let classeAtual = null;

function agruparPorClasse() {
    const grupos = {};
    indicadores.forEach(i => {
        if (!grupos[i.classe]) grupos[i.classe] = 0;
        grupos[i.classe] += i.quantidade;
    });
    return grupos;
}

function agruparPorSubclasse(classe) {
    const grupos = {};
    indicadores.filter(i => i.classe === classe).forEach(i => {
        if (!grupos[i.subclasse]) grupos[i.subclasse] = 0;
        grupos[i.subclasse] += i.quantidade;
    });
    return grupos;
}

function agruparPorEspecie(classe, subclasse) {
    const grupos = {};
    indicadores.filter(i => i.classe === classe && i.subclasse === subclasse).forEach(i => {
        if (!grupos[i.especie]) grupos[i.especie] = 0;
        grupos[i.especie] += i.quantidade;
    });
    return grupos;
}

function agruparPorSubespecie(classe, subclasse, especie) {
    const grupos = {};
    indicadores.filter(i => i.classe === classe && i.subclasse === subclasse && i.especie === especie).forEach(i => {
        if (!grupos[i.subespecie]) grupos[i.subespecie] = 0;
        grupos[i.subespecie] += i.quantidade;
    });
    return grupos;
}

let grafico;
function renderGrafico(nivel, filtro) {
    let labels = [], data = [], backgroundColor = [], legenda = '';
    if (nivel === 'classe') {
        const grupos = agruparPorClasse();
        labels = Object.keys(grupos);
        data = Object.values(grupos);
        backgroundColor = labels.map(c => coresClasse[c] || '#888');
        legenda = 'Clique em uma classe para ver detalhes.';
    } else if (nivel === 'subclasse') {
        const grupos = agruparPorSubclasse(filtro.classe);
        labels = Object.keys(grupos);
        data = Object.values(grupos);
        backgroundColor = labels.map(() => coresClasse[filtro.classe] || '#888');
        legenda = `<b>Classe:</b> ${filtro.classe} | <a href="#" onclick="voltarNivel('classe')">Voltar</a>`;
    } else if (nivel === 'especie') {
        const grupos = agruparPorEspecie(filtro.classe, filtro.subclasse);
        labels = Object.keys(grupos);
        data = Object.values(grupos);
        backgroundColor = labels.map(() => coresClasse[filtro.classe] || '#888');
        legenda = `<b>Classe:</b> ${filtro.classe} <b>Subclasse:</b> ${filtro.subclasse} | <a href="#" onclick="voltarNivel('subclasse', '${filtro.classe}')">Voltar</a>`;
    } else if (nivel === 'subespecie') {
        const grupos = agruparPorSubespecie(filtro.classe, filtro.subclasse, filtro.especie);
        labels = Object.keys(grupos);
        data = Object.values(grupos);
        backgroundColor = labels.map(() => coresClasse[filtro.classe] || '#888');
        legenda = `<b>Classe:</b> ${filtro.classe} <b>Subclasse:</b> ${filtro.subclasse} <b>Espécie:</b> ${filtro.especie} | <a href="#" onclick="voltarNivel('especie', '${filtro.classe}', '${filtro.subclasse}')">Voltar</a>`;
    }
    if (grafico) grafico.destroy();
    grafico = new Chart(document.getElementById('graficoIndicadores').getContext('2d'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Quantidade',
                data: data,
                backgroundColor: backgroundColor,
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed.y}`;
                        }
                    }
                }
            },
            onClick: function(evt, elements) {
                if (elements.length > 0) {
                    const idx = elements[0].index;
                    if (nivel === 'classe') {
                        classeAtual = labels[idx];
                        renderGrafico('subclasse', { classe: classeAtual });
                    } else if (nivel === 'subclasse') {
                        const subclasse = labels[idx];
                        renderGrafico('especie', { classe: filtro.classe, subclasse });
                    } else if (nivel === 'especie') {
                        const especie = labels[idx];
                        renderGrafico('subespecie', { classe: filtro.classe, subclasse: filtro.subclasse, especie });
                    }
                }
            },
            scales: { y: { beginAtZero: true } }
        }
    });
    document.getElementById('graficoLegenda').innerHTML = legenda;
}

function voltarNivel(nivel, classe = null, subclasse = null) {
    if (nivel === 'classe') {
        renderGrafico('classe');
    } else if (nivel === 'subclasse') {
        renderGrafico('subclasse', { classe });
    } else if (nivel === 'especie') {
        renderGrafico('especie', { classe, subclasse });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    renderGrafico('classe');
    // Tabela de referência
    const tbody = document.querySelector('#tabelaIndicadores tbody');
    indicadores.forEach(i => {
        const tr = document.createElement('tr');
        tr.innerHTML = `<td>${i.indicador}</td><td>${i.classe}</td><td>${i.subclasse}</td><td>${i.especie}</td><td>${i.subespecie}</td><td>${i.quantidade}</td>`;
        tbody.appendChild(tr);
    });
});
</script>
@endsection
