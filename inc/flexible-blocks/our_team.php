
<style>
    #out-team-<?php echo get_row_index(); ?> {
        background: <?php echo get_sub_field('background_color') ?>;
    }


</style>



<section class="page-section out-team" id="out-team-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="row-inner">
                <div class="content-column">
                    <div class="subheading"><?php echo get_sub_field('subheading');?></div>
                    <h4 class="heading"><?php echo get_sub_field('heading');?></h4>
                    <div class="wysiwyg-content">
                        <?php echo get_sub_field('paragraph'); ?>
                    </div>
                </div>

                <div class="team-colum">
                    <?php
                        echo do_shortcode( '[team_list]' );	
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>