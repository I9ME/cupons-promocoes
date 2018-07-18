<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>


	
<div id="page" class="Site">
	<header id="masthead" class="Site-header u-alignCenter u-positionAbsolute u-sizeFull u-displayFlex u-flexJustifyContentCenter is-animating u-zIndex20">
		
		<!-- Logo do site -->
		<div class="Site-header-branding u-displayInlineBlock u-positionRelative u-alignCenter"> 
			<?php  get_template_part('template-parts/header/header','branding');?>
		</div>
		

	</header><!-- #masthead -->
		<div style="width:100%;margin-top:210px;float:left;position: relative;z-index: 9;text-align: center;">
			<?php 
				if ( is_user_logged_in() ) {
				      global $current_user;
				      get_currentuserinfo();
				      $user = wp_get_current_user();
				
				      echo '<div class="user" id="user-logged">
				      			<a href="http://localhost/barneys-cupons/member-account/" title="Minha Conta"> 
				      			<span>Olá,' . $current_user->user_login . '</span>'.
				      			'<div class="user__img">'. 
				      				'<img src=' .  esc_url( get_avatar_url( $user->ID ) ) .' />'.
								'</div>'.
								'<ul class="user__menu wow fadeInRight">
									<li><a href="http://localhost/barneys-cupons/member-login/">Painel</a></li>
									<li><a href="http://localhost/barneys-cupons/member-account/">Minha Conta</a></li>
									<li><a href="http://localhost/barneys-cupons/wp-login.php?action=logout&amp;_wpnonce=e19042a83a">Sair</a></li>
								</ul>
								
				      		</a>
				      		</div>';
							
				      
				  } else {
				      echo '<div class="user">
				      			<ul class="user__menu wow fadeInRight">
									<li><a href="http://localhost/barneys-cupons/member-register/">Registrar</a></li>
									<li><a href="http://localhost/barneys-cupons/member-login/">Login</a></li>
									<li><a href="http://localhost/barneys-cupons/wp-login.php?action=logout&amp;_wpnonce=e19042a83a">Sair</a></li>
								</ul>
				      			
				      			<div class="user__img">'. 
				      				get_avatar( get_the_author_meta(), '96' ) .
							 	'</div></a>'.
							'</div>';
				  }
				
			?>
			
			
		</div>
	

	<div class="Site-container">
		<div id="content" class="Site-container-content">
