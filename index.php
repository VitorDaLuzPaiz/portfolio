<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitor Paiz — Desenvolvimento Web</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="container">
        <img src="assets/img/logo.png" class="logo" alt="Logo">
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li><a href="#testimonials">Depoimentos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>

        <button id="themeToggle" class="theme-btn">☀</button>
    </div>
</header>

<section id="home" class="hero">
    <div class="hero-content">
        <h1 class="title">Desenvolvimento <span>Moderno & Futurista</span></h1>
        <p class="subtitle">Criação de sites profissionais, landing pages de alta conversão e automações inteligentes.</p>
        <a href="#contact" class="cta">Fale Comigo</a>
    </div>
    <div class="hero-visual"></div>
</section>

<section id="about" class="about container">
    <div class="about-img">
        <img src="assets/img/avatar-temp.svg" alt="Foto do desenvolvedor">
    </div>
    <div class="about-text">
        <h2>Sobre Mim</h2>
        <p>
            Sou <strong>Vitor da Luz Paiz</strong>, desenvolvedor especializado em projetos modernos,
            elegantes e altamente funcionais. Crio sites pessoais, landing pages de alta conversão,
            sistemas otimizados e integrações automatizadas.
        </p>
    </div>
</section>

<section id="services" class="services">
    <div class="container">
        <h2>Serviços</h2>
        <div class="service-grid">

            <div class="card">
                <h3>Sites Profissionais</h3>
                <p>Sites pessoais, institucionais e páginas modernas que impressionam seus clientes.</p>
            </div>

            <div class="card">
                <h3>Landing Pages</h3>
                <p>Páginas de captação criadas para maximizar conversões e gerar resultados rápidos.</p>
            </div>

            <div class="card">
                <h3>APIs & Automações</h3>
                <p>Integrações inteligentes, sistemas automáticos e notificações conectadas.</p>
            </div>

        </div>
    </div>
</section>

<section id="projects" class="projects container">
    <h2>Projetos Recentes</h2>
    <div class="project-grid">

        <div class="project-card">
            <h3>Landing Page Premium</h3>
            <p>Alta conversão, visual elegante, foco em captar leads.</p>
        </div>

        <div class="project-card">
            <h3>Site Pessoal</h3>
            <p>Design futurista e totalmente responsivo.</p>
        </div>

        <div class="project-card">
            <h3>Automação via API</h3>
            <p>Integração entre sistemas, notificações e inteligência.</p>
        </div>

    </div>
</section>

<section id="testimonials" class="testimonials">
    <div class="container">
        <h2>Depoimentos</h2>
        <div class="testimonial-grid">

            <div class="testimonial">
                <p>"A landing page aumentou minhas vendas em poucos dias. Profissional excelente!"</p>
                <span>- Lucas M.</span>
            </div>

            <div class="testimonial">
                <p>"Meu site ficou com um visual tão moderno que parece até de uma grande agência."</p>
                <span>- Ana Ribeiro</span>
            </div>

            <div class="testimonial">
                <p>"A automação reduziu meu tempo de trabalho pela metade. Incrível."</p>
                <span>- João Farias</span>
            </div>

        </div>
    </div>
</section>

<section id="contact" class="contact container">
    <h2>Contato</h2>

    <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<p class='success'>Mensagem enviada com sucesso!</p>";
        }
        if (isset($_GET['error'])) {
            echo "<p class='error'>Erro ao enviar. Tente novamente.</p>";
        }
    ?>

    <form action="send.php" method="POST">
        <input type="text" name="nome" placeholder="Seu Nome" required>
        <input type="email" name="email" placeholder="Seu Email" required>
        <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</section>

<footer class="footer">
    <p>© 2024 - Desenvolvido por Vitor Paiz</p>
</footer>
<script src="assets/js/script.js"></script>
</body>
</html>
