<?php get_header(); ?>

<?php 
	global $post;

	$args = array(
		'numberposts' => -1,
		'category_name' => $post->post_name
	);
	
	$posts = get_posts($args);
?>

<div class="cloud-header">
	<img src=<?= get_stylesheet_directory_uri() . "/public/images/clouds-header.png" ?>>
</div>
<section class="section page-content has-text-centered">
	<h3 class="title is-3"><?=the_title();?></h3>
	<div class="content has-text-left">
		<?=apply_filters('the_content', $post->post_content); ?>
	</div>
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