<?php
$query = new WP_Query( [
'post_type'      => 'page',
'posts_per_page' => -1,
'post_parent'    => get_theme_mod( 'casesPageID' ),
'order'          => 'ASC',
'orderby'        => 'menu_order'
] );
if ($query->have_posts()):
?>
<section id="cases">
	<?php dynamic_heading("Cases", [
	"class"=> "heading",
	]); ?>
	<div class="center-text-within container-fluid">
		<?php while ($query->have_posts()) : $query->the_post(); ?>
		<div class="case">
			<?php dynamic_heading( get_the_title(), array(
			"in_front" => "h3",
			"else" => "h2",
			"class" => "title",
			)); ?>
			<?php //content before <!--more--> tag
			$content = get_post_field( 'post_content', get_the_ID() );
			$content_parts = get_extended( $content );
			echo $content_parts['main']; ?>
			<?php if ( has_post_thumbnail() ): ?>
			<div class="row full-img-inside feature">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php endif; ?>
		</div>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
