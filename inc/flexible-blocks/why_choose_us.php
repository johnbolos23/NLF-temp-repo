<section class="page-section why-choose-us" id="why-choose-us-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">

                <div class="subheading"><?php echo get_sub_field('subheading');?></div>
                <h2 class="heading"><?php echo get_sub_field('heading');?></h2>
                <div class="wcu-col">
                    <?php if( have_rows('list_text_image') ): ?>
						<ul class="wcu-inner">
						<?php while( have_rows('list_text_image') ) : the_row(); ?>
							<li>
                                <div class="wcu-item-inner">
                                    <div class="col-image">
                                        <img src="<?php the_sub_field('image'); ?>" alt="" >

                                    </div>
                                    <div class="col-content">
                                        <img src="<?php the_sub_field('icon_image'); ?>" alt="" >
                                        <h5><?php the_sub_field('title'); ?></h5>
                                        <div class="wysiwyg-content">
                                            <?php echo get_sub_field('paragraph'); ?>
                                        </div>
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