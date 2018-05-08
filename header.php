<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cah-starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // All scripts should be loaded in functions.php using cah_starter_scripts() or equivalent ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<header id="masthead" class="header" role="banner">
		<nav class="level">
		  <p class="level-item nav-cloud">
		    <a href=<?= get_permalink( get_page_by_path( 'blog' ) )?> class="link">Blog</a>
		  </p>
		  <p class="level-item nav-cloud is-size-4">
		    <a href=<?= get_permalink( get_page_by_path( 'comics' ) )?> class="link">Comics</a>
		  </p>
		  <p class="level-item nav-cloud is-size-3">
		    <a href=<?= get_permalink( get_page_by_path( 'portfolio' ) )?> class="link">Portfolio</a>
		  </p>
		  <p class="level-item nav-cloud is-size-4">
		    <a href=<?= get_permalink( get_page_by_path( 'bio' ) )?> class="link">Bio</a>
		  </p>
		  <p class="level-item nav-cloud">
		    <a href=<?= get_permalink( get_page_by_path( 'characters' ) )?> class="link">Characters</a>
		  </p>
		</nav>
	</header>

	<section id="content" class="section">
