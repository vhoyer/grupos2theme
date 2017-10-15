<div class="clear"></div>
<div id="contato" class="container">
	<div class="row">
		<div class="col-md-9 col-sm-10 col-xs-12">
			<dl class="contato-info">
				<dt>
				<i class="fa fa-phone"></i>
				<span class="sr-only">Telefone</span>
				</dt>

				<dd>
				<span>+55 12 3019 0075</span>
				</dd>
				<?php /////////////////// ?>
				<dt>
				<i class="fa fa-map-marker"></i>
				<span class="sr-only">Endereço</span>
				</dt>

				<dd>
				<span>São José dos Campos - SP</span>
				</dd>
				<?php /////////////////// ?>
				<dt>
				<i class="fa fa-envelope"></i>
				<span class="sr-only">Email</span>
				</dt>

				<dd>
				<span>contato@grupos2mkt.com</span>
				</dd>
				<?php /////////////////// ?>
				<dt>
				<i class="fa fa-facebook"></i>
				<span class="sr-only">facebook page</span>
				</dt>

				<dd>
				<span>
					<a href="<?php echo esc_url( get_theme_mod("socialFacebookLink") ) ?>" target="_blank">
						<?php echo get_theme_mod("socialFacebookPage") ?>
					</a>
				</span>
				</dd>
				<?php /////////////////// ?>
				<dt>
				<i class="fa fa-linkedin"></i>
				<span class="sr-only">Linkedin</span>
				</dt>

				<dd>
				<span>
					<a href="<?php echo esc_url( get_theme_mod("socialLinkedinLink") ) ?>" target="_blank">
						<?php echo get_theme_mod("socialLinkedinPage") ?>
					</a>
				</span>
				</dd>
			</dl>
		</div>
	</div>
</div>
</div>
<footer id="footer" class="clear">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'grupos2theme' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
</div>
</footer>
<?php wp_footer(); ?>
<script type='text/javascript'>
var id=function(e){return document.getElementById(e)}
document.addEventListener("DOMContentLoaded",function(){function e(){var e=window.pageYOffset,n=document.getElementById("menu")
e<=0?n.classList.remove("scrolled"):n.classList.add("scrolled")}window.onscroll=e}),$(document).ready(function(){$(".owl-carousel").owlCarousel({autoplay:!0,autoplayHoverPause:!0,autoplayTimeout:5e3,loop:!0,smartSpeed:750,items:1})}),$("#nav-menu-laucher").click(function(){var e=id("nav-menu-laucher").children[0]
$(".nav-main_menu")[0].classList.toggle("open"),e.classList.toggle("fa-bars"),e.classList.toggle("fa-times")})
</script>
</body>
</html>
