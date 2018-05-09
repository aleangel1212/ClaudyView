<?php 
	get_header();
	the_post();
?>

<div class="cloud-header">
	<img src=<?= get_stylesheet_directory_uri() . "/public/images/clouds-header.png" ?>>
</div>
<section class="section portfolio-content">
	<div class="columns">
		<div class="column">
			<a href="<?= the_post_thumbnail_url() ?>">
				<figure class="image portfolio-image">
				  <img src=<?= the_post_thumbnail_url() ?>>
				</figure>
			</a>
		</div>
		<div class="column">
			<h3 class="title is-3 has-text-cursive"><?= the_title() ?></h3>
			<h5 class="subtitle"><?= the_date() ?></h5>
			<div class="content">
				<?= the_content() ?>	
			</div>
			<br/>
			<a class="button is-text">
			    <span class="icon is-small">
			      <i class="fa fa-envelope"></i>
			    </span>
			    <span>claudyviewvisions@gmail.com</span>
			</a>
			<a class="button is-text">
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
