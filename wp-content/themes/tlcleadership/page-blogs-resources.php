<?php
/**
 * Template Name: Blogs - Resources
 */

get_header(); while (have_posts()) : the_post(); 

    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img' );
    $banner_title = get_field('banner_title');
    $description = get_field('description'); ?>

    <div class="section blog-banner">
        <div class="container">
            <div class="title-wrap">
                <h1><?php echo $banner_title; ?></h1>
            </div>
            <div class="img-wrap">
                <img src="<?php echo $backgroundImg[0];?>">
            </div>
            <div class="content">
                <?php echo $description; ?>
            </div>
        </div>
    </div>


    <div class="section popular-resources bg-lightblue4">
        <div class="container">

            <?php if( have_rows('resources_section') ): ?>
                <?php while( have_rows('resources_section') ): the_row(); 

                    // Get sub field values.
                    $title = get_sub_field('title'); ?>
                    
                    <div class="title-wrap">
                        <?php if($title): ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            
            <div class="row content-wrap">

                <?php
                    $args = array(
                        'post_type'      => 'resources',
                        'posts_per_page' => 6,
                        'order' => 'ASC',
                        'orderby' => 'date'
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ): $loop->the_post();
                    $postImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'grid-img' ); 
                    $resources_button_label = get_field('resources_button_label'); ?>

                    <div class="col-md-6 outer-wrap">
                        <div class="card-wrap">
                            <div class="img-wrap">
                                <img src="<?php echo $postImg[0];?>">
                            </div>
                            <div class="content">
                                <h6><?php the_title(); ?></h6>
                                <?php the_content(); ?>

                                <div class="btn-wrap">
                                    <a href="<?php the_permalink();?>" class="btn btn-link">
                                        <?php echo $resources_button_label; ?>
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>
    </div>


    <div class="section leadership-blog">
        <div class="container">

            <?php if( have_rows('leader_blog_section') ): ?>
                <?php while( have_rows('leader_blog_section') ): the_row(); 

                    // Get sub field values.
                    $title = get_sub_field('title');
                    $button_link = get_sub_field('button_link'); ?>

                    <div class="title-wrap">
                       
                        <?php if($title): ?>
                            <h3><?php echo $title ?></h3>
                        <?php endif; ?>

                        <?php if( $button_link ): 
                            $button_link_url = $button_link['url'];
                            $button_link_title = $button_link['title'];
                            $button_link_target = $button_link['target'] ? $button_link['target'] : '_self';
                        ?>
                            <div class="btn-wrap">
                                <a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" class="btn btn-primary"><?php echo $button_link_title; ?></a>
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <div class="row blog-card-wrap leadership-blog-card">
                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6,
                        'order' => 'ASC',
                        'orderby' => 'date'
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ): $loop->the_post();
                    $postImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'grid-img' ); ?>

                    <div class="col-md-4 card-wrap">
                        <div class="content bg" style="background-image: url('<?php echo $postImg[0];?>');">
                            <div class="title">
                                <h6><?php the_title(); ?></h6>
                                <p><?php the_time('F j, Y'); ?></p>
                            </div>
                            <div class="btn-wrap">
                                <a href="<?php the_permalink();?>" class="btn btn-link">Read More
                                    <span class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>


    <div class="section leadership-challenges bg-lightblue4">
        <div class="container">
            <?php if( have_rows('podcast_section') ): ?>
                <?php while( have_rows('podcast_section') ): the_row(); 

                    // Get sub field values.
                    $title = get_sub_field('title'); ?>

                    <div class="title-wrap">
                        <?php if($title): ?>
                            <h4><?php echo $title ?></h4>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <div class="outer-wrap">

                <?php
                    $args = array(
                        'post_type'      => 'podcast',
                        'posts_per_page' => 3,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ): $loop->the_post(); ?>

                    <div class="challenge-wrap">
                        <div class="row content-wrap">
                            <div class="col-md-4 content">
                                <div class="title">
                                    <h6><?php the_title(); ?></h6>
                                    <p><?php the_time('F j, Y'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-5 content">
                                <div class="text">
                                    <?php the_content() ?>
                                </div>
                            </div>

                            <div class="col-md-3 content">
                                <div class="audio">
                                    <div class="btn-wrap">
                                        <a href="<?php the_permalink();?>" class="btn btn-link">Listen now
                                            <div class="audio-icon"><span class="icon-play"></span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <?php if( have_rows('podcast_section') ): ?>
                <?php while( have_rows('podcast_section') ): the_row(); 

                    // Get sub field values.
                    $button_link = get_sub_field('button_link'); ?>

                    <?php if( $button_link ): 
                        $button_link_url = $button_link['url'];
                        $button_link_title = $button_link['title'];
                        $button_link_target = $button_link['target'] ? $button_link['target'] : '_self';
                    ?>
                        <div class="btn-wrap">
                            <a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" class="btn btn-primary"><?php echo $button_link_title; ?></a>
                        </div>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
    
    <?php if( have_rows('section_blurb_blog') ): ?>
        <?php while( have_rows('section_blurb_blog') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('section_title');
            $image = get_sub_field('section_background');
            $description = get_sub_field('section_description');
            $section_form = get_sub_field('section_form'); ?>


            <?php
                if( $image ):
                    // Thumbnail size attributes.
                    $size_img = 'grid-img';
                    $thumb_img = $image['sizes'][ $size_img ];
                ?>
                <div class="footer-2 bg" style="background-image: url('<?php echo $thumb_img;?>');">
                    <div class="container">
                        <div class="content-wrap">
                            <?php if($title): ?>
                                <h3><?php echo $title; ?></h3>
                            <?php endif; ?>

                            <?php if($description): ?>
                                <p><?php echo $description; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="footer-form">
                            <?php echo do_shortcode($section_form); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

<?php endwhile; get_footer();