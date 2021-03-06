<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prep-expert
 */

$logo_id = carbon_get_theme_option( 'prep_expert_logo' );
$logo = wp_get_attachment_url( $logo_id );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta name="description" content="This is the first version of the Prep Expert Site" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'prep_expert_core' ); ?></a>
			<header>
				<nav class="navbar navbar-expand-lg navbar-light mobile-main-nav">
					<div class="container">
						<a class="navbar-brand" href="https://prepexpert.com">
<!--							<span class="sr-only"></span>-->
							<svg style="width:300px; height: auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 400"><title>Prep Expert</title><path d="M648.57 294.07V139.52c0-6.06-4.48-11.18-10.49-11.99l-29.2-3.91v120.8l-114.91 32.91-2.16.62c-5.53 2.07-9.46 7.4-9.46 13.65 0 2.64.7 5.13 1.95 7.26.64 1.11 1.42 2.13 2.32 3.04 2.64 2.64 6.26 4.27 10.29 4.27h139.57c6.68-.01 12.09-5.42 12.09-12.1z" fill="#e06548"/> <path d="M619.76 261.88V105.94c0-7.47-6.71-13.16-14.09-11.93L492.45 112.9c-5.83.97-10.1 6.02-10.1 11.93V291.6c0 2.64.7 5.13 1.95 7.26 1.66-2.93 4.32-5.2 7.51-6.4.7-.27 1.43-.47 2.16-.62l115.56-18.01c5.89-.92 10.23-5.99 10.23-11.95z" fill="#e5826b"/> <path d="M301.39 294.07V139.52c0-6.06 4.48-11.18 10.49-11.99l29.2-3.91v120.8l114.91 32.91 2.16.62c5.53 2.07 9.46 7.4 9.46 13.65 0 2.64-.7 5.13-1.95 7.26-.64 1.11-1.42 2.13-2.32 3.04-2.64 2.64-6.26 4.27-10.29 4.27H313.48c-6.68-.01-12.09-5.42-12.09-12.1z" fill="#107896"/> <path d="M330.2 261.88V105.94c0-7.47 6.71-13.16 14.08-11.93l113.23 18.89c5.83.97 10.1 6.02 10.1 11.93V291.6c0 2.64-.7 5.13-1.95 7.26-1.66-2.93-4.32-5.2-7.51-6.4-.7-.27-1.43-.47-2.16-.62l-115.56-18.01a12.094 12.094 0 01-10.23-11.95z" fill="#3e91a9"/> <path fill="#233741" d="M776.78 213.47c-2.86 5.44-7.25 9.83-13.17 13.16-5.92 3.34-13.27 5.01-22.05 5.01h-16.23v40.7h-26.18V158.96h42.41c8.57 0 15.82 1.56 21.74 4.68 5.92 3.12 10.36 7.43 13.32 12.92 2.96 5.49 4.44 11.79 4.44 18.9.01 6.57-1.42 12.58-4.28 18.01zm-26.03-7.51c2.45-2.48 3.67-5.98 3.67-10.5s-1.22-8.02-3.67-10.5c-2.45-2.48-6.18-3.71-11.18-3.71h-14.24v28.43h14.24c5.01 0 8.73-1.24 11.18-3.72zM849.66 272.35l-22.35-42.8h-6.28v42.8h-26.18V158.96h43.94c8.47 0 15.69 1.56 21.66 4.68 5.97 3.12 10.44 7.41 13.4 12.84 2.96 5.44 4.44 11.5 4.44 18.17 0 7.54-2.02 14.27-6.05 20.19-4.03 5.92-9.98 10.12-17.84 12.6l24.8 44.9h-29.54zM821.03 210h16.23c4.8 0 8.39-1.24 10.79-3.72 2.4-2.48 3.6-5.98 3.6-10.5 0-4.31-1.2-7.7-3.6-10.18-2.4-2.48-6-3.71-10.79-3.71h-16.23V210zM921.01 181.09v22.94h35.06v21.32h-35.06v24.88h39.65v22.13h-65.83v-113.4h65.83v22.13h-39.65zM1058.24 213.47c-2.86 5.44-7.25 9.83-13.17 13.16-5.92 3.34-13.27 5.01-22.05 5.01h-16.23v40.7h-26.18V158.96h42.41c8.57 0 15.82 1.56 21.74 4.68 5.92 3.12 10.36 7.43 13.32 12.92 2.96 5.49 4.44 11.79 4.44 18.9.01 6.57-1.42 12.58-4.28 18.01zm-26.02-7.51c2.45-2.48 3.67-5.98 3.67-10.5s-1.22-8.02-3.67-10.5c-2.45-2.48-6.18-3.71-11.18-3.71h-14.24v28.43h14.24c5 0 8.73-1.24 11.18-3.72zM1143.77 173.75v-14.79h-62.01v113.39h62.01v-14.79h-42.84v-35.99h37.88v-13.92h-37.88v-33.89h42.84zM1214.23 216.24l34.21-57.28h-21.39l-22.94 41.39-26.1-41.39h-22.13l35.12 55.58-34.53 57.81h21.38l23.28-41.9 26.41 41.9h22.14l-35.45-56.11zM1339.88 175.59c-2.74-5.09-6.96-9.16-12.51-12.09-5.71-3.01-12.9-4.54-21.37-4.54h-41.25v113.39h19.17v-43.98h22.09c8.66 0 15.92-1.62 21.58-4.82 5.6-3.15 9.78-7.31 12.43-12.37 2.72-5.19 4.11-11.03 4.11-17.34 0-6.86-1.43-13.01-4.25-18.25zm-20.7 32.8c-1.77 1.78-3.98 3.14-6.58 4.04-2.53.87-5.48 1.32-8.74 1.32h-19.94v-39.83h19.94c6.63 0 11.79 1.8 15.32 5.37 3.5 3.54 5.29 8.45 5.29 14.55 0 6.11-1.79 11.01-5.29 14.55zM1424.07 173.75v-14.79h-62.01v113.39h62.01v-14.79h-42.84v-35.99h37.88v-13.92h-37.88v-33.89h42.84zM1505.06 224.05c7.45-2.35 13.12-6.33 16.87-11.83 3.82-5.6 5.75-12.08 5.75-19.25 0-6.39-1.43-12.26-4.25-17.46-2.74-5.04-6.97-9.08-12.57-12.01-5.77-3.02-12.94-4.55-21.31-4.55h-42.91v113.39h19.18v-46.25h14.1l24.15 46.25h21.44l-25.75-46.63 5.3-1.66zm-39.24-9.94v-39.48h22.09c6.45 0 11.47 1.82 14.94 5.41 3.42 3.53 5.16 8.3 5.16 14.16 0 6.1-1.74 10.98-5.16 14.51-3.46 3.58-8.5 5.41-14.94 5.41h-22.09zM1537.9 158.96v14.79h30.76v98.6h19.18v-98.6h30.76v-14.79h-80.7z"></path></svg>
						</a>
						<div class="collapse navbar-collapse" id="navbarNav">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navbar-nav',
							'add_li_class'   => 'nav-item',
							'add_a_class'  => 'nav-link text-dark text-uppercase fw-bold p-10',
						) );
						?>
						</div>
					</div>
				</nav> <!-- #site-navigation -->
			</header>
