<?php get_header(); ?>
<div class="main-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xl-9">
				<?php if(have_posts()){ ?>
					<div class="row">
						<div class="col-xl-12">
							<h1><?php esc_html_e( 'Search results for  &laquo;', 'cgs-travel-agency' ); ?><?php the_search_query() ?><?php esc_html_e( '&raquo;', 'cgs-travel-agency' ); ?></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<?php while (have_posts()) : the_post(); ?>
								<div <?php post_class(); ?> id="postid-<?php the_ID(); ?>">
									<h2><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<div class="entry clearfix"><?php esc_html(the_excerpt()); ?></div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<?php
							wp_link_pages(
								array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html_e( 'Pages:', 'cgs-travel-agency' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . esc_html_e( 'Page', 'cgs-travel-agency' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								)
							);
							?>
						</div>
					</div>
				<?php } else { ?>
					<h5><?php esc_html_e( 'No results for &laquo;', 'cgs-travel-agency' ); ?><?php the_search_query() ?><?php esc_html_e( '&raquo;', 'cgs-travel-agency' ); ?></h5>
					<?php get_search_form(); ?>
				<?php } ?>
			</div>
			<div class="col-xl-3"><?php get_sidebar(); ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
