<?php
/**
 * The Homepage template file
 */
?>
<?php get_header();

while ( have_posts() ) : the_post(); 

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img' );
$banner_small_title = get_field('banner_small_title');
$banner_title = get_field('banner_title');
$button_link = get_field('button_link'); ?>

        <div class="banner banner-home bg" style="background-image: url('<?php echo $backgroundImg[0];?>');">
            <div class="container">
                <div class="banner-content">
                    <h6><?php echo $banner_small_title; ?></h6>
                    <h1><?php echo $banner_title; ?></h1>

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



        <?php if( have_rows('vision_section') ): ?>
            <?php while( have_rows('vision_section') ): the_row(); 

                // Get sub field values.
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $description = get_sub_field('description');
                $button_link = get_sub_field('button_link'); ?>
        
                <div class="section vision">
                    <svg class="circle-big" width="298" height="614" viewBox="0 0 298 614" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="-9" cy="307" r="307" fill="#7984C2"/></svg>
                    <div class="container">
                        <div class="title-wrap">
                            <svg class="double-circle" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="42" cy="21" r="21" fill="#1E201F"/><circle cx="21" cy="42" r="21" fill="#A7C4E6"/></svg>
                            <?php if($title): ?>
                                <div class="title">
                                    <div class="line"></div>
                                    <h2><?php echo $title; ?></h2>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="row content-wrap">
                            <?php
                                if( $image ):
                                    // Thumbnail size attributes.
                                    $size_img = 'grid-img';
                                    $thumb_img = $image['sizes'][ $size_img ];
                                ?>
                                <div class="col-md-5 left">
                                    <div class="img-wrap">
                                        <img src="<?php echo $thumb_img;?>">
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-md-7 right">
                                <div class="content">
                                    <?php if($description): ?>
                                        <div class="para">
                                            <?php echo $description; ?>
                                        </div> 
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
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
        

        <?php if( have_rows('conflict_section') ): ?>
            <?php while( have_rows('conflict_section') ): the_row(); 

                // Get sub field values.
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $description = get_sub_field('description');
                $button_link = get_sub_field('button_link'); ?>

                <div class="section conflict bg-lightblue4">
                    <img class="svg" src="<?php echo get_template_directory_uri(); ?>/assets/images/conflict-svg.svg">
                    <div class="container">
                        <div class="row content-wrap">
                            <div class="col-md-6 left">
                                <div class="content">
                                    <?php if($title): ?>
                                        <h2><?php echo $title; ?></h2>
                                    <?php endif; ?>

                                    <?php if($description): ?>
                                        <div class="para">
                                            <?php echo $description; ?>
                                        </div> 
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

                            <?php
                                if( $image ):
                                    // Thumbnail size attributes.
                                    $size_img = 'grid-img';
                                    $thumb_img = $image['sizes'][ $size_img ];
                                ?>
                                <div class="col-md-6 right">
                                    <div class="img-wrap">
                                        <img src="<?php echo $thumb_img;?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('leadership_coaching_section') ): ?>
            <?php while( have_rows('leadership_coaching_section') ): the_row(); 

                // Get sub field values.
                $title = get_sub_field('title'); ?>                                       
        

                <div class="section leadership-coaching">
                    <div class="container">
                        <?php if($title): ?>
                            <div class="title">
                                <h2><?php echo $title; ?></h2>
                            </div>
                        <?php endif; ?>

                        <?php if( have_rows('services_listing') ): ?>
                            <div class="row outer-wrap">
                                <?php while( have_rows('services_listing') ): the_row(); 

                                    // Get sub field values.
                                    $title = get_sub_field('title');
                                    $image = get_sub_field('image');
                                    $description = get_sub_field('description');
                                    $button_link = get_sub_field('button_link'); ?> 

                                    <div class="col-md-4 card-wrap">
                                        <div class="content-wrap bg-secondary">
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

                                            <div class="content">
                                                <?php if($title): ?>
                                                    <h6><?php echo $title; ?></h6>
                                                <?php endif; ?>

                                                <?php if($description): ?>
                                                    <p><?php echo $description; ?></p>
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
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        


        
        <?php if( have_rows('leader_development_section') ): ?>
            <?php while( have_rows('leader_development_section') ): the_row(); 

                // Get sub field values.
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $button_link = get_sub_field('button_link'); ?>   

                <?php
                    if( $image ):
                        // Thumbnail size attributes.
                        $size_img = 'grid-img';
                        $thumb_img = $image['sizes'][ $size_img ];
                    ?>

                    <div class="section leadership-development bg-dark" style="background-image: url('<?php echo $thumb_img;?>');">
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




        <?php if( have_rows('about_us_section') ): ?>
            <?php while( have_rows('about_us_section') ): the_row(); 

                // Get sub field values.
                $image = get_sub_field('image');
                $small_title = get_sub_field('small_title');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $button_link = get_sub_field('button_link'); ?>   

                <div class="section about-us">
                    <svg class="about-circle" width="320" height="614" viewBox="0 0 320 614" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="307" cy="307" r="307" fill="#7984C2"/></svg>
                    <div class="container">
                        <div class="outer-wrap">
                            <div class="left">
                                <div class="row">
                                    <?php if( $image ):
                                            // Thumbnail size attributes.
                                            $size_img = 'grid-img';
                                            $thumb_img = $image['sizes'][ $size_img ];
                                        ?>
                                        <div class="col-md-8 img-wrap">
                                            <img src="<?php echo $thumb_img;?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7 content-wrap">
                                        <div class="content bg-white">
                                            <div class="title">
                                                <?php if($small_title): ?>
                                                    <h6><?php echo $small_title; ?></h6>
                                                <?php endif; ?>
                                                <?php if($title): ?>
                                                    <h2><?php echo $title; ?></h2>
                                                <?php endif; ?>
                                            </div>

                                            <?php if($description): ?>
                                                <div class="para">
                                                    <?php echo $description; ?>
                                                </div> 
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
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>



        <?php if( have_rows('organizations_section') ): ?>
            <?php while( have_rows('organizations_section') ): the_row(); 

                // Get sub field values.
                $title = get_sub_field('title'); ?>   


                <div class="section partners bg-lightblue4">
                    <div class="container">
                        <div class="title">
                            <?php if($title): ?>
                                <h5><?php echo $title; ?></h5>
                            <?php endif; ?>
                        </div>
                        
                        <?php if( have_rows('logo_listing') ): ?>
                            <ul class="content-wrap"> 
                                <?php while( have_rows('logo_listing') ): the_row(); 

                                    // Get sub field values.
                                    $image = get_sub_field('logo_image'); ?>   


                                    <?php if( $image ):
                                        // Thumbnail size attributes.
                                        $size_img = 'grid-img';
                                        $thumb_img = $image['sizes'][ $size_img ];
                                        ?>

                                        <li class="logo-wrap">
                                            <img src="<?php echo $thumb_img;?>">
                                        </li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>





        <?php if( have_rows('leadership_framework') ): ?>
            <?php while( have_rows('leadership_framework') ): the_row(); 

                // Get sub field values.
                $title = get_sub_field('title'); 
                $description = get_sub_field('description'); 
                $image = get_sub_field('image'); ?>   

                <div class="section leadership-framework">
                    <div class="container">
                        <div class="title-wrap">
                            <?php if($title): ?>
                                <h4><?php echo $title; ?></h4>
                            <?php endif; ?>

                            <?php if($description): ?>
                                <?php echo $description; ?>
                            <?php endif; ?>
                        </div>

                        <div class="row outer-wrap">
                            <div class="col-md-4 content-wrap">

                                <?php if( have_rows('lead_self') ): ?>
                                    <?php while( have_rows('lead_self') ): the_row(); 
                                        // Get sub field values.
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        ?>

                                        <div class="content">
                                            <?php if($title): ?>
                                                <h6><?php echo $title; ?></h6>
                                            <?php endif; ?>
                                            <?php if($description): ?>
                                                <p><?php echo $description; ?></p>
                                            <?php endif; ?>
                                        </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>


                                <?php if( have_rows('lead_others') ): ?>
                                    <?php while( have_rows('lead_others') ): the_row(); 
                                        // Get sub field values.
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        ?>

                                        <div class="content">
                                            <?php if($title): ?>
                                                <h6><?php echo $title; ?></h6>
                                            <?php endif; ?>
                                            <?php if($description): ?>
                                                <p><?php echo $description; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        
                                    <?php endwhile; ?>
                                <?php endif; ?>
            
                            </div>

                            <div class="col-md-4 img-wrap">
                                <?php if( $image ):
                                    // Thumbnail size attributes.
                                    $size_img = 'grid-img';
                                    $thumb_img = $image['sizes'][ $size_img ];
                                    ?>
                                    <img src="<?php echo $thumb_img;?>">
                                <?php endif; ?>
                            </div>

                            <div class="col-md-4 content-wrap">

                                <?php if( have_rows('lead_culture') ): ?>
                                    <?php while( have_rows('lead_culture') ): the_row(); 
                                        // Get sub field values.
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        ?>

                                        <div class="content">
                                            <?php if($title): ?>
                                                <h6><?php echo $title; ?></h6>
                                            <?php endif; ?>
                                            <?php if($description): ?>
                                                <p><?php echo $description; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if( have_rows('lead_results') ): ?>
                                    <?php while( have_rows('lead_results') ): the_row(); 
                                        // Get sub field values.
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        ?>

                                        <div class="content">
                                            <?php if($title): ?>
                                                <h6><?php echo $title; ?></h6>
                                            <?php endif; ?>
                                            <?php if($description): ?>
                                                <p><?php echo $description; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>



        <?php if( have_rows('approach_section') ): ?>
            <?php while( have_rows('approach_section') ): the_row(); 

                // Get sub field values.
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $description = get_sub_field('description'); ?>

                <?php if( $image ):
                    // Thumbnail size attributes.
                    $size_img = 'grid-img';
                    $thumb_img = $image['sizes'][ $size_img ];
                    ?>

                    <div class="section approach bg" style="background-image: url('<?php echo $thumb_img;?>">
                        <div class="container">
                            <div class="content-wrap">
                                <div class="content bg-secondary">
                                    <svg class="circle" width="305" height="308" viewBox="0 0 305 308" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="35" cy="270" r="270" fill="#5E6BB6"/></svg>
        
                                    <?php if($title): ?>
                                        <h5><?php echo $title; ?></h5>
                                    <?php endif; ?>
                                    <?php if($description): ?>
                                        <?php echo $description; ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('results_section') ): ?>
            <?php while( have_rows('results_section') ): the_row(); ?>   

                <div class="section results">
                    <div class="container">
                        <div class="row content-wrap">

                            <?php if( have_rows('left_content_approach') ): ?>
                                <?php while( have_rows('left_content_approach') ): the_row(); 

                                    // Get sub field values.
                                    $title = get_sub_field('title'); ?>

                                    <div class="col-md-6 left">
                                        <div class="outer-wrap">
                                            
                                            <?php if($title): ?>
                                                <div class="title">
                                                    <h4><?php echo $title; ?></h4>
                                                </div>
                                            <?php endif; ?>
                                            

                                            <?php if( have_rows('approach_set') ): ?>
                                                <div class="content">
                                                    <?php while( have_rows('approach_set') ): the_row(); 

                                                        // Get sub field values.
                                                        $title = get_sub_field('title');
                                                        $description =get_sub_field('description'); ?>   

                                                        <div class="content-set">
                                                            <div class="dot-wrap">
                                                                <div class="dot"></div>
                                                            </div>
                                                            <div class="text-wrap">
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


                            <?php if( have_rows('right_content_approach') ): ?>
                                <?php while( have_rows('right_content_approach') ): the_row(); ?>

                                    <div class="col-md-6 right">

                                        <?php if( have_rows('approach_set') ): ?>
                                            <div class="content">
                                                <?php while( have_rows('approach_set') ): the_row(); 

                                                    // Get sub field values.
                                                    $title = get_sub_field('title');
                                                    $description =get_sub_field('description'); ?>   

                                                    <div class="content-set">
                                                        <div class="dot-wrap">
                                                            <div class="dot"></div>
                                                        </div>
                                                        <div class="text-wrap">
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

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>


            <?php endwhile; ?>
        <?php endif; ?>

        
        <?php if( have_rows('testimonials_section') ): ?>
            <?php while( have_rows('testimonials_section') ): the_row(); 
                // Get sub field values.
                $small_title = get_sub_field('small_title');
                $title = get_sub_field('title'); ?>   

                <div class="section testimonials bg-purple3">
                    <div class="container">

                        <div class="title">
                            <?php if($small_title): ?>
                                <h6><?php echo $small_title; ?></h6>
                            <?php endif; ?>
                            <?php if($title): ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>
                        </div>


                        <?php if( have_rows('testimony_set') ): ?>
                            <div class="row content-wrap">
                                <?php while( have_rows('testimony_set') ): the_row(); 
                                    // Get sub field values.
                                    $testimony = get_sub_field('testimony');
                                    $name = get_sub_field('name'); ?> 

                                    <div class="col-md-6 outer-wrap">
                                        <div class="inner-wrap bg-white">
                                            <div class="star-wrap">
                                                <span class="icon-star-full"></span>
                                                <span class="icon-star-full"></span>
                                                <span class="icon-star-full"></span>
                                                <span class="icon-star-full"></span>
                                                <span class="icon-star-full"></span>
                                            </div>

                                            <?php if($testimony): ?>
                                                <div class="text-wrap">
                                                    <p><?php echo $testimony; ?></p>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($name): ?>
                                                <div class="name-wrap">
                                                    <h6><?php echo $name; ?></h6>
                                                </div>
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

        <?php if( have_rows('blog_section') ): ?>
            <?php while( have_rows('blog_section') ): the_row();

                $title = get_sub_field('title'); 
                $small_title = get_sub_field('small_title');
                $description = get_sub_field('description'); ?>

                <div class="section blog">
                    <div class="container">
                        <div class="row title-wrap">
                            <div class="col-md-6 title">
                                <?php if($small_title): ?>
                                    <h6><?php echo $small_title; ?></h6>
                                <?php endif; ?>
                                <?php if($title): ?>
                                    <h2><?php echo $title; ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 text">
                                <?php if($description): ?>
                                    <p><?php echo $description; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row blog-card-wrap">

                            <?php
                                $args = array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 3,
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
       

    <?php  endwhile; ?>

<?php  get_footer();