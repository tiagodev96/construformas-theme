<?php
//Template Name: Sobre
?>

<?php get_header(); ?>

<main>
    <div class="center">
        <section class="presentation">
            <div class="left-side" data-aos="fade-right" data-aos-duration="1500">
                <h3>Sobre nós</h3>
                <h2><?php echo get_field('titulo_sobre'); ?></h2>
                <p><?php echo get_field('primeiro_paragrafo_sobre'); ?></p>
                <p><?php echo get_field('segundo_paragrafo_sobre'); ?></p>
            </div><!-- lado esquerdo -->
            <div class="right-side" data-aos="fade-left" data-aos-duration="1500">
                <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/construction-image.jpg" alt="">
            </div><!-- lado direito -->
        </section><!-- Apresentação da Empresa -->
    </div>

    <section class="our-services">
        <h4 data-aos="zoom-in-up" data-aos-duration="1500">Nossos serviços</h4>
        <div class="our-services-grid">
            <a href="/construformas/projetos">
                <div class="service" data-aos="zoom-in-up" data-aos-duration="1500">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <div class="separator"></div>
                    <h4>Gerenciamento e Administração de Obras</h4>
                </div>
            </a>
            <a href="/construformas/projetos">
                <div class="service" data-aos="zoom-in-up" data-aos-duration="1500">
                    <i class="fa-solid fa-trowel-bricks"></i>
                    <div class="separator"></div>
                    <h4>Reformas</h4>
                </div>
            </a>
            <a href="https://www.construformasengenharia.com/projeto/estacao-elevatoria-jandira/">
                <div class="service" data-aos="zoom-in-up" data-aos-duration="1500">
                    <i class="fa-solid fa-building"></i>
                    <div class="separator"></div>
                    <h4>Estações Elevatórias de Esgoto</h4>
                </div>
            </a>
            <a href="/construformas/projetos">
                <div class="service" data-aos="zoom-in-up" data-aos-duration="1500">

                    <i class="fa-solid fa-list-check"></i>
                    <div class="separator"></div>
                    <h4>Construções Casa Verde e Amarela</h4>
                </div>
            </a>
            <a href="/construformas/projetos">
                <div class="service" data-aos="zoom-in-up" data-aos-duration="1500">
                    <i class="fa-solid fa-droplet"></i>
                    <div class="separator"></div>
                    <h4>Projetos Arquitetônicos e Complementares</h4>
                </div>
            </a>
        </div>

    </section><!-- Nossos serviços -->

    <div class="center">
        <section class="our-process">
            <div class="our-process-card">
                <div>
                    <h2>Nosso processo de trabalho</h2>
                </div>
                <div class="process-stages">
                    <div class="stage">
                        <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/process-headline.png" alt="">
                        <h4>Planejamento</h4>
                        <p>Etapa em que nos reunimos com o cliente e entendemos profundaente a demanda!</p>
                    </div>
                    <div class="stage">
                        <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/process-headline.png" alt="">
                        <h4>Orçamento</h4>
                        <p>Identificamos as melhores soluções, materiais e equipe para o cliente e geramos um orçamento confiável.</p>
                    </div>
                    <div class="stage">
                        <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/process-headline.png" alt="">
                        <h4>Projeto</h4>
                        <p>Elaboramos um projeto detalhado com todas as informações pautadas no orçamento e demanda do cliente.</p>
                    </div>
                    <div class="stage">
                        <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/process-headline.png" alt="">
                        <h4>Execução</h4>
                        <p>Executamos o projeto com uma equipe dedicada e capacitada, entregamos com QUALIDADE e AGILIDADE.</p>
                    </div>
                </div><!-- FLUXO DE TODAS AS ETAPAS -->
            </div><!-- CARD NOSSOS PROCESSOS -->


        </section><!-- Processo de Trabalho -->
    </div>

    <section class="achievements">
        <div class="center">
            <div class="achievement-grid">
                <div class="achievement" data-aos="fade-right" data-aos-duration="1500">
                    <i class="fa-solid fa-face-smile-beam"></i>
                    <span class="num counter-span"><?php echo get_field('quantidade_clientes_satisfeitos'); ?></span>
                    <span class="definition">Clientes Satisfeitos</span>
                </div>
                <div class="achievement" data-aos="fade-left" data-aos-duration="1500">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span class="num counter-span"><?php echo get_field('quantidade_projetos'); ?></span>
                    <span class="definition">Projetos</span>
                </div>
                <div class="achievement" data-aos="fade-right" data-aos-duration="1500">
                    <i class="fa-solid fa-person-digging"></i>
                    <span class="num counter-span"><?php echo get_field('quantidade_obras'); ?></span>
                    <span class="definition">Obras</span>
                </div>
                <div class="achievement" data-aos="fade-left" data-aos-duration="1500">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="num counter-span"><?php echo get_field('quantidade_anos_experiencia'); ?></span>
                    <span class="definition">Anos de Experiência</span>
                </div>
            </div>
        </div>
    </section><!-- Números -->


</main>
<?php get_footer(); ?>