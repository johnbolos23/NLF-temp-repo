<section class="page-section about-us-2" id="about-us-2-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="image-colum">
                    <img src="<?php echo get_sub_field('image'); ?>" />
                    <div class="dots-custom">
                        <?php get_template_part('icons/group-image-dots-2'); ?>
                    </div>
                </div>
                <div class="content-column">
                    <div class="subheading"><?php echo get_sub_field('subheading');?></div>
                    <h2 class="heading"><?php echo get_sub_field('heading');?></h2>
                    <div class="wysiwyg-content">
                        <?php echo get_sub_field('paragraph'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>