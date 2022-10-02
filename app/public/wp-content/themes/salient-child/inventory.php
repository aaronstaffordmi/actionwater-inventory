<?php
/*
 * Template Name: Inventory
 * description: AWS Inventory 2022
  Page template without sidebar
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
nectar_page_header( $post->ID );
$nectar_fp_options = nectar_get_full_page_options();

?>
<div class="container-wrap">
	<div class="<?php if ( $nectar_fp_options['page_full_screen_rows'] !== 'on' ) { echo 'container'; } ?> main-content" role="main">
		<div class="row">
			<?php

			nectar_hook_before_content();

			if ( have_posts() ) :
				while ( have_posts() ) :

					the_post();
					the_content();

				endwhile;
			endif;

			nectar_hook_after_content();

			?>
		</div>
	</div>
	<?php nectar_hook_before_container_wrap_close(); ?>
	<!-- Begin inventory template html -->
	<div class="stafford-container">
		<H2>Hello World</H2>
	</div>

</div>
<?php get_footer(); ?>
