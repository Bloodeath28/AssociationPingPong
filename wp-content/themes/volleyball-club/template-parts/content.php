<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Volleyball Club
 */
?>

<article class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail'; ?>">
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