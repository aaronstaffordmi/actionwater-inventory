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
<div class="container">

	<!-- REFINE SECTION -->
	<div class="app-container">
		<div class="app-flex">
			<div class="refine">
				<div class="dropdown">
					<h5 onclick="myFunction()">Location</h5>
					<ul id="myDIV">
					<li>
						<input type="checkbox" value="hudsonville" id="hudsonville">
						<label for="hudsonville">Hudsonville</label>
					</li>
					<li>
						<input type="checkbox" value="fenton" id="fenton">
						<label for="fenton">Fenton</label>
					</li>
					</ul>
				</div>
			</div>


	<!-- CARD SECTION -->

			<div class="card-outline">

				<div class="boat-image">
				</div>

				<div class="boat-data">
					<div class="left-column">
						<div>
							<h3>2023 NXT24</h3>
							<div class="location">
								<div class="location-icon"></div>
								<h6>Hudsonville <span class="stock-num">#FH0348</span></h6>
							</div>
						</div>
						<div class="stats">
							<p>Length</p>
						
						</div>
					</div>
					<div class="right-column">
						<div class="payment">
						<div class="call">
								<i style="font-size: 16px; line-height: 16px; height: 16px; width: 16px; color: #222222; margin: 5px 4px 0px 0px;" class="fa fa-phone"></i>
								<h4>Call for Price</h4>
							</div>
						
					
						</div>
						<div class="boat-ctas">
							<div class="call">
								<h3>$499<span class="month">/month*</span></h3>
									
								
							</div>
							<p class="terms">* +tax. 240months. 4.99% APR. $12,000 down payment.</p>
							<a href="" id="contact-button">View Details</a>
				
							<a href="" id="details-button">View Details</a>
						
							
						
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>




<!-- Wordpress end of page -->
</div>
	<?php nectar_hook_before_container_wrap_close(); ?>
</div>




<?php get_footer(); ?>
