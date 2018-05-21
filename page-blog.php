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

	<?php if($post->post_content != ''): ?>
		<div class="content has-text-left">
			<?=apply_filters('the_content', $post->post_content); ?>
		</div>
	<?php endif; ?>

	<div class="blog-posts">
		<?php
			foreach ($posts as $post) {
		?>	
			<hr/>
			<div class="box blog-box">
				<a href=<?= get_permalink($post) ?>>
				  <article class="media">

				  	<?php if(has_post_thumbnail()): ?>
					    <div class="media-left">
					      <figure class="image is-64x64">
					        <img src=<?= get_the_post_thumbnail_url($post) ?>>
					      </figure>
					    </div>
					<?php endif; ?>

				    <div class="media-content">
				      <div class="content">
				        <p>
				          <strong><?= $post->post_title; ?></strong>
				          <br/>
				          <small><?= get_the_date('M j, Y', $post->ID); ?></small>
				          <br/>
				          <?= substr($post->post_content, 0, 300) . (strlen($post->post_content) > 300 ? '...' : '') ?>
				        </p>
				      </div>
				    </div>
				  </article>
				</a>
			</div>
		<?php
			}
		?>
	</div>
</section>

<?php get_footer(); ?>