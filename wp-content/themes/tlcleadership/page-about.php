<?php
/**
 * Template Name: About
 */

get_header(); while (have_posts()) : the_post(); 

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img' );
$banner_small_title = get_field('banner_small_title');
$banner_title = get_field('banner_title');?>

    <div class="banner banner-about bg" style="background-image: url('<?php echo $backgroundImg[0];?>');">
        <div class="container">
            <div class="banner-content">
                <h6><?php echo $banner_small_title; ?></h6>
                <h1><?php echo $banner_title; ?></h1>
            </div>
        </div>
    </div>


    <div class="section experience-result">
        <div class="container">

            <?php if( have_rows('grounded_experience_section') ): ?>
                <?php while( have_rows('grounded_experience_section') ): the_row(); 

                    // Get sub field values.
                    $title = get_sub_field('title');
                    $description = get_sub_field('description'); 
                    $image = get_sub_field('image'); ?>

                    <div class="row title-wrap">
                        <div class="col-md-6 left">
                            <?php if($title): ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 right">
                            <?php if($description): ?>
                                <?php echo $description; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php
                        if( $image ):
                            // Thumbnail size attributes.
                            $size_img = 'grid-img';
                            $thumb_img = $image['sizes'][ $size_img ];
                        ?>
                        
                        <div class="img-wrap">
                            <img src="<?php echo $thumb_img;?>">
                        </div>
                      
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('understand_challenges_section') ): ?>
                <?php while( have_rows('understand_challenges_section') ): the_row(); 

                    // Get sub field values.
                    $title = get_sub_field('title');
                    $left_description = get_sub_field('left_description');
                    $right_description = get_sub_field('right_description'); ?>

                    <div class="content-wrap">
                        <div class="title">
                            <?php if($title): ?>
                                <h4><?php echo $title; ?></h4>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 para-wrap">
                                <?php if($left_description): ?>
                                    <?php echo $left_description; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 para-wrap">
                                <?php if($right_description): ?>
                                    <?php echo $right_description; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>


    <?php if( have_rows('meet_founder_section') ): ?>
        <?php while( have_rows('meet_founder_section') ): the_row(); 

            // Get sub field values.
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $top_description = get_sub_field('top_description');
            $bottom_description = get_sub_field('bottom_description'); ?>

            <div class="section founder bg-lightblue4">
                <img class="bg-design" src="<?php echo get_template_directory_uri(); ?>/assets/images/founder-bgdesign.png">
                <div class="container">
                    <div class="row top-content">
                        <div class="col-md-6 left">
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

                        <div class="col-md-6 right">
                            <div class="title-wrap">
        
                                <?php if($title): ?>
                                    <h2><?php echo $title; ?></h2>
                                <?php endif; ?>

                                <?php if($top_description): ?>
                                    <?php echo $top_description; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <?php if($bottom_description): ?>
                            <?php echo $bottom_description; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>



    <?php if( have_rows('make_us_different_section') ): ?>
        <?php while( have_rows('make_us_different_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title'); ?>

            <div class="section different">
                <div class="container">
                    <div class="title-wrap">
                        <?php if($title): ?>
                            <h2><?php echo $title; ?></h2>
                        <?php endif; ?>
                    </div>


                    <?php if( have_rows('different_listing') ): ?>        
                        <div class="row content-wrap">
                            <?php while( have_rows('different_listing') ): the_row(); 

                                // Get sub field values.
                                $title = get_sub_field('title');
                                $description = get_sub_field('description'); ?> 

                                <div class="col-lg-4 col-md-6 outer-wrap">
                                    <div class="inner-wrap bg-secondary">
                                        <svg class="circle" width="190" height="190" viewBox="0 0 190 190" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="26.5" cy="163.5" r="163.5" fill="#5664B2"/></svg>
                                        
                                        <?php if($title): ?>
                                            <h6><?php echo $title; ?></h6>
                                        <?php endif; ?>

                                        <?php if($description): ?>
                                            <p><?php echo $description; ?></p>
                                        <?php endif; ?>
                                       
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('what_we_stand_section') ): ?>
        <?php while( have_rows('what_we_stand_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $image = get_sub_field('image'); ?>

            <div class="section we-stand bg-lightblue4">
                <img class="bg-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/stand-bg-img.png">
                <div class="container">
                    <div class="row content-wrap">
                        <div class="col-md-6 left">
                            <div class="content">
                                <div class="title">
                                    <?php if($title): ?>
                                        <h2><?php echo $title; ?></h2>
                                    <?php endif; ?>
                                </div>

                                <?php $cntr = 1; if( have_rows('what_we_stand_listing') ): ?>
                                    <div class="accordion" id="accordionExample"> 
                                        <?php while( have_rows('what_we_stand_listing') ): the_row(); 
                                            $title = get_sub_field('title'); 
                                            $description = get_sub_field('description'); ?>
                                            
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="heading<?php echo $cntr; ?>">
                                                    <button class="accordion-button <?php echo ($cntr == 1) ? '':'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $cntr; ?>" aria-expanded="<?php echo ($cntr == 1) ? 'true':'false';  ?>" aria-controls="collapse<?php echo $cntr; ?>">
                                                        <?php if($title): ?>
                                                            <h6><?php echo $title; ?></h6>
                                                        <?php endif; ?>
                                                        <span class="icon-angle-double-right"></span>
                                                    </button>
                                                </div>
                                                <div id="collapse<?php echo $cntr; ?>" class="accordion-collapse collapse <?php echo ($cntr == 1) ? 'show':'';  ?>" aria-labelledby="heading<?php echo $cntr; ?>" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <?php if($description): ?>
                                                            <p><?php echo $description; ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php $cntr++; endwhile; ?>
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