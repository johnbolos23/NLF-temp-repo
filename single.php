<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section class="post-single" id="post-single">
	<div class="container">
		<div class="post-single-wrapper">
			<div class="post-single-content-meta">
					<?php $theTerms = get_the_terms( get_the_ID(), 'category' ); ?>
					<?php foreach( $theTerms as $category ) : ?>
					<span><a href="<?php echo get_term_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></span>
					<?php endforeach; ?>
					<div class="dot-custom">•</div>
					<span class="post-slider-item-date"><?php echo get_the_date('F j, Y'); ?></span>
			</div>
			<h2 class="heading"><?php the_title(); ?></h2>
			<div class="ft-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>
			<div class="wysiwyg-content"><?php the_content(); ?></div>
			
			<div class="bottom-content-col">
				<a href="" class="main-button">Back to BLog</a>
				<div class="social-share-icons">
					<p>Share</p>	
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>" class="fa fa-facebook" target="_blank"></a>				
					<a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink();?>" class="fa fa-twitter" target="_blank"></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>" class="fa fa-instagram" target="_blank"></a>
				</div>
			</div>

		</div>

		<div class="post-related-wrapper">
				<h2 class="heading" style="text-align:center;">Other Blog You May Like</h2>
				<div class="blogs-col-list">
					<?php
                        echo do_shortcode( '[related_blog_list]' );	
                    ?>
				</div>
		</div>
	</div>
</section>
<?php
get_footer();
