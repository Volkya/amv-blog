<?php get_header(); ?>
<div class="main-content-wrapper">
	<div class="container">
		<div class="row">
            <div class="col-xl-9">
				<?php if(have_posts()){ ?>
					<div class="row">
						<?php while(have_posts()) : the_post(); ?>
							<?php get_template_part( 'content' ); ?>
						<?php endwhile; ?>
					</div>
                    <div class="row">
                        <div class="col-xl-12">
                            <?php if ( comments_open() || '0' != get_comments_number() ) : ?>
                                <?php comments_template( '', true ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
				<?php } ?>
			</div>
            <div class="col-xl-3"><?php get_sidebar(); ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
