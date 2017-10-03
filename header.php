<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<style><?php //{{{ ?>
html *{-webkit-box-sizing:border-box;box-sizing:border-box}body{font-family:'Open Sans', sans-serif}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.person{display:inline-block}.clear{clear:both}#branding::after,#services .card:after{content:' '}#cards h2{font-weight:normal}#cards div[class*="panel-"]{padding-bottom:1em}.case .comment-text{text-align:center}.case .feature{margin-top:1em;max-height:400px;overflow:hidden;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#clients div.clients>div.client{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:250px;height:250px;margin:1em;overflow:hidden}#clients div.clients>div img{z-index:-1;position:absolute;display:block;width:250px;height:auto;-webkit-transition:-webkit-filter .2s ease-out;transition:-webkit-filter .2s ease-out;transition:filter .2s ease-out;transition:filter .2s ease-out, -webkit-filter .2s ease-out}#clients div.clients>div:hover img{-webkit-filter:blur(3px);filter:blur(3px);-webkit-transition:-webkit-filter .2s ease-out;transition:-webkit-filter .2s ease-out;transition:filter .2s ease-out;transition:filter .2s ease-out, -webkit-filter .2s ease-out}#clients div.clients>div p{display:none;margin:0 1em}#clients div.clients>div:hover p{display:block}#contato{margin-bottom:5em;margin-top:5em}#contato .contato-info{margin:1.5em;padding:0}#contato .contato-info dt{float:left;width:10%;margin:0.6em 0;padding:0}#contato .contato-info dd{float:left;width:90%;margin:0.6em 0;padding:0}#copyright{margin:.5em 0;font-size:.5em;text-align:center}.social{padding-top:1.63em}.social i{margin:.2em;width:1em;height:1em;text-align:center}.social [class*="facebook"]:hover{color:#3b5998}.social [class*="twitter"]:hover{color:#009eed}.social [class*="instagram"]:hover{color:#bc2a8d}.social [class*="linkedin"]:hover{color:#0077b5}#branding{background-size:cover;background-position:center;min-height:30vh;padding-top:6em;position:relative}#branding *{z-index:1}#branding::after{position:absolute;top:0;width:100%;height:100%;background-color:rgba(0,0,0,0.6)}#branding .owl-theme{margin-bottom:2em;color:#fff;text-align:center;font-size:1.2em}#branding .owl-theme .owl-stage{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#branding .owl-theme .owl-stage em{display:block;font-size:1.2em;font-weight:bold;font-style:normal}#branding .owl-theme .owl-stage em .quote{position:absolute}#branding .owl-theme .owl-stage .quote{display:inline;font-size:1.3em}#header .slide{width:80%;margin:0 auto;padding:5em 0}#header .btn-group{width:80%;margin:0 auto}#header .btn-group .btn{margin-bottom:1em;width:100%}@media screen and (min-width: 995px){#header #branding{height:100vh;padding-top:8em}#header #branding.small{height:40vh}#header .btn-group{position:absolute;top:47%;left:calc(77% - (19em)/2);width:19em}#header .btn-group .btn{font-size:1.2em}#branding .owl-theme .owl-stage{margin-bottom:2em}#branding .owl-theme .owl-stage .item{padding:0 10em}#branding .owl-theme .owl-stage em{display:inline}#branding .owl-theme .owl-stage em .quote{position:relative}}#menu,#menu .nav-main_menu{width:100%;position:fixed;left:0;margin:0;padding:0 1.5em}#menu,#menu.scrolled{-webkit-transition:color .1s ease, background-color .5s ease-in, -webkit-box-shadow .3s ease;transition:color .1s ease, background-color .5s ease-in, -webkit-box-shadow .3s ease;transition:color .1s ease, background-color .5s ease-in, box-shadow .3s ease;transition:color .1s ease, background-color .5s ease-in, box-shadow .3s ease, -webkit-box-shadow .3s ease}@media screen and (min-width: 600px){.admin-bar #menu{top:46px}}@media screen and (min-width: 782px){.admin-bar #menu{top:32px}}#menu{z-index:2;top:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;height:4em;color:#eee;background-color:transparent;-webkit-box-shadow:none;box-shadow:none}#menu.scrolled{color:#333;background-color:#fff;-webkit-box-shadow:0 0 2px #000;box-shadow:0 0 2px #000}#menu.scrolled>.nav-main_menu{background-color:inherit}#menu a img{max-height:calc(4em - .5em)}#menu #nav-menu-laucher{padding:10px}#menu .nav-main_menu{background-color:rgba(0,0,0,0.8);-webkit-box-shadow:0 0 2px #000;box-shadow:0 0 2px #000;display:none;top:4em;padding-top:1em;padding-bottom:1em}#menu .nav-main_menu ul.menu,#menu .nav-main_menu .menu ul{list-style:none;margin:0;padding:0}#menu .nav-main_menu ul.menu li,#menu .nav-main_menu .menu ul li{width:100%;margin-bottom:1em}#menu .nav-main_menu ul.menu a,#menu .nav-main_menu .menu ul a{display:inline-block;width:100%;color:inherit;text-decoration:none;text-align:center}#menu .nav-main_menu.open{display:block}@media screen and (min-width: 995px){#menu.scrolled>.nav-main_menu{background-color:transparent}#menu #nav-menu-laucher{display:none}#menu .nav-main_menu{position:initial;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-shadow:none;box-shadow:none;background-color:transparent;width:auto;height:100%;padding:0 0;font-weight:900}#menu .nav-main_menu ul.menu,#menu .nav-main_menu .menu ul{margin-right:1em;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#menu .nav-main_menu ul.menu>li,#menu .nav-main_menu .menu ul>li{margin-bottom:0;width:auto;float:left}#menu .nav-main_menu ul.menu a,#menu .nav-main_menu .menu ul a{padding:.5em 1em;-webkit-transition:all .1s ease;transition:all .1s ease;-webkit-transition-property:color, border;transition-property:color, border}#menu .nav-main_menu ul.menu a:hover,#menu .nav-main_menu .menu ul a:hover{border-top:#4b7082 3px solid;border-bottom:#4b7082 3px solid;color:#4b7082}#menu .nav-main_menu .btn{text-transform:uppercase}}#rdstation{width:200px;height:auto}#services .card{position:relative;height:20em;color:#fff}#services .card *{z-index:1}#services .card .center-img-inside{position:absolute;top:0;left:0;z-index:-1;width:100%;height:100%;overflow:hidden}#services .card .center-img-inside img{width:100%;height:auto}#services .card:after{-webkit-box-sizing:border-box;box-sizing:border-box;position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,0.6);opacity:0.75;-webkit-transition:opacity .5s ease-in;transition:opacity .5s ease-in}#services .card:hover:after{opacity:0.93;-webkit-transition:opacity .5s ease-in;transition:opacity .5s ease-in}#services a:nth-child(5n+0)>.card:after{background-color:#D14747}#services a:nth-child(5n+1)>.card:after{background-color:#4B7082}#services a:nth-child(5n+2)>.card:after{background-color:#1AA5BA}#services a:nth-child(5n+3)>.card:after{background-color:#F58634}#services a:nth-child(5n+4)>.card:after{background-color:#1B998B}#services .full-size{width:100%}.btn{display:block;padding:.4em 1em;cursor:pointer;color:#fff;text-decoration:none;text-align:center}.btn.round{border-radius:7px}.btn.btn-orange{background-color:#f58634}.btn.btn-blue{background-color:#1aa5ba}.btn.btn-bluegray{background-color:#4b7082}.center-text-within p,.center-text-within h1,.center-text-within h2,.center-text-within h3,.center-text-within h4,.center-text-within h5,.center-text-within h6,.center-text-within span{display:block;width:auto;margin-left:auto;margin-right:auto;text-align:center}.normalize-anchor a,.normalize-anchor a:visited,.normalize-anchor a:active,.normalize-anchor a:focus{color:#333;text-decoration:none;-webkit-transition:color ease-in .2s;transition:color ease-in .2s}.flex-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.flex-wrapper.col{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column;flex-flow:column}.flex-wrapper.wrap{-ms-flex-flow:wrap;flex-flow:wrap}.flex-wrapper.space-around{-ms-flex-pack:distribute;justify-content:space-around}.flex-wrapper.align-left{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.heading{margin:2em;color:#1aa5ba;font-size:2em}.full-img-inside>img{width:100%;height:auto}.center-img-inside{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.panel-1{background-color:#6e97ab}.panel-1 i.fa{margin-top:1em}.panel-1 p{margin-bottom:0;padding-bottom:1em}.panel-2{background-color:#7ea3b5}.panel-2 i.fa{margin-top:1em}.panel-2 p{margin-bottom:0;padding-bottom:1em}.panel-3{background-color:#8eaebe}.panel-3 i.fa{margin-top:1em}.panel-3 p{margin-bottom:0;padding-bottom:1em}.panel-4{background-color:#9fbac7}.panel-4 i.fa{margin-top:1em}.panel-4 p{margin-bottom:0;padding-bottom:1em}
		</style><?php //}}} ?>
		<style type='text/css'>
#branding{background-image:url('<?php header_image() ?>')}
		</style>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<nav id="menu"><!--{{{-->
				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
					<?php //set-up header logo
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$header_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<?php if ($header_logo[0]!=""): ?>
					<img src="<?php echo $header_logo[0] ?>" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
					<?php endif; ?>
					<div id='site-title' class='<?php if($header_logo[0]!="") { echo "sr-only"; } ?>'>
						<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><?php echo esc_html( get_bloginfo( 'name' ) ); ?><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
					</div>
				</a>
				<a id='nav-menu-laucher' role='button'>
					<i class='fa fa-2x fa-bars' role='menu'></i>
				</a>
				<div class='nav-main_menu'>
					<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?>
					<div class='flex-wrapper col'>
						<a class='btn btn-orange round' role='button' href='<?php get_theme_mod("btnConsultorLink") ?>'><?php //TODO: chage dynamic text ?>Falar com um consultor</a>
					</div>
				</div>
			</nav><!--}}}-->
		</div>
		<div id="container">
<?php $front_or_home = is_front_page() || is_home() || is_front_page() && is_home(); ?>
<header id="header"><!--{{{-->
	<div id="branding" <?php if( !($front_or_home) ){echo 'class="small"';} ?>>
		<?php if ( $front_or_home ) : ?>
		<div class='owl-carousel owl-theme'>
			<div class='item'>
				Somos especializados em <em>MARKETING DIGITAL</em>
			</div>
			<div class='item'>
				Conectamos <em>EMPRESAS</em> e <em>CLIENTES</em> através do <em>INBOUND MARKETING</em>
			</div>
			<div class='item'>
				<em class='quote'>“</em>Conteúdo constrói <em>RELACIONAMENTOS.</em> Relacionamentos são baseados em <em>CONFIANÇA.</em> Confiança gera <em>RECEITA.<em class='quote'>”</em></em> <span class='person'>Andrew Davis</span>
			</div>
		</div>
		<div class="btn-group flex-wrapper col">
			<a class="btn round btn-bluegray" href="<?php get_theme_mod("btnConsultorLink") ?>" role="button">Receba um Orçamento</a>
			<a class="btn round btn-blue" href="<?php get_theme_mod("btnConsultorLink") ?>" role="button">Faça uma Avaliação Gratuita</a>
		</div>
		<?php endif; ?>
	</div>
</header><!--}}}-->
