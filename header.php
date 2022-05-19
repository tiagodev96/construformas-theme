<?php $title = get_the_title(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php wp_head(); ?>
    <title>Construformas | <?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/construformas-theme/style.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/construformas-theme/home.css">
    <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/construformas-theme/single.css">
    <link rel="icon" href="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/favicon.png" type="image/x-icon">

    <?php
    if ($title == 'Contato') {
    ?>
        <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/construformas-theme/contact.css">
    <?php } ?>
    <!-- CSS PAGE CONTATO -->

    <?php
    if ($title == 'Sobre') {
    ?>
        <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/construformas-theme/about.css">
    <?php } ?>
    <!-- CSS PAGE SOBRE -->

    <?php if ($title == 'Projetos') { ?>
        <link rel="stylesheet" href="<?= get_theme_root_uri(); ?>/construformas-theme/projects.css">
    <?php } ?>
    <!-- CSS PAGE Projetos -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /><!-- AOS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <script src="https://kit.fontawesome.com/749fb001c7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://unpkg.com/menu-hamburger@2.0.0/lib/menu-hamburger.min.js"></script>
</head>

<body>
    <div class="load-page">
        <div class="spinner"></div>
    </div>
    <div style="display: none;" class="content">
        <header>
            <div class="center">

                <nav class="navbar">
                    <a href="<?php echo get_site_url(); ?>"><img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/logo-dark-no-bg.png" alt=""></a>

                    <ul class="pages-list">
                        <li class="<?php if ($title == 'Home') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>">Home</a>
                        </li>
                        <li class="<?php if ($title == 'Sobre') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>/sobre">Quem Somos</a>
                        </li>
                        <li class="<?php if ($title == 'Projetos') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>/projetos">Projetos / Obras</a>
                        </li>
                        <li class="<?php if ($title == 'Contato') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>/contato">Contato</a>
                        </li>
                    </ul>

                    <div class="social-media">
                        <a href="https://instagram.com/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a target="_blank" href="https://wa.me/5516981017203">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <div id="menu-wrapper" class="hamburguer-menu"></div>
                </nav> <!-- desktop menu -->

                <nav class="dropdown-menu">
                    <ul class="pages-list">
                        <li class="<?php if ($title == 'Home') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>">Home</a>
                        </li>
                        <li class="<?php if ($title == 'Sobre') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>/sobre">Quem Somos</a>
                        </li>
                        <li class="<?php if ($title == 'Projetos') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>/projetos">Projetos / Obras</a>
                        </li>
                        <li class="<?php if ($title == 'Contato') { ?>active<?php } ?>">
                            <a href="<?php echo get_site_url(); ?>/contato">Contato</a>
                        </li>
                    </ul>
                </nav><!-- dropdown menu -->
            </div><!-- center -->
            <div class="whatsapp-icon">
                <button class="whatsapp-fixed-button">
                    <a target="_blank" href="https://wa.me/5516981017203"><i class="fa-brands fa-whatsapp"></i></a>
                </button>

            </div>
            <?php
            if ($title == 'Home') {
            ?>
                <hr>
                <div class="painel center">
                    <div class="painel-text">
                        <h2><?php echo get_field('titulo_cabecalho'); ?></h2>
                        <p><?php echo get_field('descricao_cabecalho'); ?></p>
                        <a href="<?php echo get_site_url(); ?>/contato">Entrar em Contato <i class="fa-solid fa-angle-right"></i></a>
                    </div><!-- conteúdo do painel -->
                </div><!-- painel -->
            <?php } ?>
        </header>