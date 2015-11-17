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
      <?php get_template_part('templates/front-page/produce'); ?>
		</div><!-- /.row col-wrap first row-->

<?php endwhile; ?>
