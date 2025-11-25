<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDEV — Desenvolvimento Futurista</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="container">
        <img src="assets/img/logo.png" class="logo" alt="VDEV Logo">

        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#brand">Marca</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>

        <button id="themeToggle" class="theme-btn">☀</button>
    </div>
</header>

<!-- HERO -->
<section id="home" class="hero">
    <div class="hero-content">
        <img src="assets/img/logo.png" class="hero-logo">

        <h1 class="title">Tecnologia • Velocidade • Precisão</h1>
        <p class="subtitle">Desenvolvimento moderno, elegante e de alta performance.</p>

        <a href="#contact" class="cta">Entrar em Contato</a>
    </div>
</section>

<!-- MARCA -->
<section id="brand" class="brand container">
    <h2>A Marca VDEV</h2>
    <p class="brand-text">
        VDEV representa inovação, velocidade e design premium.  
        Um desenvolvedor que cria experiências digitais com a mesma filosofia das grandes empresas de tecnologia:<br>
        <strong>limpeza, performance e impacto visual.</strong>
    </p>
</section>

<!-- SERVIÇOS -->
<section id="services" class="services">
    <div class="container">
        <h2>O que eu Faço</h2>

        <div class="service-grid">

            <div class="service-card">
                <h3>Sites Profissionais</h3>
                <p>Criação de sites modernos, rápidos e totalmente responsivos.</p>
            </div>

            <div class="service-card">
                <h3>Landing Pages</h3>
                <p>Projetadas para conversão máxima e campanhas de marketing.</p>
            </div>

            <div class="service-card">
                <h3>APIs & Automações</h3>
                <p>Integrações, notificações e sistemas inteligentes.</p>
            </div>

        </div>
    </div>
</section>

<!-- PROJETOS -->
<section id="projects" class="projects container">
    <h2>Projetos</h2>

    <div class="project-grid">
        <div class="project-card">
            <h3>Landing Page Premium</h3>
            <p>Alta conversão com design minimalista.</p>
        </div>

        <div class="project-card">
            <h3>Website Profissional</h3>
            <p>Experiência futurista e elegante.</p>
        </div>

        <div class="project-card">
            <h3>Automações API</h3>
            <p>Sistemas conectados e inteligentes.</p>
        </div>
    </div>
</section>

<!-- SOBRE -->
<section id="about" class="about container">
    <h2>Sobre Mim</h2>

    <p>
        Sou <strong>Vitor da Luz Paiz</strong>, desenvolvedor especializado em criar interfaces modernas,
        soluções inteligentes e experiências digitais de alto impacto.  
        Minha missão é entregar projetos com a mesma filosofia de empresas como Tesla, SpaceX e Apple:
        <strong>Design impecável, performance absoluta e inovação real.</strong>
    </p>
</section>

<!-- CONTATO -->
<section id="contact" class="contact container">
    <h2>Contato</h2>

    <?php
        if (isset($_GET['success'])) echo "<p class='success'>Mensagem enviada com sucesso.</p>";
        if (isset($_GET['error'])) echo "<p class='error'>Ocorreu um erro. Tente novamente.</p>";
    ?>

    <form action="send.php" method="POST">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu email" required>
        <textarea name="mensagem" placeholder="Sua mensagem..." required></textarea>
        <button type="submit">Enviar</button>
    </form>
</section>

<footer class="footer">
    <p>© <?php echo date("Y"); ?> — VDEV Tecnologia</p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
