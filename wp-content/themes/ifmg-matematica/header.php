<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

<script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>


<header class="green">
	<div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;"> 
		<ul id="menu-barra-temp" style="list-style:none;">
			<li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li> 
			<li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
		</ul>
	</div>

	<div id="menu_topo" class="acessibilidade">
		<div class="wrapper header">
			<div class="hor_center" id="menu_topo_list">
				<?php if ( has_nav_menu( 'menu-topo' ) ): ?>
				<button class="topo-toggle"><span class="dashicons dashicons-menu"></span> &nbsp;MENU</button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-topo', 'depth' => 1, 'menu_id' => 'menu-menu-topo', 'menu_class' => 'menu corFundo', 'container' => '') ); ?>
				<?php endif; ?>
			</div>

			<div class="hor_center" id="menu_topo_acess">
				<ul>
					<li class="acess"><a class="fonte_dim" href="#" title="Diminuir fonte">A-</a><a class="fonte_nor" href="#" title="Fonte normal">A</a><a class="fonte_aum" href="#" title="Aumentar fonte">A+</a></li>
					<li><a id="contraste" href="#">CONTRASTE</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="wrapper header">
		<div id="header_content">
			<div id="titulo" class="titulosite">
				<a href="<?php bloginfo('url');?>">
					<h1 id="nomesite"><?php bloginfo('name'); ?></h1>
					<span class="descricaosite">
						<?php bloginfo('description'); ?>
					</span>
				</a>
			</div>

			<div id="escudo">
				<?php
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}
				?>
			</div>

			<div id="busca">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>

	<div class="wrapper header menu">
		<div id="menu_principal">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-principal', 'container' => '') ); ?>
		</div>	
	</div>	

</header>
