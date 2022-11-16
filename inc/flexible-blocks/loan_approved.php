
<style>
    #loan-approved-<?php echo get_row_index(); ?> .row-inner{
        background: <?php echo get_sub_field('background_color') ?>;
    }
    #loan-approved-<?php echo get_row_index(); ?> .row-inner .heading{
            color:<?php echo get_sub_field('text_color') ?>;
    }

    #loan-approved-<?php echo get_row_index(); ?> .row-inner .wysiwyg-content{
            color:<?php echo get_sub_field('text_color') ?>;
    }
</style>


<section class="page-section loan-approved" id="loan-approved-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <img src="<?php echo get_sub_field('image');?>" alt="">
                <div class="content-col">
                    <h4 class="heading"><?php echo get_sub_field('heading');?></h4>
                    <div class="wysiwyg-content">
                        <?php echo get_sub_field('paragraph'); ?>
                    </div>
                </div>
                <div class="dots-custom">
                    <?php get_template_part('icons/blue-dots'); ?>
                </div>

            </div>
        </div>
    </div>
</section>