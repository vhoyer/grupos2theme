<?php
/*
Template Name: Template para Agencia
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'part-cards' ); ?>
<div class="container">
	<div class="row">
		<section id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="header">
					<h1 class="entry-title heading"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
				</header>
				<section class="entry-content">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					<?php the_content(); ?>
					<div class="entry-links"><?php wp_link_pages(); ?></div>
				</section>
			</article>
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>
