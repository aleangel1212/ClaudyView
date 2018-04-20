<?php
/**
 * The Front Page Template
 *
 * I wish it was more explicit how this worked, other than "Name it front-page.php and it
 * will change the front page." Edit this to change the front page.
 *
 * @package cah-starter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">
			
			<div>
				<div class="field">
				  <label class="label">Label</label>
				  <div class="control">
				    <input class="input" type="text" placeholder="Text input">
				  </div>
				  <p class="help">This is a help text</p>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

?>