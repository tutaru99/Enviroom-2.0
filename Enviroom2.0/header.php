<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153958571-1"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-153958571-1');
	</script>

  
   <link href="https://fonts.googleapis.com/css?family=Expletus+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo bloginfo (''); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>


</head>