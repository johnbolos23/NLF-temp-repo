<section class="page-section service-detail" id="service-detail-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="image-colum">
                    <img src="<?php echo get_sub_field('image'); ?>" />
                </div>
                <div class="content-column">
                    <div class="subheading"><?php echo get_sub_field('subheading');?></div>
                    <h2 class="heading"><?php echo get_sub_field('heading');?></h2>
                    <div class="wysiwyg-content">
                        <?php echo get_sub_field('paragraph'); ?>
                    </div>
                    <div class="button-col">
                    <?php if( get_sub_field('button_1') ) : ?>
                    <a href="<?php echo get_sub_field('button_1')['url']; ?>" class="main-button dark-blue-button"><?php echo get_sub_field('button_1')['title'];?></a>
                    <?php endif; ?>
                    <?php if( get_sub_field('button_2') ) : ?>
                    <a href="<?php echo get_sub_field('button_2')['url']; ?>" class="main-button"><?php get_template_part('icons/calling'); ?><?php echo get_sub_field('button_2')['title'];?></a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>