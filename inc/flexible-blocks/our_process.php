<section class="page-section our-process" id="our-process-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">

                <div class="subheading"><?php echo get_sub_field('subheading');?></div>
                <h2 class="heading"><?php echo get_sub_field('heading');?></h2>
                <div class="wcu-col">
                    <?php $counter = 1; if( have_rows('steps') ): ?>
						<ul class="wcu-inner">
						<?php while( have_rows('steps') ) : the_row(); ?>
							<li>
                                <div class="wcu-item-inner">
                                    <div class="col-image">
                                        <img src="<?php the_sub_field('image'); ?>" alt="" >

                                    </div>
                                    <div class="col-content">

                                        <span class="counter"><?php echo $counter ?></span>
                                        <h5><?php the_sub_field('title'); ?></h5>
                                        <div class="wysiwyg-content">
                                            <?php echo get_sub_field('paragraph'); ?>
                                        </div>
                                    </div>
                                </div>
							</li>
						<?php $counter++; endwhile; ?>
						</ul>
					<?php endif; ?>

                    <?php $counter = 1; if( have_rows('steps') ): ?>
						<ul class="wcu-inner-dots">
						<?php while( have_rows('steps') ) : the_row(); ?>
							<li>
                                <span></span>
							</li>
						<?php $counter++; endwhile; ?>
						</ul>
					<?php endif; ?>
                </div>
                <div class="button-col">
                    <?php if( get_sub_field('button') ) : ?>
                                    <a href="<?php echo get_sub_field('button')['url']; ?>" class="main-button blue-btn"><?php echo get_sub_field('button')['title']; ?></a>
                    <?php endif; ?>     
                </div>   
            </div>
        </div>
    </div>
</section>