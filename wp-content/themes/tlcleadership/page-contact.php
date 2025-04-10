<?php
/**
 * Template Name: Contact
 */

get_header(); while (have_posts()) : the_post(); 

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img' );

$banner_small_title = get_field('banner_small_title');
$banner_title = get_field('banner_title');
$map = get_field('map'); ?>
    
    <div class="banner contact-banner bg" style="background-image: url('<?php echo $backgroundImg[0];?>');">
        <div class="container">
            <div class="banner-content">
                <h1><?php echo $banner_title; ?></h1>
            </div>
        </div>
    </div>


    <div class="section contact-form">
        <div class="container">
            <div class="contact-outer-wrap">
                <div class="row">
                    <div class="col-md-6 content-wrap">
                        <div class="content">

                            <?php if( have_rows('lets_connect') ): ?>
                                <?php while( have_rows('lets_connect') ): the_row(); 

                                    // Get sub field values.
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description'); ?>

                                    <div class="connect">
                                        <?php if($title): ?>
                                            <h5><?php echo $title; ?></h5>
                                        <?php endif; ?>
                                        <?php if($description): ?>
                                            <p><?php echo $description; ?></p>
                                        <?php endif; ?>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if( have_rows('get_in_touch') ): ?>
                                <?php while( have_rows('get_in_touch') ): the_row(); 

                                    // Get sub field values.
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                                    $button_link = get_sub_field('button_link'); ?>

                                    <div class="get-in-touch">
                                        <?php if($title): ?>
                                            <h5><?php echo $title; ?></h5>
                                        <?php endif; ?>
                                        
                                        <?php if($description): ?>
                                            <?php echo $description; ?>
                                        <?php endif; ?>
                                        
                                    </div>


                                    <?php if( $button_link ): 
                                        $button_link_url = $button_link['url'];
                                        $button_link_title = $button_link['title'];
                                        $button_link_target = $button_link['target'] ? $button_link['target'] : '_self';
                                        ?>
                                        <div class="btn-wrap">
                                            <a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" class="btn btn-link">
                                                <?php echo $button_link_title; ?>
                                                <span class="icon-arrow-right"></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if( have_rows('follow_us') ): ?>
                                <?php while( have_rows('follow_us') ): the_row(); 

                                    // Get sub field values.
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                                    $facebook_link = get_sub_field('facebook_link');
                                    $instagram_link = get_sub_field('instagram_link'); ?>

                                    <div class="social-media">
                                        <?php if($title): ?>
                                            <h6><?php echo $title; ?></h6>
                                        <?php endif; ?>
                                        <?php if($description): ?>
                                            <p><?php echo $description; ?></p>
                                        <?php endif; ?>
                                        
                                        <div class="icons">
                                            <?php if( $facebook_link ): 
                                                $facebook_link_url = $facebook_link['url'];
                                                $facebook_link_target = $facebook_link['target'] ? $facebook_link['target'] : '_self';
                                                ?>
                                                <a href="<?php echo esc_url( $facebook_link_url ); ?>" target="<?php echo esc_attr( $facebook_link_target ); ?>" class="circle">
                                                    <span class="icon-facebook"></span>
                                                </a>
                                            <?php endif; ?>

                                            <?php if( $instagram_link ): 
                                                $instagram_link_url = $instagram_link['url'];
                                                $instagram_link_target = $instagram_link['target'] ? $instagram_link['target'] : '_self';
                                                ?>
                                              
                                                <a href="<?php echo esc_url( $instagram_link_url ); ?>" target="<?php echo esc_attr( $instagram_link_target ); ?>" class="circle">
                                                    <span class="icon-instagram"></span>
                                                </a>
                                              
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>

                    

                    <?php if( have_rows('contact_form') ): ?>
                        <?php while( have_rows('contact_form') ): the_row(); 

                            // Get sub field values.
                            $title = get_sub_field('title');
                            $form = get_sub_field('form'); ?>

                            <div class="col-md-6 form-wrap">
                                <div class="form-outer-wrap">
                                    <div class="title">
                                        <?php if($title): ?>
                                            <h4><?php echo $title; ?></h4>
                                        <?php endif; ?>
                                    </div>
                                    
                                    

                                    <div class="form">
                                        <?php echo do_shortcode($form); ?>
                                    </div>


                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>
            </div>

            <div class="map">
                <?php echo $map; ?>
            </div>

        </div>
    </div>
    

    <?php if( have_rows('section_blurb') ): ?>
        <?php while( have_rows('section_blurb') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('section_title');
            $image = get_sub_field('section_background');
            $description = get_sub_field('section_description');
            $button_link = get_sub_field('button_link'); ?>


            <?php
                if( $image ):
                    // Thumbnail size attributes.
                    $size_img = 'grid-img';
                    $thumb_img = $image['sizes'][ $size_img ];
                ?>
                <div class="footer-2 contact-footer2 bg" style="background-image: url('<?php echo $thumb_img;?>');">
                    <div class="container">
                        <div class="content-wrap">
                            <?php if($title): ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>

                            <?php if($description): ?>
                                <p><?php echo $description; ?></p>
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
                    </div>
                </div>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

<?php endwhile; get_footer();