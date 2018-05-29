<?php
/**
 * The Header template for ACC Rebuilders
 * Displays a single page for Contact Us.
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
			<h1><?= get_the_title() ?></h1>
			<div class="row">
				<div class="span7">
					<?= $post->post_content ?>
				</div>
				<div class="span5">
					<?php
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
					?>
				</div>
			</div>
		</div>
	</div>

<?= get_footer() ?>