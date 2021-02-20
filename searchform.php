<?php
/**
 * Search Form Template.
 *
 * @package Smellycat
 * @author iamRahul1973 rahulkr1973@gmail.com
 */

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
</form>
