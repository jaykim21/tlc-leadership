<?php
/**
 * Template Name: Services - Single
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




    <?php if( have_rows('leadership_growth_section') ): ?>
        <?php while( have_rows('leadership_growth_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $description = get_sub_field('description'); 
            $image_left = get_sub_field('image_left');
            $image_right = get_sub_field('image_right'); ?>

            <div class="section leadership-growth">
                <div class="container">
                    <div class="row outer-wrap">
                        <div class="col-lg-6 col-md-12 content-wrap">
                            <div class="content">
                                <?php if($title): ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>
                                <?php if($description): ?>
                                    <?php echo $description; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if( $image_left ):
                                // Thumbnail size attributes.
                                $size_img = 'grid-img';
                                $thumb_img = $image_left['sizes'][ $size_img ];
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 img-wrap">
                                <img src="<?php echo $thumb_img;?>">
                            </div>
                        <?php endif; ?>

                        <?php if( $image_right ):
                                // Thumbnail size attributes.
                                $size_img = 'grid-img';
                                $thumb_img = $image_right['sizes'][ $size_img ];
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 img-wrap">
                                <img src="<?php echo $thumb_img;?>">
                            </div>
                        <?php endif; ?>
    
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>



    <?php if( have_rows('included_section') ): ?>
        <?php while( have_rows('included_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $description = get_sub_field('description'); 
            $image = get_sub_field('image'); ?>

            <div class="section included bg-lightblue4">
                <div class="container">
                    <div class="row content-wrap">
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
                            <div class="content">
                                <div class="title">
                                    <?php if($title): ?>
                                        <h4><?php echo $title; ?></h4>
                                    <?php endif; ?>
                                </div>

                                <?php if($description): ?>
                                    <?php echo $description; ?>
                                <?php endif; ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    
    <?php if( have_rows('blurb_middle_section') ): ?>
        <?php while( have_rows('blurb_middle_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $description = get_sub_field('description'); ?>

            <div class="section leadership-development for-leaders bg-dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/leadership-banner.png');">
                <div class="container">
                    <div class="content-wrap">
                        <?php if($title): ?>
                            <h4><?php echo $title; ?></h4>
                        <?php endif; ?>
                        <?php if($description): ?>
                            <p><?php echo $description; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>



    <?php if( have_rows('investment_section') ): ?>
        <?php while( have_rows('investment_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title');
            $description = get_sub_field('description'); ?>

            <div class="section investment">
                <div class="container">
                    <div class="row outer-wrap">
                        <div class="col-md-4 col-sm-12 content-wrap">
                            <div class="title-wrap">
                                <?php if($title): ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>

                                <?php if($description): ?>
                                    <?php echo $description; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <?php if( have_rows('membership_avail_listing') ): ?>
                            <?php while( have_rows('membership_avail_listing') ): the_row(); 

                                // Get sub field values.
                                $price = get_sub_field('price');
                                $gst = get_sub_field('gst');
                                $month_membership = get_sub_field('month_membership');
                                $button_link = get_sub_field('button_link'); ?>

                                <div class="col-md-4 col-sm-6 price-wrap">
                                    <div class="card-wrap bg-secondary">
                                        <?php if($price): ?>
                                            <h2><?php echo $price; ?></h2>
                                        <?php endif; ?>
                                        <?php if($gst): ?>
                                            <h6><?php echo $gst; ?></h6>
                                        <?php endif; ?>
                                        <?php if($month_membership): ?>
                                            <p><?php echo $month_membership; ?></p>
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

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('faqs_section') ): ?>
        <?php while( have_rows('faqs_section') ): the_row(); 

            // Get sub field values.
            $title = get_sub_field('title'); ?>


            <div class="section faqs bg-lightblue4">
                <div class="container">
                    <div class="title">
                        <?php if($title): ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif; ?>
                    </div>


                    <?php $cntr = 1; if( have_rows('faqs_listing') ): ?>
                        <div class="accordion" id="accordionExample"> 
                            <?php while( have_rows('faqs_listing') ): the_row(); 
                                $title = get_sub_field('title'); 
                                $description = get_sub_field('description'); ?>

                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading<?php echo $cntr; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $cntr; ?>" aria-expanded="<?php echo ($cntr == 1) ? 'true':'false';  ?>" aria-controls="collapse<?php echo $cntr; ?>">
                                            <?php if($title): ?>
                                                <h6><?php echo $title; ?></h6>
                                            <?php endif; ?>
                                            <span class="icon-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div id="collapse<?php echo $cntr; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $cntr; ?>" data-bs-parent="#accordionExample">
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