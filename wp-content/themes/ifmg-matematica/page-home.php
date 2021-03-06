<?php /*Template name: Home*/ ?>

<?php get_header(); ?>


<div class="container content conteudo-principal">
    <div class="row">
        <div class="col-md-2 col-sm-3 content-left">
            <?php get_sidebar(); ?>
        </div>

        <div class="col-md-10 col-sm-9 content-right">
            <div class="banner-home">
                <a href="<?php echo get_field('imagem_principal_home')['url'] ?>" target="_blank">
                    <img src="<?php echo get_field('imagem_principal_home')['imagem']; ?>" alt="">
                </a>
                
            </div>
            <div class="panel-heading">
                <h2 class="panel-title">Apresentação do Curso</h2>
            </div>
            <div class="textoHome">
                <?php echo get_field('texto_home'); ?>
            </div>

            <div>

            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>