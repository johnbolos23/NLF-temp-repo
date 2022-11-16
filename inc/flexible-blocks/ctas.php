<section class="page-section ctas" id="ctas-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="cta-col">
                    <?php if( have_rows('list','option') ): ?>
						<ul class="cta-inner">
						<?php while( have_rows('list','option') ) : the_row(); ?>
							<li>
                                <div class="cta-item-inner">
                                    <img src="<?php echo get_sub_field('background_image','option'); ?>" alt="" class="bg-image">
                                    <img src="<?php echo get_sub_field('icon_image','option'); ?>" alt="" class="ic-image">
                                    <div class="content-col">
                                        <h5><?php echo get_sub_field('title','option'); ?></h5>
                                        <span><?php if( get_sub_field('link','option') ) : ?>
                                        <a href="<?php echo get_sub_field('link','option')['url']; ?>" class="link"><?php get_template_part('icons/arrow-right'); ?><?php echo get_sub_field('link','option')['title'];?></a>
                                        <?php endif; ?>
                                        </span>
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