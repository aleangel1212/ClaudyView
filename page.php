<?php get_header(); ?>

<?php 
	global $post;

	$args = array(
		'numberposts' => -1,
		'category_name' => $post->post_name
	);
	
	$posts = get_posts($args);
?>

<?php if($post->post_name == 'portfolio' || $post->post_name == 'animatics'): ?>
<nav class="level is-mobile sub-nav">
	<p class="level-item sub-nav-cloud">
		<a href=<?= get_permalink( get_page_by_path( 'portfolio' ) )?> class="link">Portfolio</a>
	</p>
	<p class="level-item sub-nav-cloud is-size-4">
		<a href=<?= get_permalink( get_page_by_path( 'portfolio/animatics' ) )?> class="link">Animatics</a>
	</p>
</nav>
<?php endif; ?>

<div class="cloud-header">
	<img src=<?= get_stylesheet_directory_uri() . "/public/images/clouds-header.png" ?>>
</div>
<section class="section page-content has-text-centered">
	<h3 class="title is-3"><?=the_title();?></h3>

	<?php if($post->post_content != ''): ?>
		<div class="content has-text-left">
			<?=apply_filters('the_content', $post->post_content); ?>
		</div>
	<?php endif; ?>
	
	<?php
		foreach ($posts as $post) {
	?>

		<a href=<?= get_permalink($post) ?>>
			<figure class="image page-thumbnail">
			  <img src=<?= get_the_post_thumbnail_url($post) ?>>
			</figure>
		</a>
		
	<?php
		}
	?>
</section>

<?php get_footer(); ?>