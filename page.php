<!DOCTYPE html>

<html>
    <?php include "functions.php"; ?>  
    <head>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="http://media.tumblr.com/tumblr_lkl5x4Rh131qfamg6.gif">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <title><?php echo $page_title; ?></title>
    
    </head>
    
    <body>
            <?php include "navigation.php"; ?>    

        <h2><?php echo $page_name; ?></h2>
        
        <div id="content">
        <?php echo $page_content; ?>
        </div>
        
    </body>
</html>