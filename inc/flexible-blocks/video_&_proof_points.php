<section class="page-section video-proof-points" id="proof-points-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="col-12">
                    <div class="information-with-video-video pos-relative">
                        <img src="<?php echo get_sub_field('video')['thumbnail_image']; ?>" />
                        <div class="video-popup-trigger">
                            <?php get_template_part('icons/play-icon'); ?>
                        </div>
                    </div>
                </div>

                <div class="proof-points">
                    <?php if( have_rows('proof_points') ): ?>
						<ul class="proof-points-inner">
						<?php while( have_rows('proof_points') ) : the_row(); ?>
							<li>
                                <div class="proof-points-item-inner">

                                    <span><?php echo get_sub_field('number'); ?></span>
                                        <div class="wysiwyg-content">
                                            <?php echo get_sub_field('title'); ?>
                                        </div>
                            
                                </div>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>