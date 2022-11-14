<section class="page-section blogs" id="blogs-<?php echo get_row_index(); ?>">
    <div class="container">
        <div class="row">
            <div class="blogs-list-upper-custom">
				<div class="search-container">
				    <form action="/" method="GET">
				      <input type="text" placeholder="Search for keywords..." name="search">
				      <button type="submit"><i class="fa fa-search"></i></button>
				    </form>
				</div>
				<aside class="ja-filter-dropdwn-form" >

					<form class="js-filter-form">
						<select name="categories">


						<?php
							$exclude = ['home-list'];

							$categories = get_terms( array(
							  'taxonomy' => 'category',
							  'hide_empty' => true,
								'orderby' => 'title',
							) );

							$categories = array_filter( $categories, function( $category ) use ( $exclude ) {
							return in_array( $category->slug, $exclude ) ? false : true;
							});

							$count_roles = count( $categories );
							?>
							<option class="js-filter-cat-text" value="" disabled selected>Select Category</option>
							<?PHP
							foreach ($categories as $cat):?>
								<option class="js-filter-item" value="<?= $cat->term_id; ?>"><?= $cat->name;?></option>
							<?php endforeach;?>
						</select>
					</form>
				</aside>	

			</div>

            <div class="blogs-col-b">
				<div class="js-filter">
                    <div class="blogs-col-list">

                    <?php
                        echo do_shortcode( '[blog_list_ft]' );	
                    ?>
                    <?php
                        echo do_shortcode( '[blog_list]' );	
                    ?>
                    </div>	
                </div>	
            </div>
        </div>
    </div>

</section>


