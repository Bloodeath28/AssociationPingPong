<?php 
/**
 * Template part for displaying Featured Courses Section
 *
 *@package Volleyball Club
 */
    $featured_services_section_title      = volleyball_club_get_option( 'featured_services_section_title' ); 
    $featured_services_column                  = volleyball_club_get_option( 'featured_services_column' );
    $featured_services_content_type            = volleyball_club_get_option( 'featured_services_content_type' );
    $number_of_featured_services_items         = volleyball_club_get_option( 'number_of_featured_services_items' );
    $featured_services_category                = volleyball_club_get_option( 'featured_services_category' );

    if( $featured_services_content_type == 'featured_services_page' ) :
        for( $i=1; $i<=$number_of_featured_services_items; $i++ ) :
            $featured_services_posts[] = volleyball_club_get_option( 'featured_services_page_'.$i );
        endfor;  
    elseif( $featured_services_content_type == 'featured_services_post' ) :
        for( $i=1; $i<=$number_of_featured_services_items; $i++ ) :
            $featured_services_posts[] = volleyball_club_get_option( 'featured_services_post_'.$i );
        endfor;
    endif;
    ?>
    <?php if( !empty($featured_services_section_title) ):?>
    <div class="section-title">
        <h4><?php echo esc_html($featured_services_section_title);?></h4>
        <div class="underline">
            <img src="<?php echo esc_url(get_template_directory_uri()."/assets/images/volleyball.png")?>">
        </div>
    </div>
    <?php endif;?>
    <?php if( $featured_services_content_type == 'featured_services_page' ) : ?>
        <div class="section-content <?php echo esc_attr($featured_services_column); ?> clear">
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_featured_services_items ),
                'post__in'      => $featured_services_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++;
                $featured_services_icon[$j] = volleyball_club_get_option( 'featured_services_icon_'.$j ); ?>          
                
                <article>
                    <div class="services-box">
                    <?php
                        if (has_post_thumbnail($post->ID)) {
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        } else {
                            $image = esc_url(get_template_directory_uri() . "/assets/images/default.png");
                        }
                    ?>
                    <div class="img-container">
                        <svg class="svg">
                        <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox"><path d="M0.873,0.013 C0.96,0.153,1,0.328,0.999,0.506 C0.993,0.69,0.932,0.866,0.829,0.997 C0.553,0.999,0.277,1,0.001,1 C0.001,0.669,0,0.336,0,0.002 C0.291,0.006,0.582,0.009,0.873,0.013"></path></clipPath>
                        </svg>
                        <div class="img-services" style="background-image: url(<?php echo $image[0]; ?>);"></div>
                    </div>
                        <div class="content-container">
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

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content <?php echo esc_attr($featured_services_column); ?> clear">
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_featured_services_items ),
                'post__in'      => $featured_services_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++;
                $featured_services_icon[$j] = volleyball_club_get_option( 'featured_services_icon_'.$j ); ?>  
                
                <article>
                    <div class="services-box">
                    <?php
                        if (has_post_thumbnail($post->ID)) {
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        } else {
                            $image = esc_url(get_template_directory_uri() . "/assets/images/default.png");
                        }
                    ?>
                    <div class="img-container">
                        <svg class="svg">
                        <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox"><path d="M0.873,0.013 C0.96,0.153,1,0.328,0.999,0.506 C0.993,0.69,0.932,0.866,0.829,0.997 C0.553,0.999,0.277,1,0.001,1 C0.001,0.669,0,0.336,0,0.002 C0.291,0.006,0.582,0.009,0.873,0.013"></path></clipPath>
                        </svg>
                        <div class="img-services" style="background-image: url(<?php echo $image[0]; ?>);"></div>
                    </div>
                        <div class="content-container">
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

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;