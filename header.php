<?php
/**
 * The Header template for ACC Rebuilders
 * Displays all of the <head> section.
 *
 * @package WordPress
 * @subpackage ACC_Rebuilders
 */
?>
<!DOCTYPE html>
<html <?= language_attributes ?>>
<head>
	<title><?= bloginfo('name') . wp_title('|') ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Links (Stylesheets and Pingback -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css">
	<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/style.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- WP Head -->
	<?= wp_head(); ?>
</head>
<body>
	<!-- Header -->
	<div id="header">
		<div class="container">
			<div class="row">
				<div class="span6 logo">
					<a href="<?= home_url() ?>">
						<h1 class="acc">ACC</h1> <h1 class="rebuilders">Rebuilders</h1>
					</a>
				</div>
				<div class="span6 navigation">
					<?= wp_nav_menu() ?>
				</div>
			</div>
		</div>
	</div>