<?php
/**
 * The Header template for ACC Rebuilders
 * Displays a single page.
 *
 * @package WordPress
 * @subpackage ACC_REBUILDERS
 */

/**
* Get Post Information
**/
$post = get_post();

?>
<?= get_header() ?>

	<div id="content">
		<div class="container">
				<div class="row">
					<div class="span-12">
						<h1><?= get_the_title() ?></h1>
						<?= $post->post_content ?>
					</div>
				</div>
		</div>
	</div>

<?= get_footer() ?>