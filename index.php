<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VDEV — Desenvolvimento Futurista</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
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
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>

        <button id="themeToggle" class="theme-btn">☀</button>
    </div>
</header>

<!-- HERO -->
<section id="home" class="hero">
    <div class="hero-content">
        <img src="assets/img/logoSlogan.png" class="hero-logo">
        <h1 class="title">Tecnologia • Performance • Resultados</h1>
        <p class="subtitle">
            Soluções digitais modernas, rápidas e projetadas para alto impacto.
        </p>
        <a href="#contact" class="cta">Criar Minha Presença Digital</a>
    </div>
</section>

<!-- MARCA -->
<section id="brand" class="brand container">
    <h2 class="section-title">A Marca VDEV</h2>

    <div class="brand-box">
        <div class="brand-icon">
            <i class="ri-shining-line"></i>
        </div>

        <p class="brand-text">
            A VDEV é uma marca reconhecida pela excelência no desenvolvimento digital.
            Seu trabalho combina velocidade, segurança e impacto visual, unindo design premium a tecnologia avançada e usabilidade inteligente.
            Cada projeto é planejado para entregar performance real, seja para marcas pessoais, empresas ou páginas de conversão.
            A VDEV cria experiências digitais modernas, eficientes e orientadas a resultados.
        </p>
    </div>
</section>

<!-- SERVIÇOS -->
<section id="services" class="services">
    <div class="container">
        <h2 class="section-title">Áreas de Atuação da VDEV</h2>

        <div class="vdev-services-grid">
            <div class="vdev-service">
                <div class="icon-wrapper">
                    <i class="ri-macbook-line"></i>
                </div>
                <h3>Sites Profissionais</h3>
                <p>A VDEV desenvolve sites modernos, rápidos e totalmente responsivos, alinhados às melhores práticas do mercado.</p>
            </div>

            <div class="vdev-service">
                <div class="icon-wrapper">
                    <i class="ri-flashlight-line"></i>
                </div>
                <h3>Landing Pages</h3>
                <p>Cria landing pages otimizadas para conversão, ideais para campanhas e estratégias de marketing digital.</p>
            </div>

            <div class="vdev-service">
                <div class="icon-wrapper">
                    <i class="ri-links-line"></i>
                </div>
                <h3>APIs & Automações</h3>
                <p>Implementa integrações, automações e sistemas inteligentes que conectam ferramentas e otimizam processos.</p>
            </div>
        </div>
    </div>
</section>

<!-- PROJETOS -->
<section id="projects" class="projects container">
    <h2 class="section-title">Conheça Alguns Projetos VDEV</h2>

    <div class="vdev-projects-grid">
        <div class="vdev-project">
            <div class="project-icon">
                <i class="ri-window-line"></i>
            </div>
            <h3>Landing Page Premium</h3>
            <p>Projetada para alta conversão, com visual limpo e experiência fluida.</p>
        </div>

        <div class="vdev-project">
            <div class="project-icon">
                <i class="ri-device-line"></i>
            </div>
            <h3>Website Profissional</h3>
            <p>Interface moderna, elegante e otimizada para performance.</p>
        </div>

        <div class="vdev-project">
            <div class="project-icon">
                <i class="ri-code-s-slash-line"></i>
            </div>
            <h3>Automações e APIs</h3>
            <p>Integrações inteligentes que conectam sistemas e otimizam rotinas.</p>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contact" class="contact container">
    <h2 class="section-title">Entre em Contato</h2>

    <div class="contact-box">

        <!-- OPÇÃO EMAIL -->
        <div class="contact-option">
            <div class="contact-icon">
                <i class="ri-mail-send-line"></i>
            </div>

            <h3>Enviar E-mail</h3>

            <?php
                if (isset($_GET['success'])) echo "<p class='success'>Mensagem enviada com sucesso.</p>";
                if (isset($_GET['error'])) echo "<p class='error'>Ocorreu um erro. Tente novamente.</p>";
            ?>

            <form action="send.php" method="POST" class="contact-form">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu email" required>
                <textarea name="mensagem" placeholder="Sua mensagem..." required></textarea>
                <button type="submit">Enviar Mensagem</button>
            </form>
        </div>

        <!-- OPÇÃO WHATSAPP -->
        <div class="contact-option">
            <div class="contact-icon">
                <i class="ri-whatsapp-line"></i>
            </div>

            <h3>Falar pelo WhatsApp</h3>

            <p class="whatsapp-text">
                Clique no botão abaixo para iniciar uma conversa diretamente no WhatsApp.
            </p>

            <a href="https://wa.me/54991882400?text=Ol%C3%A1%20Vitor!%20Vim%20pelo%20site%20VDEV%2C%20tenho%20interesse%20em%20seus%20servi%C3%A7os%20e%20gostaria%20de%20saber%20mais!"
               target="_blank"
               class="whatsapp-btn">
                Iniciar Conversa
            </a>
        </div>

    </div>
</section>

<footer class="footer">
    <p>© <?php echo date("Y"); ?> — VDEV Tecnologia</p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
