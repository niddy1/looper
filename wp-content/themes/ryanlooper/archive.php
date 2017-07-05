<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
   <header class="entry-header">
        <div class="row">
			<?php
			// Start the loop.
            $counter=0;
			while ( have_posts() ) : the_post();
            $counter= $counter+1;
                
            
           ?>
                <header class="entry-header">
        <div class="row">
            <?php

    if(is_int($counter/2))
    {
       echo("<div class='col-sm-4'></div>");
    }
    else
    {
       echo("<div class='col-sm-2'></div>");
    }	/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_format() );
            
              //Note: you need to use full file name, in this case content.php and also false arguments to avoid loading the file and return the full path instead 
            include( locate_template( 'template-parts/content.php', false, false ) ); 

			// End the loop.
			endwhile;

			// Previous/next page navigation.

			
			the_posts_pagination( array(
				'prev_text'          => __( '<span aria-hidden="true" pag-icon="&#xe045;" style="font-size: 18px;" class="pag-icon"></span>', 'twentysixteen' ),
				'next_text'          => __( '<span aria-hidden="true" pag-icon="&#xe046;" style="font-size: 18px;" class="pag-icon"></span>', 'twentysixteen' ),
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>