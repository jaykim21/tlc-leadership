<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tlcleadership
 */

?>

	<div class="section footer bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="logo-wrap">
						<div class="content">							
							<div class="logo">
								<?php if( have_rows('footer_logo', 'option') ): ?>
									<?php while( have_rows('footer_logo', 'option') ): the_row(); 
										// Get sub field values.
										$image = get_sub_field('image', 'option'); ?>

										<?php
											if( $image ):
												// Thumbnail size attributes.
												$size_img = 'grid-img';
												$thumb_img = $image['sizes'][ $size_img ];
											?>
											<img src="<?php echo $thumb_img;?>">
										<?php endif; ?>
											
									<?php endwhile; ?>
								<?php endif; ?>


								<?php if( have_rows('footer_contact', 'option') ): ?>
									<?php while( have_rows('footer_contact', 'option') ): the_row(); 
										// Get sub field values.
										$title = get_sub_field('title', 'option');
										$contact_info = get_sub_field('contact_info', 'option'); ?>
										
										<div class="content-wrap">
											<div class="title-link">
												<?php if($title): ?>
													<h6><?php echo $title; ?></h6>
												<?php endif; ?>
											</div>
											<div class="content-item">
												<?php if($contact_info): ?>
													<?php echo $contact_info; ?>
												<?php endif; ?>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>


				<?php if( have_rows('footer_quick_links', 'option') ): ?>
					<?php while( have_rows('footer_quick_links', 'option') ): the_row(); 
						// Get sub field values.
						$title = get_sub_field('title', 'option'); ?>

						<div class="col-lg-3 col-md-6">
							<div class="content-wrap">
								<div class="title-link">
									<?php if($title): ?>
										<h6><?php echo $title; ?></h6>
									<?php endif; ?>
								</div>
								<div class="content-item">
									<?php
										wp_nav_menu( array(
											'menu'    => 4,
											'container'         => '',
											'menu_class'        => '',
											'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
											'walker'          => new WP_Bootstrap_Navwalker(),
										) );
									?>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>


				<?php if( have_rows('footer_online_training', 'option') ): ?>
					<?php while( have_rows('footer_online_training', 'option') ): the_row(); 
						// Get sub field values.
						$title = get_sub_field('title', 'option'); ?>

						<div class="col-lg-3 col-md-6">
							<div class="content-wrap">
								<div class="title-link">
									<?php if($title): ?>
										<h6><?php echo $title; ?></h6>
									<?php endif; ?>
								</div>
								<div class="content-item">
									<?php
										wp_nav_menu( array(
											'menu'    => 5,
											'container'         => '',
											'menu_class'        => '',
											'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
											'walker'          => new WP_Bootstrap_Navwalker(),
										) );
									?>
								</div>
							</div>
						</div>
						
					<?php endwhile; ?>
				<?php endif; ?>


				<?php if( have_rows('footer_training', 'option') ): ?>
					<?php while( have_rows('footer_training', 'option') ): the_row(); 
						// Get sub field values.
						$title = get_sub_field('title', 'option'); ?>

						<div class="col-lg-3 col-md-6">
							<div class="content-wrap">
								<div class="title-link">
									<?php if($title): ?>
										<h6><?php echo $title; ?></h6>
									<?php endif; ?>
								</div>
								<div class="content-item">
									<?php
										wp_nav_menu( array(
											'menu'    => 6,
											'container'         => '',
											'menu_class'        => '',
											'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
											'walker'          => new WP_Bootstrap_Navwalker(),
										) );
									?>
								</div>
							</div>
						</div>
						
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>

	<?php if( have_rows('footer_copyright', 'option') ): ?>
		<?php while( have_rows('footer_copyright', 'option') ): the_row(); 
			// Get sub field values.
			$terms_conditions = get_sub_field('terms_conditions', 'option');
			$privacy_policy = get_sub_field('privacy_policy', 'option'); ?>

			<div class="footer-copyright bg-dark2">
				<div class="container">
					<ul>
						<li>© 2025 <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> Group. </li>
						<li>
							<?php if( $terms_conditions ): 
								$button_link_url = $terms_conditions['url'];
								$button_link_title = $terms_conditions['title'];
								$button_link_target = $terms_conditions['target'] ? $terms_conditions['target'] : '_self';
								?>
								
								<a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>"><?php echo $button_link_title; ?></a>
								
							<?php endif; ?>
						</li>

						<li>|</li>

						<li>
							<?php if( $privacy_policy ): 
								$button_link_url = $privacy_policy['url'];
								$button_link_title = $privacy_policy['title'];
								$button_link_target = $privacy_policy['target'] ? $privacy_policy['target'] : '_self';
								?>
								
								<a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>"><?php echo $button_link_title; ?></a>
								
							<?php endif; ?>
						</li>

					</ul>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
