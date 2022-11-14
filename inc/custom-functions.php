<?php




function blog_list(){
  
    $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => '5',
                    'publish_status' => 'published',
                    'order' => 'DESC',
                 );

    if( isset($_GET['search']) ){
        $args['s'] = $_GET['search'];
    }

    $post_counter = 0;

    ob_start();

    get_template_part('icons/arrow-right');

    $icon = ob_get_clean();
    
    $query = new WP_Query($args);
    $result = '';
    if($query->have_posts()) :
        
        
        while($query->have_posts()) :
  
            $query->the_post() ;
                      
        $result .= '<div class="blogs-item">';
        $result .= '<div class="blogs-inner">';
        $result .= '<div class="blogs-poster-first"  style="display:none;">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="blogs-content-inner">';

        $result .= '<div class="blogs-date">'.get_the_date().'</div>';
        $result .= '<div class="blogs-name"><h4><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4></div>';
        $result .= '<div class="blogs-link-first" style="display:none;"><a href="' . get_permalink() . '">Read More</a></div>';
        $result .= '</div>';
        $result .= '<div class="blogs-poster">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="blogs-link"><a href="' . get_permalink() . '">'. $icon .'Read More</a></div>';
        $result .= '</div>';
        $result .= '</div>';
        $post_counter++;
        endwhile;
  
        wp_reset_postdata();

        if($post_counter > 4) {
            $result .= '<div class="mainbutton-col"><div class="main-button load_more_cont"><a href="#" data-pagenum="2">Load More</a></div></div>';
        }
    
        



    endif;    
  
    return $result;            
}

add_shortcode( 'blog_list', 'blog_list' ); 


function blog_list_ft(){
  
    $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => '1',
                    'publish_status' => 'published',
                    'order' => 'DESC',
                    'post__not_in'   => array( get_the_ID() ),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'featured'
                        )
                     )
                 );

    if( isset($_GET['search']) ){
        $args['s'] = $_GET['search'];
    }

    $post_counter = 0;

    ob_start();

    get_template_part('icons/arrow-right');

    $icon = ob_get_clean();
    
    $query = new WP_Query($args);
    $result = '';
    if($query->have_posts()) :
        
        
        while($query->have_posts()) :
  
            $query->the_post() ;
                      
        $result .= '<div class="blogs-item featured-item">';
        $result .= '<div class="blogs-inner">';
        $result .= '<div class="blogs-poster-first">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="blogs-content-inner">';
        $result .= '<div class="blogs-meta">';
        $categories = get_the_terms( get_the_ID(), 'category' );
                if( $categories ){ 
                    foreach( $categories as $category ) {
                        $result .= '<a>' . esc_html( $category->name ) . '</a>' . '';
                        }
                }
        $result .='<span>•</span>';
        $result .= '<div class="blogs-date">'.get_the_date().'</div>';
        $result .='</div>';
        $result .= '<div class="blogs-name"><h4><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4></div>';
        $result .= '<div class="blogs-content"><p>'. wp_trim_words( get_the_content(), 35, '...' ). '</p></div>';
        $result .= '<div class="blogs-link-first"><a href="' . get_permalink() . '">'. $icon .'Read More</a></div>';
        $result .= '</div>';

        $result .= '</div>';
        $result .= '</div>';
        $post_counter++;
        endwhile;
  
        wp_reset_postdata();


    
        



    endif;    
  
    return $result;            
}

add_shortcode( 'blog_list_ft', 'blog_list_ft' ); 







function related_blog_list(){
  
    $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => '5',
                    'publish_status' => 'published',
                    'post__not_in'   => array( get_the_ID() ),
                    'order' => 'DESC',
                 );

    if( isset($_GET['search']) ){
        $args['s'] = $_GET['search'];
    }

    $post_counter = 0;

    ob_start();

    get_template_part('icons/arrow-right');

    $icon = ob_get_clean();
    
    $query = new WP_Query($args);
    $result = '';
    if($query->have_posts()) :
        
        
        while($query->have_posts()) :
  
            $query->the_post() ;
                      
        $result .= '<div class="blogs-item">';
        $result .= '<div class="blogs-inner">';
        $result .= '<div class="blogs-poster-first"  style="display:none;">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="blogs-content-inner">';

        $result .= '<div class="blogs-date">'.get_the_date().'</div>';
        $result .= '<div class="blogs-name"><h4><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4></div>';
        $result .= '<div class="blogs-link-first" style="display:none;"><a href="' . get_permalink() . '">Read More</a></div>';
        $result .= '</div>';
        $result .= '<div class="blogs-poster">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="blogs-link"><a href="' . get_permalink() . '">'. $icon .'Read More</a></div>';
        $result .= '</div>';
        $result .= '</div>';
        $post_counter++;
        endwhile;
  
        wp_reset_postdata();
    
        
    endif;    
  
    return $result;            
}



add_shortcode( 'related_blog_list', 'related_blog_list' ); 




function page_blog_list(){
  
    $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => '4',
                    'publish_status' => 'published',
                    'post__not_in'   => array( get_the_ID() ),
                    'order' => 'DESC',
                 );

    if( isset($_GET['search']) ){
        $args['s'] = $_GET['search'];
    }

    $post_counter = 0;

    ob_start();

    get_template_part('icons/arrow-right');

    $icon = ob_get_clean();
    
    $query = new WP_Query($args);
    $result = '';
    if($query->have_posts()) :
        
        
        while($query->have_posts()) :
  
            $query->the_post() ;
                      
        $result .= '<div class="blogs-item">';
        $result .= '<div class="blogs-inner">';
        $result .= '<div class="blogs-poster-first"  style="display:none;">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="blogs-content-inner">';

        $result .= '<div class="blogs-date">'.get_the_date().'</div>';
        $result .= '<div class="blogs-name"><h4><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4></div>';
        $result .= '<div class="blogs-link-first" style="display:none;"><a href="' . get_permalink() . '">Read More</a></div>';
        $result .= '</div>';
        $result .= '<div class="blogs-poster">' . get_the_post_thumbnail() . '</div>';
        $result .= '<div class="blogs-link"><a href="' . get_permalink() . '">'. $icon .'Read More</a></div>';
        $result .= '</div>';
        $result .= '</div>';
        $post_counter++;
        endwhile;
  
        wp_reset_postdata();
    
        
    endif;    
  
    return $result;            
}



add_shortcode( 'page_blog_list', 'page_blog_list' ); 


// REVIEWS




function reviews_slider(){
  
    $args = array(
                    'post_type'      => 'reviews',
                    'posts_per_page' => '-1',
                    'publish_status' => 'published',
                    'order' => 'ASC',
                 );
  
    $query = new WP_Query($args);
    $result = '';
    if($query->have_posts()) :
        
        $result .= '<div class="owl-carousel owl-reviews-slider owl-theme">';
        while($query->have_posts()) :
        $stars = get_post_meta( get_the_ID(), 'stars_rate', true );
            $query->the_post() ;
            
        $result .= '<div class="reviews-item">';
        $result .= '<div class="reviews-inner">';
        $result .= '<div class="reviews-stars">';
        for ($x = 1; $x <= get_post_meta( get_the_ID(), 'stars_rate', true ); $x++) {
            $result .= '<div class="stars">★</div>';
        }
        $result .= '</div>';
        $result .= '<div class="reviews-content-context"><p>' . get_the_content() . '</p></div>'; 
        $result .= '<div class="reviews-name"><h5>' . get_the_title() . '</h5></div>';
        $result .= '<div class="reviews-position">' . get_post_meta( get_the_ID(), 'position', true ) . '</div>';
        $result .= '<div class="reviews-poster">' . get_the_post_thumbnail() . '</div>';
        $result .= '</div>';
        $result .= '</div>';
        endwhile;
  
        wp_reset_postdata();
        $result .= '</div>';
        
    endif;    
  
    return $result;            
}

add_shortcode( 'reviews_slider', 'reviews_slider' ); 