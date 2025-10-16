<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('PAGE_TITLE') ? PAGE_TITLE . ' | ' . SITE_NAME : SITE_NAME . ' - Produção Audiovisual & Marketing'; ?></title>
    <meta name="description" content="Ramirez Studio - Especialistas em produção audiovisual, edição de vídeo, fotografia e marketing digital. Transformamos suas ideias em conteúdo impactante.">
    <meta name="keywords" content="edição de vídeo, produção audiovisual, fotografia, marketing digital, motion graphics, design gráfico">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/particles.css">
    
    <!-- Fonts & Icons -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-content">
            <div class="logo-loader">
                <span class="logo-text">Ramirez</span>
                <span class="logo-studio">Studio</span>
            </div>
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
            <div class="loading-text">Carregando experiências criativas...</div>
        </div>
    </div>

    <!-- Cursor Custom -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <a href="<?php echo SITE_URL; ?>" class="logo" data-magnetic>
                <span class="logo-gradient">Ramirez</span>
                <span class="logo-studio">Studio</span>
            </a>
            
            <nav class="nav">
                <ul>
                    <li><a href="#home" class="nav-link active" data-magnetic>Home</a></li>
                    <li><a href="#about" class="nav-link" data-magnetic>Sobre</a></li>
                    <li><a href="#services" class="nav-link" data-magnetic>Serviços</a></li>
                    <li><a href="#portfolio" class="nav-link" data-magnetic>Portfólio</a></li>
                    <li><a href="#testimonials" class="nav-link" data-magnetic>Depoimentos</a></li>
                    <li><a href="#contact" class="nav-link" data-magnetic>Contato</a></li>
                </ul>
            </nav>

            <div class="header-cta">
                <a href="#contact" class="btn btn-primary" data-magnetic>
                    <span class="btn-icon">💬</span>
                    Orçamento
                </a>
            </div>

            <div class="mobile-menu-btn" data-magnetic>
                <div class="menu-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <a href="<?php echo SITE_URL; ?>" class="logo">
                <span class="logo-gradient">Ramirez</span>
                <span class="logo-studio">Studio</span>
            </a>
            <div class="mobile-menu-close">
                <span></span>
                <span></span>
            </div>
        </div>
        
        <nav class="mobile-nav">
            <ul>
                <li><a href="#home" class="mobile-nav-link">Home</a></li>
                <li><a href="#about" class="mobile-nav-link">Sobre</a></li>
                <li><a href="#services" class="mobile-nav-link">Serviços</a></li>
                <li><a href="#portfolio" class="mobile-nav-link">Portfólio</a></li>
                <li><a href="#testimonials" class="mobile-nav-link">Depoimentos</a></li>
                <li><a href="#contact" class="mobile-nav-link">Contato</a></li>
            </ul>
        </nav>
        
        <div class="mobile-menu-footer">
            <div class="mobile-social">
                <a href="<?php echo INSTAGRAM; ?>" class="social-link">Instagram</a>
                <a href="<?php echo YOUTUBE; ?>" class="social-link">YouTube</a>
                <a href="<?php echo WHATSAPP; ?>" class="social-link">WhatsApp</a>
            </div>
            <a href="#contact" class="btn btn-primary btn-block">Solicitar Orçamento</a>
        </div>
    </div>

    <!-- Background Elements -->
    <div class="background-elements">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
        <div class="bg-circle circle-3"></div>
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
    </div>