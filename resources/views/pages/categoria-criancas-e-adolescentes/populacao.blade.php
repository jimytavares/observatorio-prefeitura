@extends('layouts.main')

@section('title', 'Painel de Dados - Jovens 15 a 29 anos')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages-categorias.css') }}">
@endsection

@section('content')

    @include('globals.title-page')

    @include('globals.breadcrumb')

    <!-- Foto + Texto -->
    <section class="content-section" style="margin-top: -60px;">
        <div class="container">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="image-showcase">
                        <img src="{{ asset('images/ia-img-subcategorias/criancas-adolescentes01.jpeg') }}" alt="População em situação de rua" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="info-card text-justify" style="height: 382px;">
                        <h4><i class="fas fa-info-circle"></i> Informação</h4>
                        <p>No Brasil, são consideradas crianças, pessoas de até 12 anos de idade e adolescentes, pessoas entre 12 e 18 anos completos.</p> </br>
                        <p>De acordo com dados de 2025 do IBGE, a população de crianças e adolescentes no Município de Natal é de 185.388 pessoas, representando 23,6% da população da cidade. 51% das crianças e adolescentes em Natal é do sexo masculino e 49% do sexo feminino.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Graficos -->
    <section class="content-section" style="margin-top: -90px;">
        <div class="container">
            <h2 class="section-title">Dados e Análises Completos</h2>
            
            <!-- ## Chart01: População faixa etaria IBGE -->
            <div class="content-block">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <div class="content-text">
                            <h3 class="content-title">
                                <i class="fas fa-users text-primary"></i>
                                Informação detalhada sobre o grafico de população por Faixa Etária (IBGE)
                            </h3>
                            <p style="width:90%; margin-left:20px;">Os dados do IBGE apresentados no gráfico acima mostram a distribuição da população de crianças e adolescentes em três faixas etárias: 0 a 6 anos, 7 a 11 anos e 12 a 17 anos. Observa-se que a faixa de 0 a 6 anos possui uma população total de <strong>60.919</strong> crianças, sendo <strong>29.766</strong> do sexo feminino e <strong>31.153</strong> do sexo masculino. Na faixa de 7 a 11 anos, são <strong>47.106</strong> crianças, com <strong>22.946</strong> meninas e <strong>24.160</strong> meninos. Já entre 12 e 17 anos, a população é de <strong>57.057</strong> adolescentes, sendo <strong>28.155</strong> do sexo feminino e <strong>28.902</strong> do sexo masculino.</p>
                            <div class="">
                                <span class="badge badge-info">Dados oficiais: 281.472</span>
                                <span class="badge badge-warning">Estimativa real: +400.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart-container">
                            <h4 class="chart-title">População por Faixa Etária (IBGE)</h4>
                            <div id="apexchart-populacao-faixa-etaria" ref="chartContainer"></div>
                            
                            <!-- Controles Vue -->
                            <div class="mt-3 text-center">
                                <button @click="refreshChart" class="btn btn-sm btn-outline-primary mr-2">
                                    <i class="fas fa-sync-alt"></i> Atualizar Gráfico
                                </button>
                                <button @click="exportChart" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-download"></i> Exportar PNG
                                </button>
                            </div>
                            
                            <!-- Status do Chart -->
                            <div v-if="chartStatus" class="alert alert-info mt-2 text-center">
                                <small>#{chartStatus}</small>
                            </div>
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

@endsection

@section('scripts')
    <script>
        new Vue({
            el: '#base-vue',
            delimiters: ['#{', '}'],
            data: {
                chart: null,
                chartStatus: '',
                chartData: {
                    populacao: [60919, 47106, 57057],
                    feminino: [29766, 22946, 28155],
                    masculino: [31153, 24160, 28902],
                    categories: ['0-6 anos', '7-11 anos', '12-17 anos']
                }
            },
            methods: {
                initChart() {
                    const options = {
                        chart: {
                            type: 'bar',
                            height: 320,
                            animations: {
                                enabled: true,
                                easing: 'easeinout',
                                speed: 800
                            },
                            toolbar: {
                                show: true,
                                tools: {
                                    download: true,
                                    selection: true,
                                    zoom: true,
                                    zoomin: true,
                                    zoomout: true,
                                    pan: true,
                                    reset: true
                                }
                            }
                        },
                        series: [
                            {
                                name: 'População Total',
                                data: this.chartData.populacao
                            },
                            {
                                name: 'Feminino',
                                data: this.chartData.feminino
                            },
                            {
                                name: 'Masculino',
                                data: this.chartData.masculino
                            }
                        ],
                        xaxis: {
                            categories: this.chartData.categories,
                            title: { 
                                text: 'Faixa Etária',
                                style: {
                                    fontSize: '14px',
                                    fontWeight: 600,
                                    color: '#17669b'
                                }
                            }
                        },
                        yaxis: {
                            title: { 
                                text: 'Quantidade de Pessoas',
                                style: {
                                    fontSize: '14px',
                                    fontWeight: 600,
                                    color: '#17669b'
                                }
                            },
                            labels: {
                                formatter: function(val) {
                                    return val.toLocaleString('pt-BR');
                                }
                            }
                        },
                        colors: ['#17669b', '#e83e8c', '#ffc107'],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                endingShape: 'rounded',
                                borderRadius: 4
                            }
                        },
                        dataLabels: {
                            enabled: true,
                            formatter: function(val) {
                                return val.toLocaleString('pt-BR');
                            },
                            style: {
                                fontSize: '12px',
                                colors: ['#fff']
                            }
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            fontWeight: 600,
                            markers: {
                                radius: 4
                            }
                        },
                        tooltip: {
                            theme: 'light',
                            y: {
                                formatter: function (val) {
                                    return val.toLocaleString('pt-BR') + ' pessoas';
                                }
                            }
                        },
                        grid: {
                            borderColor: '#e7eaf3',
                            strokeDashArray: 5
                        }
                    };

                    // Verificar se o elemento existe
                    const chartElement = document.querySelector("#apexchart-populacao-faixa-etaria");
                    if (chartElement) {
                        this.chart = new ApexCharts(chartElement, options);
                        this.chart.render().then(() => {
                            this.chartStatus = 'Gráfico carregado com sucesso via Vue.js!';
                            console.log('Chart renderizado com sucesso via Vue.js');
                        });
                    } else {
                        console.error('Elemento do chart não encontrado');
                        this.chartStatus = 'Erro: Elemento do gráfico não encontrado';
                    }
                },

                // Atualizar o gráfico
                refreshChart() {
                    console.log('Atualizando gráfico...');
                    this.chartStatus = 'Atualizando dados...';
                    
                    if (this.chart) {
                        // Simular novos dados (você pode conectar com API aqui)
                        const newData = [
                            {
                                name: 'População Total',
                                data: this.chartData.populacao
                            },
                            {
                                name: 'Feminino', 
                                data: this.chartData.feminino
                            },
                            {
                                name: 'Masculino',
                                data: this.chartData.masculino
                            }
                        ];
                        
                        this.chart.updateSeries(newData);
                        this.chartStatus = 'Dados atualizados!';
                        
                        setTimeout(() => {
                            this.chartStatus = '';
                        }, 2000);
                    }
                },

                // Exportar gráfico
                exportChart() {
                    if (this.chart) {
                        this.chartStatus = 'Exportando gráfico...';
                        
                        this.chart.dataURI().then((uri) => {
                            const link = document.createElement('a');
                            link.href = uri.imgURI;
                            link.download = 'populacao-criancas-adolescentes.png';
                            link.click();
                            
                            this.chartStatus = 'Gráfico exportado!';
                            setTimeout(() => {
                                this.chartStatus = '';
                            }, 2000);
                        });
                    }
                },

                // Atualizar dados do gráfico (método para futuras integrações com API)
                updateChartData(newData) {
                    this.chartData = { ...this.chartData, ...newData };
                    this.refreshChart();
                }
            },
            mounted() {
                this.chartStatus = 'Carregando gráfico...';
                
                // Aguardar ApexCharts carregar
                const checkApexCharts = () => {
                    if (typeof ApexCharts !== 'undefined') {
                        console.log('ApexCharts detectado, inicializando...');
                        this.initChart();
                    } else {
                        console.log('Aguardando ApexCharts...');
                        setTimeout(checkApexCharts, 100);
                    }
                };
                
                // Inicializar após um pequeno delay
                setTimeout(checkApexCharts, 200);
            },
            beforeDestroy() {
                if (this.chart) {
                    this.chart.destroy();
                    console.log('Chart destruído');
                }
            }
        });
    </script>
@endsection
