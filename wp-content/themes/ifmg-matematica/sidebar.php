<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<?php dynamic_sidebar( 'sidebar-1' ); ?>

<div class="widget acessoRapido">
	<h2 class="widget-title"> Acesso Rápido </h2>
	<ul>
		<?php
			$item = get_field('acesso_rapido_item', 40)['item'];
			$campo = get_field('acesso_rapido_item', 40);

			foreach($item as $inforacoes):
			//print_r($inforacoes);
		?>

		<?php if($inforacoes['imagem_em_duas_colunas'] == 1){?>
			<li class="item d-lg-block">					
				<a href="<?php echo $inforacoes['url'] ?>" target="_blank">
					<img src="<?php echo  $inforacoes['imagem']; ?>" alt="">
				</a>
			</li>
		<?php } else { ?>
			<li class="item d-lg-inline-block half">					
				<a href="<?php echo $inforacoes['url'] ?>" target="_blank">
					<img src="<?php echo  $inforacoes['imagem']; ?>" alt="">
				</a>
			</li>
		<?php } ?>

		<?php endforeach ?>
	</ul>
</div>

