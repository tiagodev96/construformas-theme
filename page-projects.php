<?php
//Template Name: Projetos
?>

<?php get_header(); ?>

<main>
    <div class="center">
        <h2 class="page-title">Nossos Projetos</h2>
    </div>

    <div class="center">
        <section class="projects">
            <?php

            $projetosposts = new WP_Query(array(
                'post_type' => 'projeto',
            ));


            if ($projetosposts->have_posts()) :
                while ($projetosposts->have_posts()) :
                    $projetosposts->the_post();
            ?>
                    <div class="flex-card">
                        <div class="project-card">
                            <img src="<?= get_field('thumbnail'); ?>" alt="">
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo get_field('descricao'); ?></p>
                        <a href="<?php echo get_permalink(); ?>">
                            <button class="cta">
                                <span class="hover-underline-animation"> Ver Projeto </span>
                                <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
                                    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
            <?php

                endwhile;

            endif;
            wp_reset_postdata(); ?>
        </section>
    </div>
</main>


<?php get_footer(); ?>
