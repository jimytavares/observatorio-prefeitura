<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observatório de Direitos Humanos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #e9f0f7;
        }
        .header-bar {
            background: #2a6ecf;
            color: #fff;
            padding: 8px 0 0 0;
            font-size: 14px;
        }
        .header-bar .container {
            display: flex;
            justify-content: flex-end;
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .main-navbar {
            background: #f5f5f5;
            border-bottom: 1px solid #e0e0e0;
        }
        .main-navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
        }
        .main-navbar img {
            height: 48px;
            margin-right: 16px;
        }
        .main-navbar nav {
            display: flex;
            gap: 24px;
        }
        .main-navbar nav a {
            color: #2a6ecf;
            text-decoration: none;
            font-weight: 500;
        }
        .main-navbar .search {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .main-navbar .search input {
            padding: 6px 12px;
            border: 1px solid #b0b0b0;
            border-radius: 4px;
        }
        .main-navbar .search button {
            background: #2a6ecf;
            color: #fff;
            border: none;
            padding: 6px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .hero {
            position: relative;
            background: linear-gradient(rgba(0, 80, 170, 0.85), rgba(0, 80, 170, 0.85)), url('/images/bg-index7.png') center/cover no-repeat;
            min-height: 520px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero .people-bg {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('/images/banner-natal.png') center/cover no-repeat;
            opacity: 0.25;
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            display: flex;
            gap: 48px;
            align-items: center;
            width: 100%;
            max-width: 1100px;
            justify-content: center;
        }
        .category-list {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .category-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #ffe600;
            color: #1a1a1a;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            border-radius: 32px;
            padding: 12px 28px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            cursor: pointer;
            transition: background 0.2s;
        }
        .category-btn:hover {
            background: #fff200;
        }
        .category-btn i {
            font-size: 1.3em;
        }
        .info-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            padding: 36px 32px;
            max-width: 350px;
            text-align: center;
        }
        .info-card .icon {
            font-size: 2.5em;
            color: #2a6ecf;
            margin-bottom: 12px;
        }
        .info-card h2 {
            font-size: 1.3em;
            margin: 0 0 12px 0;
            color: #2a6ecf;
        }
        .info-card p {
            color: #444;
            font-size: 1em;
            margin-bottom: 18px;
        }
        .info-card .btn {
            background: #2a6ecf;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .info-card .btn:hover {
            background: #1a4e9e;
        }
        .footer {
            background: #232a3b;
            color: #fff;
            padding: 40px 0 0 0;
            font-size: 15px;
        }
        .footer .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 48px;
            justify-content: space-between;
        }
        .footer .logo {
            margin-bottom: 18px;
        }
        .footer .desc {
            max-width: 320px;
            margin-bottom: 18px;
        }
        .footer .links, .footer .contacts, .footer .direitos {
            min-width: 180px;
        }
        .footer .links a, .footer .direitos a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }
        .footer .contacts {
            font-size: 14px;
        }
        .footer .social {
            margin-top: 12px;
        }
        .footer .social a {
            color: #fff;
            margin-right: 10px;
            font-size: 1.2em;
        }
        .footer-bottom {
            background: #1a1f2b;
            color: #b0b0b0;
            text-align: center;
            padding: 12px 0;
            font-size: 13px;
            margin-top: 32px;
        }
        @media (max-width: 900px) {
            .hero-content { flex-direction: column; gap: 32px; }
            .footer .container { flex-direction: column; gap: 24px; }
        }
    </style>
</head>
<body>
    <div class="header-bar">
        <div class="container">
            <span>Legislação</span>
            <span>Transparência</span>
            <span>Ouvidoria</span>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <div style="display: flex; align-items: center;">
                <img src="/images/bg-logo-prefeitura-do-natal2.png" alt="Prefeitura do Natal" />
            </div>
            <nav>
                <a href="#">PORTAL</a>
                <a href="#">A PREFEITURA</a>
                <a href="#">MAPA DO SITE</a>
                <a href="#">GUIA DE SERVIÇOS</a>
                <a href="#">A CIDADE</a>
            </nav>
            <div class="search">
                <input type="text" placeholder="Pesquisar no site">
                <button>Pesquisar</button>
            </div>
            <div style="margin-left: 16px;">
                <a href="#" title="Lei de Acesso"><i class="fa-solid fa-gavel" style="color:#2a6ecf;"></i></a>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="people-bg"></div>
        <div class="hero-content">
            <div class="category-list">
                <button class="category-btn"><i class="fa-solid fa-child"></i> Criança</button>
                <button class="category-btn"><i class="fa-solid fa-venus-mars"></i> LGBT</button>
                <button class="category-btn"><i class="fa-solid fa-user-graduate"></i> Juventude</button>
                <button class="category-btn"><i class="fa-solid fa-scale-balanced"></i> Igualdade Racial</button>
                <button class="category-btn"><i class="fa-solid fa-wheelchair"></i> PCD</button>
                <button class="category-btn"><i class="fa-solid fa-triangle-exclamation"></i> Violação de Direitos</button>
                <button class="category-btn"><i class="fa-solid fa-person-cane"></i> Pessoa Idosa</button>
                <button class="category-btn"><i class="fa-solid fa-puzzle-piece"></i> TEA</button>
            </div>
            <div class="info-card">
                <div class="icon"><i class="fa-solid fa-eye"></i></div>
                <h2>Observatório de Direitos Humanos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <button class="btn">Saiba Mais</button>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div>
                <img src="/images/bg-logo-prefeitura-do-natal2.png" alt="Prefeitura do Natal" class="logo" width="120" />
                <div class="desc">
                    Observatório de Direitos Humanos da Prefeitura Municipal de Natal, comprometido com a promoção, proteção e defesa dos direitos humanos, diversidade e inclusão. Acompanhe dados, ações e notícias sobre igualdade racial, e defesa dos direitos humanos e promoção da diversidade, e a proteção de idosos e pessoas com deficiência.
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="links">
                <strong>Links Rápidos</strong>
                <a href="#">Início</a>
                <a href="#">Sobre Nós</a>
                <a href="#">Notícias</a>
                <a href="#">Denúncia</a>
                <a href="#">Contato</a>
            </div>
            <div class="direitos">
                <strong>Direitos Humanos</strong>
                <a href="#">Crianças e Adolescentes</a>
                <a href="#">Pessoas com Deficiência</a>
                <a href="#">Pessoas LGBTQIA+</a>
                <a href="#">Pessoas Idosas</a>
                <a href="#">Ver Todos</a>
            </div>
            <div class="contacts">
                <strong>Contatos</strong><br>
                Secretaria Municipal de Igualdade Racial, Direitos Humanos, Diversidade, Pessoas Idosas e Pessoas com Deficiência (SEMIDH)<br>
                CNPJ: 12.345.678/0001-99<br>
                <a href="mailto:observatoriodh@natal.rn.gov.br" style="color:#fff;">observatoriodh@natal.rn.gov.br</a><br>
                (84) 1234-5678<br>
                Seg a Sex: 8h às 17h
            </div>
        </div>
        <div class="footer-bottom">
            © 2025 Prefeitura Municipal de Natal. Todos os direitos reservados.
        </div>
    </footer>
</body>
</html>
