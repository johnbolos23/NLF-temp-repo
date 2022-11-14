<style>
    #homepage-banner-<?php echo get_row_index(); ?> .content{
        background: <?php echo get_sub_field('content_background_color') ?>;
    }


</style>


<section class="page-section homepage-banner" id="homepage-banner-<?php echo get_row_index(); ?>">
    <div class="container-home">
        <div class="row">
            <div class="homepage-banner-col">
                <div class="content">
                    <img src="<?php echo get_sub_field('logo_image'); ?>" class="logo-image" />
                    <h1 class="heading"><?php echo get_sub_field('heading'); ?></br>
                    <span class="typing"></span>
                    <script>

                        jQuery(window).ready(function($){
                            var typed3 = new Typed('.typing', {
                            strings: [<?php if( get_sub_field('heading_animation') ) : ?>
                            <?php foreach( get_sub_field('heading_animation') as $block ) : ?>
                            '<?php echo $block['text']; ?>',<?php endforeach; ?><?php endif; ?>],
                            typeSpeed: 100,
                            backSpeed: 60,
                            smartBackspace: true, // this is a default
                            loop: true
                        });
                        });
                        

                    </script>
                    </h1>
                    <div class="wysiwyg-content">
                        <?php echo get_sub_field('paragraph'); ?>
                    </div>

                    <div class="dual-button">
                        <?php if( get_sub_field('button_1') ) : ?>
                                <a href="<?php echo get_sub_field('button_1')['url']; ?>" class="main-button blue-btn"><?php echo get_sub_field('button_1')['title']; ?></a>
                        <?php endif; ?>

                        <?php if( get_sub_field('button_2') ) : ?>
                                
                                <a href="<?php echo get_sub_field('button_2')['url']; ?>" class="main-button"><?php get_template_part('icons/calling'); ?><?php echo get_sub_field('button_2')['title']; ?></a>
                        <?php endif; ?>
                    </div>
                    
                    <img src="<?php echo get_sub_field('reviews_image'); ?>" class="g-reviews-img" />

                    <div class="dots-custom">
                        <?php get_template_part('icons/dots'); ?>
                    </div>
                </div>
                <div class="image-background">
                    <img src="<?php echo get_sub_field('background_image'); ?>" />
                </div>
            </div>
        </div>
    </div>

</section>