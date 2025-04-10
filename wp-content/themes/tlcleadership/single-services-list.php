<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tlcleadership
 */

get_header();
?>

<?php
		while ( have_posts() ) :
			the_post();

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img' );
$banner_small_title = get_field('banner_small_title');
$banner_title = get_field('banner_title');?>

    <div class="banner bg" style="background-image: url('<?php echo $backgroundImg[0];?>');">
        <div class="container">
            <div class="banner-content">
                <h6><?php echo $banner_small_title; ?></h6>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="section leadership-growth">
        <div class="container">
            <div class="row outer-wrap">
                <div class="col-lg-6 col-md-12 content-wrap">
                    <div class="content">
                        <h3>Leadership growth that fits your life</h3>
                        <p>Leadership can be lonely. The weight of decisions, the tough conversations, and the pressure to have all the answers—it’s a lot, and most leaders don’t have a safe space to talk it through.</p>
                        <p>The Group Coaching & Mentoring Membership is your room, filled with leaders who get it. Here, you can bring your biggest challenges, from underperforming staff, difficult conversations, or the feeling of being invisible in your role. You’ll receive real coaching, real answers, and a real plan to move forward.</p>
                        <p>Through hot-seat coaching, live training, and The Leaders' Den library of videos, workbooks, and toolkits, you’ll build the confidence, clarity, and strategies to lead without the stress, second-guessing, or isolation.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/growth-img1.png">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/growth-img2.png">
                </div>
            </div>
        </div>
    </div>


    <div class="section included bg-lightblue4">
        <div class="container">
            <div class="row content-wrap">
                <div class="col-md-6 left">
                    <div class="img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/included-img.png">
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="content">
                        <div class="title">
                            <h4>What’s included?</h4>
                        </div>
                        <div class="title-para">
                            <h6>Monthly live 1-hour group coaching & mentoring session</h6>
                            <p>Join a supportive group of like-minded leaders for guided coaching, actionable insights, and peer collaboration.</p>
                        </div>
                        <div class="title-para">
                            <h6>Leadership library access</h6>
                            <p>Explore a curated collection of videos, tools, and cheat sheets to refine your skills and tackle leadership challenges.</p>
                        </div>
                        <div class="title-para">
                            <h6>Online community support</h6>
                            <p>Connect with a global network of leaders to share experiences, exchange ideas, and find encouragement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section leadership-development for-leaders bg-dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/leadership-banner.png');">
        <div class="container">
            <div class="content-wrap">
                <h4>Who is this for?</h4>
                <p>For leaders committed to continuous personal and professional growth in a structured, supportive environment where they can learn, collaborate, and gain real-world leadership insights.</p>
            </div>
        </div>
    </div>


    <div class="section investment">
        <div class="container">
            <div class="row outer-wrap">
                <div class="col-md-4 col-sm-12 content-wrap">
                    <div class="title-wrap">
                        <h3>Investment</h3>
                        <p>Investing in your leadership development doesn’t have to be complicated or costly.</p>
                        <p>This membership gives you access to expert coaching, valuable resources, and a thriving leadership community for a fraction of the cost of traditional coaching programs.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 price-wrap">
                    <div class="card-wrap bg-secondary">
                        <h2>A$540</h2>
                        <h6>+ GST</h6>
                        <p>6-month membership</p>
                        <div class="btn-wrap">
                            <a href="" class="btn btn-primary">Join for 6 months</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 price-wrap">
                    <div class="card-wrap bg-secondary">
                        <h2>A$900</h2>
                        <h6>+ GST</h6>
                        <p>12-month membership</p>
                        <div class="btn-wrap">
                            <a href="" class="btn btn-primary">Join for 12 months</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section faqs bg-lightblue4">
        <div class="container">
            <div class="title">
                <h3>FAQs</h3>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h6>What topics are covered in the group coaching sessions?</h6>
                            <span class="icon-arrow-right"></span>
                        </button>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>We believe in real conversations and genuine leadership. Our approach is grounded in honesty, self-awareness, and staying true to your values—because authenticity inspires trust.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h6>How do I join the live group coaching sessions?</h6>
                            <span class="icon-arrow-right"></span>
                        </button>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>We believe in real conversations and genuine leadership. Our approach is grounded in honesty, self-awareness, and staying true to your values—because authenticity inspires trust.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h6>How do I access the Leadership Library?</h6>
                            <span class="icon-arrow-right"></span>
                        </button>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>We believe in real conversations and genuine leadership. Our approach is grounded in honesty, self-awareness, and staying true to your values—because authenticity inspires trust.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h6>Is there a minimum commitment?</h6>
                            <span class="icon-arrow-right"></span>
                        </button>
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>We believe in real conversations and genuine leadership. Our approach is grounded in honesty, self-awareness, and staying true to your values—because authenticity inspires trust.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h6>Can I upgrade to a different coaching program later?</h6>
                            <span class="icon-arrow-right"></span>
                        </button>
                    </div>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>We believe in real conversations and genuine leadership. Our approach is grounded in honesty, self-awareness, and staying true to your values—because authenticity inspires trust.</p>
                        </div>
                    </div>
                </div>
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
		<?php endwhile; // End of the loop.
		?>

<?php
get_footer();
