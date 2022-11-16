<section class="page-section financing-service" id="financing-service-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <h2 class="heading"><?php echo get_sub_field('heading');?></h2>

                <div class="service-col">
                    <?php if( have_rows('services') ): ?>
						<ul class="service-inner">
						<?php while( have_rows('services') ) : the_row(); ?>
							<li>
                                <div class="service-item-inner">
                                    <div class="col-display">
                                        <img src="<?php the_sub_field('icon_image'); ?>" alt="" >
                                        <h5><?php the_sub_field('title'); ?></h5>
                                        <div class="wysiwyg-content">
                                            <?php echo get_sub_field('paragraph'); ?>
                                        </div>
                                    </div>
                                    <div class="col-hover">
                                        <h4><?php the_sub_field('text_hover'); ?></h4>
                                        <div class="wysiwyg-content">
                                            <?php echo get_sub_field('info_text'); ?>
                                        </div>
                                    </div>
                                    <a href="" class="contact-link"><?php get_template_part('icons/circle-right'); ?></a>
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