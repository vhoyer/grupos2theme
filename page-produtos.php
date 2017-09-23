<?php
/*
Template Name: Template para Produtos
*/
?>
<?php get_header(); ?>
<?php
$query = new WP_Query( [
'post_type'      => 'page',
'posts_per_page' => -1,
'post_parent'    => get_page_by_path("produtos")->ID,
'order'          => 'ASC',
'orderby'        => 'menu_order'
] );
?>
<section id="cases">
	<?php dynamic_heading(get_the_title(), [
	"class"=> "heading",
	]); ?>
	<div class="center-text-within container-fluid">
		<div class='row normalize-anchor'>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo get_post_custom_values("product_url", get_the_ID())[0] ?>">
				<div class="case col-md-6">
					<?php dynamic_heading( get_the_title(), array(
					"in_front" => "h3",
					"else" => "h2",
					)); ?>
					<?php if ( has_post_thumbnail() ): ?>
					<div class="row full-img-inside feature">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
				</div>
			</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
