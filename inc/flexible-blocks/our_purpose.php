
<style>
    #our-purpose-<?php echo get_row_index(); ?> {
        background: <?php echo get_sub_field('background_color') ?>;
    }


</style>


<section class="page-section our-purpose" id="our-purpose-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
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