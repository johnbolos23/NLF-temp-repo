<section class="page-section page-blog-list" id="page-blog-list-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="upper-inner-row">
                <h2 class="heading"><?php echo get_sub_field('heading'); ?></h2>
                <?php if( get_sub_field('button') ) : ?>
                <a href="<?php echo get_sub_field('button')['url']; ?>" class="main-button"><?php echo get_sub_field('button')['title'];?></a>
                <?php endif; ?>
            </div>

            <div class="blogs-col-list">
					<?php
                        echo do_shortcode( '[page_blog_list]' );	
                    ?>
			</div>
        </div>
    </div>
</section>