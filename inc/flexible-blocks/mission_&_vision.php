
<style>
    #mission-vision-<?php echo get_row_index(); ?> {
        background: <?php echo get_sub_field('background_color') ?>;
    }


</style>



<section class="page-section mission-vision" id="mission-vision-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">

                <h2 class="heading"><?php echo get_sub_field('heading');?></h2>

                <div class="list-column">
                    <?php if( have_rows('list') ): ?>
						<ul class="mission-vision-inner">
						<?php while( have_rows('list') ) : the_row(); ?>
							<li>
                                <div class="mission-vision-item-inner">
                                        <div class="wysiwyg-content">
                                            <?php echo get_sub_field('description'); ?>
                                        </div>
                                            
                                        <span><?php if( get_sub_field('phone_number') ) : ?>
                                    <a href="<?php echo get_sub_field('phone_number')['url']; ?>" class="link"><?php get_template_part('icons/calling'); ?><?php echo get_sub_field('phone_number')['title'];?></a>
                                    <?php endif; ?>
                                        </span>
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