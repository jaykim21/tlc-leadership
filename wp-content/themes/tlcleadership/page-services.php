<?php
/**
 * Template Name: Services
 */

get_header(); while (have_posts()) : the_post(); 

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img' );
$banner_small_title = get_field('banner_small_title');
$banner_title = get_field('banner_title');?>

    <div class="banner bg" style="background-image: url('<?php echo $backgroundImg[0];?>');">
        <div class="container">
            <div class="banner-content">
                <h6><?php echo $banner_small_title; ?></h6>
                <h1><?php echo $banner_title; ?></h1>
            </div>
        </div>
    </div>



    <?php if( have_rows('great_leaders_section') ): ?>
        <?php while( have_rows('great_leaders_section') ): the_row(); 

            // Get sub field values.
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $description = get_sub_field('description'); 
            $button_link = get_sub_field('button_link'); ?>

            <div class="section great-leaders bb">
                <div class="container">
                    <div class="row picture-content">
                        <div class="col-md-6 side-img">
                            <?php if( $image ):
                                // Thumbnail size attributes.
                                $size_img = 'grid-img';
                                $thumb_img = $image['sizes'][ $size_img ];
                            ?>
                                
                                <div class="img-wrap">
                                    <img src="<?php echo $thumb_img;?>">
                                </div>
                            
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 side-content">
                            <div class="content">
                                <div class="title">
                                    <?php if($title): ?>
                                        <h3><?php echo $title; ?></h3>
                                    <?php endif; ?>
                                </div>

                                <div class="text">
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
                                        <a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" class="btn btn-primary"><?php echo $button_link_title; ?></a>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('leadership_coaching_mentoring_section') ): ?>
        <?php while( have_rows('leadership_coaching_mentoring_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $description = get_sub_field('description'); ?>

            <div class="section coaching-mentoring">
                <div class="container">
                    <div class="title-wrap">
                        <?php if($title): ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif; ?>

                        <?php if($description): ?>
                            <p><?php echo $description; ?></p>
                        <?php endif; ?>
                    </div>

                    <?php $cntr = 0; if( have_rows('coaching_mentoring_listing') ): ?>
                        <?php while( have_rows('coaching_mentoring_listing') ): the_row(); ?>

                            <div class="coaching-card <?php echo ($cntr % 3 == 0) ? 'membership-wrap' : (($cntr % 3 == 1) ? 'group-coaching' : (($cntr % 3 == 2) ? 'private-coaching' : '')) ?>">
                                <div class="row">
                                    <div class="col-md-4 content-wrap">

                                        <?php if( have_rows('left_content') ): ?>
                                            <?php while( have_rows('left_content') ): the_row(); 

                                                // Get sub field values.
                                                $title = get_sub_field('title');
                                                $description = get_sub_field('description'); ?>

                                                <div class="left">
                                                    <?php if($title): ?>
                                                        <h5><?php echo $title; ?></h5>
                                                    <?php endif; ?>
                                                    <?php if($description): ?>
                                                        <p><?php echo $description; ?></p>
                                                    <?php endif; ?>
                                                </div>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>


                                    <div class="col-md-4 content-wrap">

                                        <?php if( have_rows('middle_content') ): ?>
                                            <?php while( have_rows('middle_content') ): the_row(); 

                                                // Get sub field values.
                                                $description = get_sub_field('description'); ?>

                                                <ul class="middle">
                                                    <?php if($description): ?>
                                                        <?php echo $description; ?>
                                                    <?php endif; ?>
                                                </ul>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>


                                    <div class="col-md-4 content-wrap">

                                        <?php if( have_rows('right_content') ): ?>
                                            <?php while( have_rows('right_content') ): the_row(); 

                                                // Get sub field values.
                                                $description = get_sub_field('description');
                                                $button_link = get_sub_field('button_link'); ?>

                                                <div class="right">

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

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            </div>

                        <?php $cntr++; endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('leadership_development_training_section') ): ?>
        <?php while( have_rows('leadership_development_training_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $description = get_sub_field('description'); 
            $button_link = get_sub_field('button_link'); 
            $image = get_sub_field('image'); ?>


            <div class="section leadership-development-training bg-purple3">
                <div class="container">
                    <div class="row content-wrap">
                        <div class="col-md-6 left">
                            <div class="title-wrap">

                                <?php if($title): ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>

                                <?php if($description): ?>
                                    <?php echo $description; ?>
                                <?php endif; ?>

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
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <?php if( $image ):
                                // Thumbnail size attributes.
                                $size_img = 'grid-img';
                                $thumb_img = $image['sizes'][ $size_img ];
                            ?>
                                
                                <div class="img-wrap">
                                    <img src="<?php echo $thumb_img;?>">
                                </div>
                            
                            <?php endif; ?>
                        </div>
                    </div>


                    <?php if( have_rows('popular_sessions') ): ?>
                        <?php while( have_rows('popular_sessions') ): the_row(); 

                            // Get sub field values.
                            $title = get_sub_field('title'); ?>

                            <div class="card-wrap">
                                <div class="title">
                                    <?php if($title): ?>
                                        <h5><?php echo $title; ?></h5>
                                    <?php endif; ?>
                                </div>

                                <?php  $cntr = 1; if( have_rows('session_listing') ): ?>
                                    <div class="row outer-wrap">

                                        <?php while( have_rows('session_listing') ): the_row(); 

                                            // Get sub field values.
                                            $title = get_sub_field('title'); 
                                            $description = get_sub_field('description');  ?>

                                            
                                            <div class="<?php echo ($cntr == 4 || $cntr == 5) ? 'col-md-6' : 'col-md-4';?> inner-wrap">
                                                <div class="content">
                                                    <?php if($title): ?>
                                                        <h6><?php echo $title; ?></h6>
                                                    <?php endif; ?>
                                                    <?php if($description): ?>
                                                        <p><?php echo $description; ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                    
                                        <?php $cntr++; endwhile;?>

                                    </div>
                                <?php endif; ?>

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('looking_more_section') ): ?>
        <?php while( have_rows('looking_more_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $button_link = get_sub_field('button_link'); ?>

            <div class="discover">
                <div class="container">
                    <div class="content-wrap">
                        <img class="bg-design" src="<?php echo get_template_directory_uri(); ?>/assets/images/discover-bg.png">
                        <?php if($title): ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif; ?>

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

                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('partner_corporate_section') ): ?>
        <?php while( have_rows('partner_corporate_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $description = get_sub_field('description'); ?>

            <div class="section partner-corporate">
                <div class="container">
                    <div class="title-wrap">
                        <?php if($title): ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif; ?>
                        <?php if($description): ?>
                            <p><?php echo $description; ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if( have_rows('partner_corporate_collaboration') ): ?>
                        <?php while( have_rows('partner_corporate_collaboration') ): the_row(); 

                            // Get sub field values.
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
                            $why_partner_description = get_sub_field('why_partner'); 
                            $button_link = get_sub_field('button_link'); ?>

                            <div class="row picture-content mb">
                                <div class="col-md-6 side-img">
                                    <?php if( $image ):
                                        // Thumbnail size attributes.
                                        $size_img = 'grid-img';
                                        $thumb_img = $image['sizes'][ $size_img ];
                                    ?>
                                        
                                        <div class="img-wrap">
                                            <img src="<?php echo $thumb_img;?>">
                                        </div>
                                    
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 side-content">
                                    <div class="content">
                                        <div class="title">
                                            <?php if($title): ?>
                                                <h4><?php echo $title; ?></h4>
                                            <?php endif; ?>
                                            <?php if($description): ?>
                                                <p><?php echo $description; ?></p>
                                            <?php endif; ?>
                                        </div>

                                        <div class="text">
                                            <?php if($why_partner_description): ?>
                                                <?php echo $why_partner_description; ?>
                                            <?php endif; ?>
                                        </div>

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

                        <?php endwhile; ?>
                    <?php endif; ?>


                    <?php if( have_rows('media_commentary') ): ?>
                        <?php while( have_rows('media_commentary') ): the_row(); 

                            // Get sub field values.
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
                            $meet_owner_description = get_sub_field('meet_owner'); 
                            $button_link = get_sub_field('button_link'); ?>

                            <div class="row picture-content style-2">
                                <div class="col-md-6 side-content">
                                    <div class="content">
                                        <div class="title">
                                            <?php if($title): ?>
                                                <h4><?php echo $title; ?></h4>
                                            <?php endif; ?>
                                            <?php if($description): ?>
                                                <p><?php echo $description; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text">
                                            <?php if($meet_owner_description): ?>
                                                <?php echo $meet_owner_description; ?>
                                            <?php endif; ?>
                                        </div>
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
                                <div class="col-md-6 side-img">
                                    <?php if( $image ):
                                        // Thumbnail size attributes.
                                        $size_img = 'grid-img';
                                        $thumb_img = $image['sizes'][ $size_img ];
                                    ?>
                                        
                                        <div class="img-wrap">
                                            <img src="<?php echo $thumb_img;?>">
                                        </div>
                                    
                                    <?php endif; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


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
                <div class="footer-2 bg" style="background-image: url('<?php echo $thumb_img;?>');">
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