<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="campoBusca" class="search-field" placeholder="O que você procura?" value="<?php echo get_search_query(); ?>" name="s" />
	
	<span class="busca ico"><span class="dashicons dashicons-search"><input type="submit" value="" class="buscar"></span></span>
</form>

