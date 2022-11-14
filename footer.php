<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$mainClass = 'main-footer';

$currentYear = date('Y');
$siteName = get_bloginfo('name');

$copyrightText = '';


?>


<style>
	#<?php echo $mainClass; ?> {
		background:<?php echo get_field('background_color','option'); ?> 
	}
</style>


<footer class="<?php echo $mainClass; ?>" id="<?php echo $mainClass; ?>">
	<div class="container">
		<div class="row">
			<div class="row-inner">
				<div class="col-footer num-1">
					<img src="<?php echo get_field('footer_logo','option'); ?>" alt="">
				</div>
				<div class="col-footer col-list num-2">
					<h4><?php echo get_field('menu_title','option'); ?></h4>
					<div class="<?php echo $mainClass; ?>-menus-wrapper">
						<?php foreach( get_field('footer_menus','option') as $menu ) : ?>
						<div class="<?php echo $mainClass; ?>-menu-item">
							<?php wp_nav_menu( array( 'menu' => $menu['menu'] ) ); ?>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-footer col-list num-3">
					<h4><?php echo get_field('menu_title_2','option'); ?></h4>
					<div class="<?php echo $mainClass; ?>-menus-wrapper">
						<?php foreach( get_field('footer_menus_2','option') as $menu ) : ?>
						<div class="<?php echo $mainClass; ?>-menu-item">
							<?php wp_nav_menu( array( 'menu' => $menu['menu'] ) ); ?>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-footer col-list num-4">
					<h4><?php echo get_field('column_title','option'); ?></h4>

					<?php if( have_rows('contact_information', 'option') ): ?>
						<ul>
						<?php while( have_rows('contact_information', 'option') ) : the_row(); ?>
							<li>
								<img src="<?php the_sub_field('icon_image'); ?>" alt="">
								<p><?php the_sub_field('text'); ?></p>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div class="col-footer num-5">
					<h4><?php echo get_field('column_social_title','option'); ?></h4>

					<?php if( have_rows('social_icons', 'option') ): ?>
						<ul class="icon-social">
						<?php while( have_rows('social_icons', 'option') ) : the_row(); ?>
							<li>
								<img src="<?php the_sub_field('icon_image'); ?>" alt="" >
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>

			<div class="row-inner-2">
				<div class="col-footer-a">
					<div class="text-footer"><?php echo get_field('footer_text_column_1','option'); ?></div>
				</div>
				<div class="col-footer-b">
					<div class="text-footer"><?php echo get_field('footer_text_column_2','option'); ?></div>
				</div>
				<div class="col-footer-c">
					<div class="text-footer"><?php echo get_field('footer_text_column_3','option'); ?></div>
				</div>
			</div>

			<div class="dots-custom">
                <?php get_template_part('icons/footer-dots'); ?>
            </div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>

