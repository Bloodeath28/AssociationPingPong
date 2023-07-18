<?php 
/**
 * Template part for displaying Blog Section
 *
 *@package Volleyball Club
 */
?>
<?php 
    $featured_posts_section_title      = volleyball_club_get_option( 'featured_posts_section_title' );
	$featured_posts_category 		   = volleyball_club_get_option( 'featured_posts_category' );
	$featured_posts_number		       = volleyball_club_get_option( 'featured_posts_number' );
    $featured_posts_column             = volleyball_club_get_option( 'featured_posts_column' );
?> 
    <?php if( !empty($featured_posts_section_title) ):?>
    <div class="section-title">
        <h4><?php echo esc_html($featured_posts_section_title);?></h4>
        <div class="underline">
            <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/volleyball.png")?>">
        </div>
    </div>
    <?php endif;?>
    
  	<div class="section-content <?php echo esc_attr($featured_posts_column); ?> clear">
	  	<?php
			$featured_posts_args = array(
				'posts_per_page' =>absint( $featured_posts_number ),				
				'post_type' => 'post',
	            'post_status' => 'publish',
	            'paged' => 1,
				);

				if ( absint( $featured_posts_category ) > 0 ) {
					$featured_posts_args['cat'] = absint( $featured_posts_category );
				}
			
			$loop = new WP_Query( $featured_posts_args );
			
			if ( $loop->have_posts() ) : 
			$i=-1; $j=0;	
				while ( $loop->have_posts() ) : $loop->the_post(); $i++; $j++; ?>    

                <article>
                    <div class="post-box">
                    <?php
                        if (has_post_thumbnail($post->ID)) {
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        } else {
                            $image = esc_url(get_template_directory_uri() . "/assets/images/default.png");
                        }
                    ?>
                    <div class="img-container">
                        <div class="img-blog" style="background-image: url(<?php if (has_post_thumbnail($post->ID)) {
                            echo $image[0];
                        } else {
                            echo $image;
                        }?>);"></div>
                        <div class="date-auther">
                            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></time>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <div class="class-content">
                            <?php
                                $excerpt = volleyball_club_the_excerpt( 20 );
                                echo wp_kses_post( wpautop( $excerpt ) );
                            ?>
                        </div>
                        <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                    </div>
                </article>
		    	<?php endwhile;?>
	    	<?php endif; ?>
		<?php wp_reset_postdata(); ?>
  	</div><!-- .section-content -->