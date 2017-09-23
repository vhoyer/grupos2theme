<?php get_header(); ?>
<?php get_template_part( 'front-page-cards' ); ?>
<?php get_template_part( 'front-page-cases' ); ?>
<?php get_template_part( 'front-page-clients' ); ?>
<section id='partnership'>
	<h2 class='heading orange'>Parcerias</h2>
	<div class='flex-wrapper wrap space-around'>
		<img id='rdstation' src="<?php bloginfo('stylesheet_directory'); ?>/imgs/rd-station-automacao-de-marketing.png"  alt="">
	</div>
</section>
<?php get_footer(); ?>
