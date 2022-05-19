<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while (have_posts()) : the_post();
		?>
			<div class="center">
				<h2><?php the_title(); ?></h2>
				<h4>Parceiro: <?php echo get_field('empresa') ?></h4>
				<?php the_content(); ?>
			</div>
		<?php
			get_template_part('content', get_post_format());


		// End the loop.
		endwhile;
		?>

	</main><!-- .site-main -->



	<section class="liked">
		<div class="center">
			<h2>Gostou de nossos serviços?</h2>
			<a href="<?php get_theme_root_uri(); ?>/construformas/contato"><button>Entre em Contato</button></a>
		</div>
	</section>
</div><!-- .content-area -->

<?php get_footer(); ?>
