<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
  <!-- row for wells -->
		<div class="row col-wrap">
			<?php get_template_part('templates/front-page/services'); ?>
			<?php get_template_part('templates/front-page/contact'); ?>
			<?php get_template_part('templates/front-page/faq'); ?>
		</div><!-- end row -->
		

		

		<!-- top row of wells or rounded corner divs -->

		<div class="row col-wrap">
				<?php get_template_part('templates/front-page/articles'); ?>		
		</div><!-- end row -->

<?php endwhile; ?>
