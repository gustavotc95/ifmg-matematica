<?php /*Template name: Page Conteudo*/ ?>

<?php get_header(); ?>


<div class="container content conteudo-principal">
    <div class="row">
        <div class="col-md-2 col-sm-3 content-left">
            <?php get_sidebar(); ?>
        </div>

        <div class="col-md-10 col-sm-9 content-right">
            <?php
                if( function_exists( 'lana_breadcrumb' ) ) {
                    echo lana_breadcrumb();
                }
            ?>
            
            <div class="wrap">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/page/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .wrap -->

            </div>
        </div>
    </div>
</div>




<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<?php get_footer(); ?>