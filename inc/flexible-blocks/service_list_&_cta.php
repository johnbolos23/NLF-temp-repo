<section class="page-section service-list-cta" id="service-list-cta-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="content-column">
                    <h3 class="heading"><?php echo get_sub_field('heading');?></h3>
                    <div class="wysiwyg-content">
                        <?php echo get_sub_field('paragraph'); ?>
                    </div>
                </div>

                <div class="cta-col">
                    <?php if( have_rows('list') ): ?>
						<ul class="cta-inner">
						<?php while( have_rows('list') ) : the_row(); ?>
							<li>
                                <div class="cta-item-inner">
                                    <img src="<?php echo get_sub_field('background_image'); ?>" alt="" class="bg-image">
                                    <img src="<?php echo get_sub_field('icon_image'); ?>" alt="" class="ic-image">
                                    <div class="content-col">
                                        <h5><?php echo get_sub_field('title'); ?></h5>
                                        <span><?php if( get_sub_field('link') ) : ?>
                                        <a href="<?php echo get_sub_field('link')['url']; ?>" class="link"><?php get_template_part('icons/arrow-right'); ?><?php echo get_sub_field('link')['title'];?></a>
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