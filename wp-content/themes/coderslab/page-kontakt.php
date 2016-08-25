<?php get_header(); ?>
<section id="pageKontakt">
	<h1>Jestem na stronie</h1>
	<div id="map" style="width: 400px; height: 400px; float: left;"></div>
	<article>
  <?php
    if ( have_posts() ) {
    	while ( have_posts() ) {
    		the_post();
    		//
    		// Post Content here
    		// ?>
				<article class="klasa">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
				<article>
    	<?php } // end while
    } // end if
    ?>
<div id="kontakt">

	<?php echo do_shortcode('[contact-form-7 id="17" title="Kontakt"]'); ?>

</div>
<?php get_footer(); ?>
