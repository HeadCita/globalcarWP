<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<form class="searchform" action="<?php echo home_url( '/', is_ssl() ? 'https' : 'http' ); ?>" method="get">
	<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr(cloudfw_translate( 'search' )); ?>" />
	<button type="submit" class="btn btn-primary btn-small"><?php echo esc_attr(cloudfw_translate( 'search' )); ?></button>
</form>