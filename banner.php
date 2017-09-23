<?php $front_or_home = is_front_page() || is_home() || is_front_page() && is_home(); ?>
<header id="header" role="banner">
	<section id="branding" <?php if( !($front_or_home) ){echo 'class="small"';} ?>>
		<?php if ( $front_or_home ) : ?>
		<div class='owl-carousel owl-theme'>
			<div class='item'>
				Somos especializados em <em>MARKETING DIGITAL</em>
			</div>
			<div class='item'>
				Conectamos <em>EMPRESAR</em> e <em>CLIENTES</em> através do <em>INBOUND MARKETING</em>
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
	</section>
</header>
