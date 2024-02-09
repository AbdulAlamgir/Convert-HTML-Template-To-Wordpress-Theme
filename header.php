<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Bakery Cafe</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <div>
    <?php wp_nav_menu(array(
      'theme_location' => 'custom_menu',
      'container' => 'nav',

)) 
?> 

</div>
<?php do_shortcode('[website_images]') ?>
    <?php wp_head(); ?>
    


</head>