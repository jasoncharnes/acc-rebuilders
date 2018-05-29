<?php
/**
 * The Header template for ACC Rebuilders
 * Displays a single page with custom post meta.
 *
 * @package WordPress
 * @subpackage ACC_REBUILDERS
 */

/**
* Get Post Information
**/
$post = get_post();
$post_meta = get_post_meta( $post->ID );
$post_meta_keys = get_post_custom_keys();

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
				<br>
				<div class="row">
					<?php foreach ($post_meta_keys as $key => $value) : ?>
						<?php if ( $key != 0 && $key != 1 ) : ?>
							<div class="span4">
								<h3><?= $value ?></h3>
								<p><?= $post_meta[$value][0] ?></p>
							</div>
						<?php endif ?>
					<?php endforeach ?>
				</div>
		</div>
	</div>

<?= get_footer() ?>