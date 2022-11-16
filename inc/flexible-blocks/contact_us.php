<section class="page-section contact-us" id="contact-us-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="col-form">
                    <div class="subheading"><?php echo get_field('contact_subheading','option'); ?></div>
                    <h3 class="heading"><?php echo get_field('contact_heading','option'); ?></h3>

                    <?php if( get_field('form', 'option') ) : $formGroup = get_field('form', 'option'); ?>
					<div class="form-wrapper">
						<?php 
							if( $formGroup['contact_form'] ){
								gravity_form( $formGroup['contact_form'] );
							}
						?>
					</div>
					<?php endif; ?>
                </div>
                <div class="col-contact">
                    <div class="col-footer-info">
                        <h4><?php echo get_field('column_title','option'); ?></h4>

                        <?php if( have_rows('contact_information', 'option') ): ?>
                            <ul>
                            <?php while( have_rows('contact_information', 'option') ) : the_row(); ?>
                                <li>
                                    <img src="<?php the_sub_field('icon_image'); ?>" alt="">
                                    <p><?php the_sub_field('text'); ?></p>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="col-footer-social">
					<h4><?php echo get_field('column_social_title','option'); ?></h4>

					<?php if( have_rows('social_icons_dark', 'option') ): ?>
						<ul class="icon-social">
						<?php while( have_rows('social_icons_dark', 'option') ) : the_row(); ?>
							<li>
								<img src="<?php the_sub_field('icon_image'); ?>" alt="" >
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
                </div>
                
            </div>
        </div>
    </div>
</section>