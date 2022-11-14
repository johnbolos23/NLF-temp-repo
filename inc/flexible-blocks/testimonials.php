<section class="page-section testimonials" id="testimonials-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="upper-column">
            <h2 class="heading"><?php echo get_sub_field('heading'); ?></h2>
            </div>
            <div class="testimonial-col">
                <?php
                     echo do_shortcode( '[reviews_slider]' );	
                ?>
            </div>
        </div>
    </div>

</section>


