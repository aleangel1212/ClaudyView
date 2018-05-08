<?php get_header(); ?>

<?php 
	$args = array(
		'numberposts' => -1,
		'category_name' => 'portfolio'
	);
	
	$posts = get_posts($args);
?>

<div class="cloud-header">
	<img src=<?= get_stylesheet_directory_uri()."/public/images/clouds-header.png" ?>>
</div>
<section class="section portfolio-content has-text-centered">
	<?php
		foreach ($posts as $post) {
	?>

		<a href=<?= get_permalink($post) ?>>
			<figure class="image portfolio-image">
			  <img src=<?= get_the_post_thumbnail_url($post) ?>>
			</figure>
		</a>
		
	<?php
		}
	?>
</section>

<?php get_footer(); ?>