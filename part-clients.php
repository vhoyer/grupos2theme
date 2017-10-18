<?php
$query = new WP_Query( [
'post_type'      => 'page',
'posts_per_page' => -1,
'post_parent'    => get_theme_mod( 'clientsPageID' ),
'order'          => 'ASC',
'orderby'        => 'menu_order'
] );
if ($query->have_posts()):
?>
<section id='clients'>
	<?php dynamic_heading("Clientes", [
	"class"=>"heading"
	]); ?>
	<div class='container-fluid flex-wrapper wrap space-around clients'>
		<div id="clientsContainer" class='row'>
			<?php while ($query->have_posts()) : $query->the_post(); if ( has_post_thumbnail() ): ?>
			<div class='client col-lg-3 col-md-3 col-sm-6 col-xs-12'>
				<div class='img-inside'>
					<?php
					set_post_thumbnail_size( 180, 180);
					the_post_thumbnail(); ?>
				</div>
				<div class='text-container'>
				<?php //content before <!--more--> tag
				$content = get_post_field( 'post_content', get_the_ID() );
				$content_parts = get_extended( $content );
				echo $content_parts['main']; ?>
				</div>
			</div>
			<?php endif; endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
