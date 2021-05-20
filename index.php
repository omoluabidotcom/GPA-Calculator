<!DOCTYPE html>
<html>

 <head>

   <meta charset="UTF-8" />
   <meta name="descriptions" content="" />
   <meta name="keywords" content="" />
   <meta name="author" content="Yahaya Yusuf" />
   <meta name="robots" content="nofollow" />
   <meta httq-equiv="refresh" content="" />
   <meta name="expires" content="" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>

   </title>

   <link href="Stylesheets/indexstyle.css" type="text/css" rel="stylesheet" />

 </head>

 <body>

    <!-- Below an header for the homepage is added using php -->
    <?php 
      include 'Views/header.html';
    ?>
    
    <!-- Below an body is added to the homepage using php -->
    <?php 
      echo "<br />";
      include 'Views/indexbody.html';
    ?>

    <!-- Below a footer is added to the homepage using php -->
    <?php 
      echo "<br />";
      include 'Views/indexfooter.html';
    ?>

 </body>
</html>