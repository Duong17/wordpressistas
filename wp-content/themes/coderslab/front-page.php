<?php get_header(); ?>
	<h1>Jestem na stronie głownej</h1>
  <?php
    if ( have_posts() ) {
    	while ( have_posts() ) {
    		the_post();
    		//
    		// Post Content here
    		// ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Zobacz post!</a>


    	<?php } // end while
    } // end if
    ?>
<?php get_footer(); ?>
