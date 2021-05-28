<!DOCTYPE html>
<html>
 <head>

   <link href="../Stylesheets/courses.css" type="text/css" rel="stylesheet" />

 </head>

 <body>

    <!-- Below an header for the homepage is added using php -->
    <?php 
      include 'header.html'; 
    ?>

    <?php
      $file_name = $_SERVER['SCRIPT_NAME']; 
      echo "<br /> <br />";
      include 'logic.php';
    ?>

    <?php
      echo "<br /> <br />";
      include 'indexfooter.html';
    ?>

    <?php 
      include '../Inc/fivecourses.inc.php';
    ?>

 </body>
</html>