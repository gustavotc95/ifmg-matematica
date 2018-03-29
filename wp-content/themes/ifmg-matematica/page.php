<?php get_header();?>
	<div class="limpa"></div>

	<div id="single">
		<div class="wrapper">
			<div id="single_content">

				<section id="sidebar">
					<button class="sidebar-toggle corFundo"><span class="dashicons dashicons-arrow-left-alt2"></span></button>
					<ul>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
						<?php endif; ?>
					</ul>
				</section>

				<section id="single_post">
					<?php
					$home = get_home_url()."/";
					$link = get_permalink();
					if ( $home === $link) {
						//$date=$inst_options['wpinst_modulos'];
						//var_dump($date);
						//echo $date->{0};
						carregaModulos('Imagemdest-2-4');

					}
					?>
					<div class="content_header corFundo"><?php the_title() ?></div>
					<article id="single_post_inside">
							<p>
								<?php the_content(); ?>
							</p>

							<div class="limpa"></div>
					</article>
				</section>

				<div class="limpa"></div>
			</div>
		</div>
	</div>

<?php get_footer();?>