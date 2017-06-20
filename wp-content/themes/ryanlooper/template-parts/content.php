<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
               <?php
          $url =  "{$_SERVER['REQUEST_URI']}";
          $escaped_url2 = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
          //echo($escaped_url);
          if($escaped_url2 == "/")
          {
                   echo '<div class="col-sm-6"> <span class="subtitle">';    
              } else {
                   echo '<div class="col-sm-6" style="padding:30px;"> <span class="subtitle">';
          }
    ?>  
    
                
                    
<?php

$cats = array();
foreach (get_the_category($post_id) as $c) {
$cat = get_category($c);
array_push($cats, $cat->name);
}

if (sizeOf($cats) > 0) {
$post_categories = implode(', ', $cats);
} else {
$post_categories = 'Not Assigned';
}
                    
$category = get_the_category(); 
$slug = $category[0]->slug;
echo ("<a href='/category/".$slug."'/>".$post_categories."</a>");
?>
                
                    
                    <font class="date"><?php echo get_the_date('m/d/y'); ?></font>
            </span>
                    <h1>
            <a href='javascript:show(ft<?php echo($counter); ?>);' class="title"><?php the_title( sprintf( '', esc_url( get_permalink() ) ), '' ); ?></a>
            </h1>
<div class="space-sm"></div>  
<div class="space-sm"></div>  
                    <div id="ft<?php echo($counter); ?>">
                            <?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );
               
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
                        <div class="col-sm-5 quote">
<div class="space-sm"></div>
<h2><b style="font-size=36;">“</b> <?php  the_field('quote'); ?> </h2>
<div class="space-sm"></div>
</div>
       <?php the_field('after_quote'); ?>                  
                        <!-- #post-## -->
                    <div class="row" style="padding-left:15px;">
                        <div class="col-sm-12 ssk-group">
                            <a href="" class="ssk ssk-facebook" data-url="<?php echo get_permalink() ?>" data-image="<?php echo(get_template_directory_uri()) ?>/img/share.png"><span class="data-icon" aria-hidden="true" data-icon="&#xe0aa;"></span></a>
                            <a href="" class="ssk ssk-twitter" data-url="<?php echo get_permalink() ?>" data-image="<?php echo(get_template_directory_uri()) ?>/img/share.png">
                               <span class="data-icon" aria-hidden="true" data-icon="&#xe0ab;"></span></a>
                        <a href="" class="ssk ssk-google-plus" data-url="<?php echo get_permalink() ?>" data-image="<?php echo(get_template_directory_uri()) ?>/img/share.png">
                            <span class="data-icon" aria-hidden="true" data-icon="&#xe0ad;"></span></a>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <div class="space"></div>  
</article><!-- #post-## -->