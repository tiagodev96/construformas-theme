<?php
//Template Name: Home
?>

<?php get_header(); ?>

<main>
    <section class="how-we-work center">
        <div class="work-text">
            <h2>Como nós trabalhamos</h2>
            <p>Empresa com mais de 10 anos de mercado, com método moderno e eficiente para seus projetos!</p>
            <a href="/construformas/contato">Entre em contato conosco <i class="fa-solid fa-arrow-right"></i></a>
        </div><!-- text on left -->
        <div class="work-grid">
            <div class="card card1">
                <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/icon-n1.png" alt="">
                <h3>Missão</h3>
                <p>Proporcionar o melhor atendimento aos nossos clientes, fornecendo serviços com a mais alta infraestrutura para atender as suas necessidades.</p>
            </div>
            <div class="card card2">
                <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/icon-n2.png" alt="">
                <h3>Visão</h3>
                <p>Ser referência em qualidade de serviços relacionados a construções e engenharia, com as maiores atualizações de exigências do mercado.</p>
            </div>
            <div class="card card3">
                <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/icon-n3.png" alt="">
                <h3>Valores</h3>
                <p>Ética, transparência nos serviços prestados, respeito, competência e parcerias.</p>
            </div>
            <div class="card card4">
                <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/icon-n4.png" alt="">
                <h3>Clientes</h3>
                <p>Desenvolver ações que aprimorem a confiabilidade, o apoio, a segurança e a entrega dos serviços prestados, que irão garantir um resultado satisfatório.</p>
            </div>
            <div class="card card4">
                <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/icon-n5.png" alt="">
                <h3>Fornecedores</h3>
                <p>Procuramos estabelecer o relacionamento entre os mais confiáveis setores de fornecimento, para assim oferecer aos nossos clientes os melhores produtos da mais alta qualidade do mercado atual.</p>
            </div>
            <div class="card card4">
                <img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/icon-n6.png" alt="">
                <h3>Tecnologia</h3>
                <p>O desenvolvimento dos projetos que serão realizados em nossa empresa são suportados pela mais alta linha de equipamentos tecnológicos, visando sempre o aperfeiçoamento e a inovação.</p>
            </div>
        </div><!-- grid on right -->
    </section><!-- section how we work -->

    <section class="need-us">
        <div class="center">
            <div class="text-need-us">
                <h2>Precisa de Nossos Serviços?</h2>
                <p><?php echo get_field('descricao_dos_servicos'); ?></p>
                <a href="<?php echo get_site_url(); ?>/contato">Faça um Orçamento</a>
            </div>
        </div>
    </section>

    <section class="our-services">
        <div class="center">
            <div class="our-services-text">
                <h2>Veja nossos projetos</h2>
                <button class='see-more-projects'>
                    <a style="color: white" href="<?php echo get_site_url(); ?>/projetos">
                        <span class="label">Ver mais</span>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                            </svg>
                        </span>
                    </a>
                </button>
            </div>
            <div class="services-flex">
                <?php
                $projetosposts = new WP_Query(array(
                    'post_type' => 'projeto',
                    'posts_per_page' => 3,
                ));

                while ($projetosposts->have_posts()) {
                    $projetosposts->the_post();
                ?>
                    <div class="project">
                        <img src="<?= get_field('thumbnail'); ?>" alt="">
                        <div class="project-infos">
                            <h3><?php the_title(); ?></h3>
                            <a href="<?php echo get_permalink(); ?>">Ver projeto <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                <?php } ?>
            </div><!-- services flex container -->
        </div><!-- center -->
    </section><!-- services -->

    <section class="partner center">
        <h2>Nossos Parceiros</h2>
        <div class="my-slick ">

            <?php
            $parceirospost = new WP_Query(array(
                'post_type' => 'parceiros'
            ));

            while ($parceirospost->have_posts()) {
                $parceirospost->the_post();

            ?>
                <div><img src="<?= get_field('logo_do_parceiro'); ?>" alt="<?= the_title(); ?>"></div>
            <?php } ?>
        </div><!-- slicker -->
    </section><!-- partners section -->
</main>

<?php get_footer(); ?>