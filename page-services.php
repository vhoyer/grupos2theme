<?php
/*
Template Name: Template para Serviços
*/
?>
<?php get_header(); ?>
<?php
$query = new WP_Query( [
'post_type'      => 'page',
'posts_per_page' => -1,
'post_parent'    => get_theme_mod( 'servicesPageID' ),
'order'          => 'ASC',
'orderby'        => 'menu_order'
] );
?>
<section id="services">
	<?php dynamic_heading(__("Serviços", "grupos2theme"), [
	"class"=>"heading",
	]); ?>
	<div class="container-fluid">
		<div class="row normalize-anchor">
			<?php while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo get_post_permalink(); ?>">
				<div class='col-sm-6 col-md-4 card flex-wrapper'>
					<div class="center-text-within full-size">
						<?php dynamic_heading(get_the_title(), [
						"in_front"=>"h3",
						"else"=>"h2",
						]) ?>
						<?php //content before <!--more--> tag
						$content = get_post_field( 'post_content', get_the_ID() );
						$content_parts = get_extended( $content );
						echo $content_parts['main']; ?>
					</div>
					<?php if ( has_post_thumbnail() ): ?>
					<div class='center-img-inside'>
						<?php the_post_thumbnail('medium_large'); ?>
					</div>
					<?php endif; ?>
				</div>
			</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
