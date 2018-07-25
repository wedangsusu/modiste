<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modiste
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tailor-marketplace' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-md navbar-light">
			<div class="container">
				<div class="d-flex flex-nowrap justify-content-between align-items-center w-100">
					<div class="d-lg-none d-md-none navbar-mobile">
						<div class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         <i class="fa fa-bars" aria-hidden="true"></i>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					         <?php 
					         wp_nav_menu( array(
				                'theme_location'    => 'menu-mobile',
				                'depth'             => 2,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				                'walker'            => new WP_Bootstrap_Navwalker())
				            );	
					         ?>
					        </div>
					    </div>
					</div>
					<div class="navbar-brand mr-0">
						<?php 
						if( function_exists( 'the_custom_logo' ) ) {
							if(has_custom_logo()) {
								the_custom_logo();
							} else { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php }
						}
						?>
			
					</div>
					<div class="d-lg-none d-md-none navbar-mobile">
						<div class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					        <i class="fa fa-sign-in" aria-hidden="true"></i>
					        </a>
					        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					        	<?php global $user_ID, $user_identity; get_currentuserinfo(); if (!$user_ID) { ?>
					        		<form method="post" action="<?php echo get_site_url(); ?>/wp-login.php" class="wp-user-form">
  												<div class="form-group">
    												<input type="text" class="form-control" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" placeholder="User">
  												</div>
												<div class="form-group">
												    <input type="password" class="form-control" name="pwd" id="user_pass" placeholder="Password">
												</div>
												<div class="form-group">
  													<div class="rememberme">
														<label for="rememberme">
															<input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> Remember me
														</label>
													</div>
												</div>
												<?php do_action('login_form'); ?>
													<input type="submit" name="user-submit" value="<?php _e('Login'); ?>" tabindex="14" class="btn btn-primary btn-block" />
													<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
													<input type="hidden" name="user-cookie" value="1" />
											</form>
											<?php } else { // is logged in ?>
											<div class="sidebox">		
												<?php 
													wp_nav_menu( array(
										                'theme_location'    => 'menu-login',
										                'depth'             => 2,
										                'container'         => 'div',
										                'menu_class'        => 'nav navbar-nav',
										                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										                'walker'            => new WP_Bootstrap_Navwalker())
										            );		
												?>
												<div class="p-2"><a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="btn btn-primary btn-block">Logout</a></div>
											</div>
					        	<?php } ?>	
					        </div>
					    </div>
					</div>
					<div class="collapse navbar-collapse" id="navbarsExampleDefault">
						<?php
							wp_nav_menu( array(
				                'menu'              => 'main-menu',
				                'theme_location'    => 'navbar',
				                'depth'             => 2,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav ml-auto',
				                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				                'walker'            => new WP_Bootstrap_Navwalker())
				            );

				            wp_nav_menu( array(
				                'theme_location'    => 'menu-login',
				                'depth'             => 2,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				                'walker'            => new WP_Bootstrap_Navwalker())
				            );	
						?>
					</div>			
				</div>	
			</div>
		</nav>
	</header><!-- #masthead -->
	<?php 
	
	
	//if ( is_front_page() && is_home() ) {
	  // Default homepage
	//} elseif ( is_front_page() ) {
	  // static homepage
	  // blog page
	//} else {
	  //include"inc/breadcrumb.php";
	//}
	?>
	<div id="content" class="site-content">
