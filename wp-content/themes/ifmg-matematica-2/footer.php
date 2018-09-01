	<div class="limpa"></div>
		<footer>

<?php
	global $inst_options;

	if ( ! is_home() ) {

		global $modulos_footer;

		if ( sizeof( $modulos_footer ) )
			carregaModulos( implode( ',', $modulos_footer ) );
	}
?>

			<div class="wrapper footer">
				<div id="foot_content">
							<?php if ( ( ! function_exists('dynamic_sidebar') || ! dynamic_sidebar('links2') ) && current_user_can( 'edit_posts' ) ) : ?>
								<p>
									<br>
									Personalize o conteúdo deste bloco em <b>Aparência - Widgets</b>.
								</p>
								<em>(Esta mensagem não é visível aos visitantes do site)</em>
							<?php endif; ?>
					<div id="foot_content_end" class="limpa"></div>
				</div>

<div class="footer1">
	<div class="container">
		<div class="row img-gov">
			<div class="row">
				<div class="col-xs-6"> 
					<a href="http://www.acessoainformacao.gov.br"> 
					<img class="img-responsive pull-left" src="https://formiga.ifmg.edu.br/images/site/acesso-a-informacao2.png" alt="Selo Acesso a Informação"> 
					<span class="sr-only">
						Link para o portal de Acesso à informação
					</span> 
					</a> 
				</div>
				<div class="col-xs-6"> 
					<a href="http://www.brasil.gov.br"> 
					<img class="img-responsive pull-right" src="https://formiga.ifmg.edu.br/images/site/brasil2.png" alt="Selo Governo Federal"> 
					<span class="sr-only">
						Link para o portal do governno federal
					</span> 
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

				<div id="creditos" class="corBorda">
					<div id="creditos_content">
						<div id="midiassociais">
							<ul>
								<li class="rss midiaicon" title="Feeds RSS">
									<a href="<?php bloginfo('rss2_url'); ?>">
										<span class="dashicons dashicons-rss corTexto"></span>
									</a>
								</li>
								<?php if ($inst_options['wpinst_gplus']): ?>
									<li class="gplus midiaicon" title="Google+">
										<a href="<?php echo $inst_options['wpinst_gplus']; ?>" target="_blank">
											<span class="dashicons dashicons-googleplus corTexto"></span>
										</a>
									</li>
								<?php endif; ?>

								<?php if ($inst_options['wpinst_facebook']): ?>
									<li class="facebook midiaicon" title="Facebook">
										<a href="<?php echo $inst_options['wpinst_facebook']; ?>" target="_blank">
											<span class="dashicons dashicons-facebook-alt corTexto"></span>
										</a>
									</li>
								<?php endif; ?>

								<?php if ($inst_options['wpinst_twitter']): ?>
									<li class="twitter midiaicon" title="Twitter">
										<a href="<?php echo $inst_options['wpinst_twitter']; ?>" target="_blank">
											<span class="dashicons dashicons-twitter corTexto"></span>
										</a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
						<div id="copyright">&copy;<?php echo date("Y");?> <?php bloginfo('name'); ?>.</div>
						<div id="wp">Criado com <a href="http://wordpress.org" target="_blank">WordPress</a>. </div>
					</div>
				</div>
			</div>
		</footer>
		<div class="limpa"></div>
	</div>

<?php wp_footer(); ?>

</body>
</html>