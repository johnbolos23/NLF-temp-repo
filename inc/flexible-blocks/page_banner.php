<style>
    #page-banner-<?php echo get_row_index(); ?> .content{
        background: <?php echo get_sub_field('content_background_color') ?>;
    }


</style>


<section class="page-section page-banner" id="page-banner-<?php echo get_row_index(); ?>">
    <div class="container-page">
        <div class="row">
            <div class="page-banner-col">
                <div class="content">
                    <h2 class="heading"><?php echo get_sub_field('heading'); ?></br></h2>
                    <div class="dots-custom">
                        <?php get_template_part('icons/page-dots'); ?>
                    </div>
                </div>
                <div class="image-background">
                    <img src="<?php echo get_sub_field('background_image'); ?>" />
                </div>
            </div>
        </div>
    </div>

</section>