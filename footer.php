<?php $title = get_the_title(); ?>

<footer>
    <div class="footer center">
        <div class="footer-left">
            <a href="<?php echo get_site_url(); ?>"><img src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/images/logo-dark-no-bg.png" alt=""></a>
            <nav class="footer-nav">
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
            </nav><!-- footer nav -->
        </div><!-- footer left -->
        <div class="footer-right">
            <div>
                <h3>Endereço:</h3>
                <?php
                $addressposts = new WP_Query(array(
                    'post_type' => 'endereco',
                ));

                while ($addressposts->have_posts()) {
                    $addressposts->the_post();

                ?>
                    <p><?php the_title(); ?></p>
                <?php } ?>
            </div>
            <div>
                <h3>Telefones:</h3>
                <?php
                $telefonespost = new WP_Query(array(
                    'post_type' => 'telefones',
                ));

                while ($telefonespost->have_posts()) {
                    $telefonespost->the_post();
                ?>
                    <p><?php the_title(); ?></p>
                <?php } ?>
            </div>
            <div>
                <h3>E-mail:</h3>
                <?php
                $emailsposts = new WP_Query(array(
                    'post_type' => 'emails',
                ));

                while ($emailsposts->have_posts()) {
                    $emailsposts->the_post();
                ?>
                    <p><?php the_title(); ?></p>
                <?php } ?>
            </div>
        </div><!-- footer right -->

    </div><!-- footer container -->
    <div class="container-copyright">
        <div class="center copyright">
            <p>&copy; Copyright 2022, construformas.com.br</p>
            <p>Developed by <a href="https://tfrontdev.vercel.app">TFrontDev</a></p>
        </div>
    </div><!-- copyright -->
</footer>
</div> <!-- content -->

<?php wp_footer(); ?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script type="text/javascript" src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/scripts/script.js"></script>
<script type="text/javascript" src="<?= get_theme_root_uri(); ?>/construformas-theme/assets/scripts/contact.js"></script>

<script>
    AOS.init();
</script>

</body>

</html>