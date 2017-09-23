<div class="clear"></div>
<section id="contato" class="container">
	<div class="col-md-9">
		<dl class="contato-info">
			<dt>
				<i class="fa fa-phone"></i>
			</dt>
			<dd>
				<span>+55 12 3019 0075</span>
			</dd>
			<dt>
				<i class="fa fa-map-marker"></i>
			</dt>
			<dd>
				<span>São José dos Campos - SP</span>
			</dd>
			<dt>
				<i class="fa fa-envelope"></i>
			</dt>
			<dd>
				<span>contato@grpos2.net</span>
			</dd>
		</ul>
	</div>
	<div id="social" class="col-md-3 flex-wrapper align-left social normalize-anchor">
		<a href="<?php get_theme_mod("socialFacebookLink") ?>" target="_blank"><i class="fa fa-2x fa-facebook"></i></a>
	</div>
</section>
</div>
<footer id="footer" class="clear" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'grupos2theme' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
</div>
</footer>
</div>
<script src='<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery-3.2.1.slim.min.js'></script>
<script src='<?php bloginfo('stylesheet_directory'); ?>/scripts/owl.carousel.min.js'></script>
<script type='text/javascript'>
var id=function(e){return document.getElementById(e)}
document.addEventListener("DOMContentLoaded",function(){window.onscroll=function(){var e=window.pageYOffset,n=document.getElementById("menu")
e<=0?n.classList.remove("scrolled"):n.classList.add("scrolled")}}),$(document).ready(function(){$(".owl-carousel").owlCarousel({autoplay:!0,autoplayHoverPause:!0,autoplayTimeout:5e3,loop:!0,smartSpeed:750,items:1})}),$("#nav-menu-laucher").click(function(){var e=id("nav-menu-laucher").children[0]
$(".nav-main_menu")[0].classList.toggle("open"),e.classList.toggle("fa-bars"),e.classList.toggle("fa-times")})
</script>
<?php wp_footer(); ?>
</body>
</html>
