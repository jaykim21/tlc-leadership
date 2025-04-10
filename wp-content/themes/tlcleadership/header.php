<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tlcleadership
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 
	$header_button_link = get_field('header_login_button','option'); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tlcleadership' ); ?></a>

	<div class="mobile-nav" style="visibility: hidden">
		<div class="mobile-nav-content">
			<div class="container">
				<div class="mobile-top">
					<?php if ( has_custom_logo()) : ?>
						<div class="navbar-brand navbar-brand-white"><?php the_custom_logo(); ?></div>
					<?php endif; ?>

					<button class="hamburger-menu">
						<div class="circle-menu"></div>
					</button>
				</div>

				<div class="mobile-body">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'         => '',
							'menu_class'        => '',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
					?>
				</div>

				<div class="log-in">
					<?php if( $header_button_link ): 
						$button_link_url = $header_button_link['url'];
						$button_link_title = $header_button_link['title'];
						$button_link_target = $header_button_link['target'] ? $header_button_link['target'] : '_self';
						?>
						<div class="btn-wrap">
							<a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" class="btn btn-secondary"><?php echo $button_link_title; ?></a>
						</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>

	<nav id="header" class="navbar navbar-expand-lg navbar-top">
		<div class="container">

			<?php if ( has_custom_logo()) : ?>
				<div class="navbar-brand">
					<?php the_custom_logo(); ?>		
				</div>
			<?php endif; ?>

			<button class="hamburger-menu">
				<div class="circle-menu">
					<span></span>
				</div>
			</button>

			<div id="navbar" class="collapse navbar-collapse">
				<?php
					// Loading WordPress Custom Menu (theme_location).
					wp_nav_menu(
						array(
							'menu_class'     => 'navbar-nav ms-auto',
							'container'      => '',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);?>
			</div><!-- /.navbar-collapse -->

			<div class="log-in">
				<?php if( $header_button_link ): 
					$button_link_url = $header_button_link['url'];
					$button_link_title = $header_button_link['title'];
					$button_link_target = $header_button_link['target'] ? $header_button_link['target'] : '_self';
					?>
					<div class="btn-wrap">
						<a href="<?php echo esc_url( $button_link_url ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" class="btn btn-secondary"><?php echo $button_link_title; ?></a>
					</div>
				<?php endif; ?>
			</div>

		</div>
	</nav><!-- /#header -->
