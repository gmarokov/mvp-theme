<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvp
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="<?php bloginfo( 'name' ); ?>">    
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="favicon.ico">  
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<div class="overlay"></div>
		<!-- Sidebar navigation-->
		<nav class="navbar navbar-inverse navbar-fixed-top <?php echo is_user_logged_in() ? "sidebar-nav-logged" : ""; ?>" id="sidebar-wrapper" role="navigation">
			<?php 	
				wp_nav_menu( array( 
					'theme_location' => 'sidebar-menu', 
					'menu_id' => 'primary-menu', 
					'menu_class' => 'nav sidebar-nav ') ); 
			?>
		</nav>

		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mvp' ); ?></a>
			<header id="masthead" class="site-header">
				<div class="container">                       
					<img class="profile-image img-responsive img-circle pull-left" src="<?php echo get_template_directory_uri();?>/images/profile.png" alt="James Lee" />
					<div class="profile-content pull-left">
						<h1 class="name"><?php bloginfo( 'name' ); ?></h1> 
						<h2 id="description-title" class="desc"><?php //echo get_bloginfo( 'description', 'display' ); ?>
							<span>WEB DEV</span><b id="cursor">_</b>
						</h2>
						<ul class="social list-inline">
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
							<li><a class="facebook" href="https://facebook.com/georgi.marokov" target="_blank"><i class="fa fa-facebook"></i></a></li>                     
							<li><a class="gplus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="github" href="#"><i class="fa fa-github-alt"></i></a></li>                  
							<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>                    
						</ul> 
					</div><!--//profile-->
					<div class="buttons-menu pull-right">           			
						<button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas"> 
							<span class="hamb-top"></span> 
							<span class="hamb-middle"></span>
							<span class="hamb-bottom"></span>
						</button>
					</div><!--//buttons menu-->
				</div><!--//container-->
			</header><!--//header-->

			<div id="content" class="container sections-wrapper">
				<div class="row">
