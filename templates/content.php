<article <?php post_class(); ?>>
  <header>
  	<?php if (($posts[0]->post_type != 'faq') && ($posts[0]->post_type != 'service')) : ?>
   	 <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   	<?php else: ?>
   	<?php $content_class = "large_text_display"; ?>
   	 <h2 class="entry-title"><?php the_title(); ?></h2>
   	<?php endif ?>
    <?php if ($posts[0]->post_type == 'post')
      		get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary <?php echo $content_class ? $content_class : '' ?> ">
    	<?php the_content(); ?>
  </div>
</article>
