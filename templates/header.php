<header class="banner" role="banner">
	<?php if(is_front_page()) : ?>
		<div class="hero">
	<?php endif ?>

  <div class="container-full">
  	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    	<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Po Man Pickins</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
      <?php if(is_front_page()) : ?>
			<div class="center-block invitation">
				<a class="btn btn-primary btn-lg outline" href="<?=get_site_url();?>/reach-the-farm">Contact Us</a>
			</div>
		</div>
		<div class="center-block tagline"><?php echo get_bloginfo ( 'description' ); ?></div>
	<?php endif ?>
  </div> <! -- end container -->

</header>
<?php if ( !is_front_page() && !is_home() && function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">','</p>');
} ?>

