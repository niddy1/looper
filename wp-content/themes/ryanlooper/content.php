<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
                
                <div class="col-sm-6"> <span class="subtitle">
                    
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

echo $post_categories;
?>
                
                    
                    <font class="date"><?php echo get_the_date('m-d-y'); ?></font>
            </span>
                    <h1>
            <a href='javascript:show(ft<?php echo($counter); ?>);'><?php the_title( sprintf( '', esc_url( get_permalink() ) ), '' ); ?></a>
            </h1>
                    <div id="ft<?php echo($counter); ?>">
                        <article>
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
		?> </article>
                        <!-- #post-## -->
                        <div class="row">
                            <div class="col-sm-12" style="text-align: center;"><img style="padding: 20px;" src="<?php echo(get_template_directory_uri()) ?>/img/facebook.png" /><img style="padding: 20px;" src="<?php echo(get_template_directory_uri()) ?>/img/twitter.png" /><img style="padding: 20px;" src="<?php echo(get_template_directory_uri()) ?>/img/googleplus.png" /></div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="space"></div>
[ajax_load_more post_type="post, portfolio" repeater="default" posts_per_page="6" transition="fade" button_label="Load More Posts"]