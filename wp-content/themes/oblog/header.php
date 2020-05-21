<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!-- Déclaration de notre font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

		<!-- -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
		crossorigin="anonymous">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
		crossorigin="anonymous">
		<!-- Ma feuille de style pour mon blog -->
		<!-- <link rel="stylesheet" href="/wp-content/themes/oblog/assets/css/style.css"> -->

		<!-- <title>
			<?php 
				wp_title('|', true, 'right') . bloginfo('name')
			?>
		</title> -->

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<!-- <div class="body-open"> -->
		<?php
			wp_body_open();
		?>
	<!-- </div> -->