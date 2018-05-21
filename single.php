<?php 
	get_header();
	the_post();
?>

<div class="cloud-header">
	<img src=<?= get_stylesheet_directory_uri() . "/public/images/clouds-header.png" ?>>
</div>
<section class="section single-page">
	<div class="columns <?= (in_category('blog') ? 'vertical' : '') ?>">
		
		<?php if(has_post_thumbnail()): ?>
			<div class="column">
				<a href="<?= the_post_thumbnail_url(); ?>">
					<figure class="image single-image">
					  <img src=<?= the_post_thumbnail_url(); ?>>
					</figure>
				</a>
			</div>
		<?php endif; ?>

		<div class="column single-content">
			<h3 class="title is-3"><?= the_title(); ?></h3>
			<h5 class="subtitle"><?= the_date(); ?></h5>
			<div class="content">
				<?= the_content(); ?>	
			</div>
			<br/>
			<a href="mailto:claudyviewvisions@gmail.com" class="button is-text">
			    <span class="icon is-small">
			      <i class="fa fa-envelope"></i>
			    </span>
			    <span>claudyviewvisions@gmail.com</span>
			</a>
			<a href="https://www.instagram.com/claudyview/" class="button is-text">
			    <span class="icon is-small">
			      <i class="fa fa-instagram"></i>
			    </span>
			    <span>@claudyview</span>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
