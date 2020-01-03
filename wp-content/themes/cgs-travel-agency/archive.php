<?php get_header(); ?>
<div class="main-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xl-9">
				<?php if(have_posts()){ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="row">
							<div class="col-lg-12 matchheight2">
								<div class="sing_post">
                                    <?php if(has_post_thumbnail()){ ?>
									<div class="post_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-thumb'); ?></a></div>
                                    <?php } ?>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
									<div class="cgs-readmore"><a href="<?php the_permalink(); ?>">Read More</a></div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
                    <div class="row">
                        <div class="col-xl-12">
	                        <?php
	                        the_posts_pagination( array(
		                        'mid_size' => 2,
		                        'prev_text' => esc_html__( 'Back', 'cgs-travel-agency' ),
		                        'next_text' => esc_html__( 'Next', 'cgs-travel-agency' ),
		                        'screen_reader_text' => esc_html__( 'Posts', 'cgs-travel-agency' )
	                        ) );
	                        ?>
                        </div>
                    </div>
				<?php } ?>
			</div>
			<div class="col-xl-3"><?php get_sidebar(); ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
