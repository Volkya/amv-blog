<?php get_header(); ?>
	<div class="main-content-wrapper home-content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h5><?php esc_html_e( "Oops! That page couldn't be found", 'cgs-travel-agency' ); ?></h5>
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'cgs-travel-agency' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>