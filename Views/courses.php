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

    <br /> <br />
    <?php 

      // if (isset($_POST['gpacalc'])) {

        if (isset($_POST['scale']))  {
        
        $variable = $_POST['scale'];

        switch($variable) {
          
          case "five_course":
            return include 'Courses/five.html';
            break;
          
          case "six_course":
            return include 'Courses/six.html';
            break;

          case "seven_course":
              return include 'Courses/seven.html';
              break;

          case "eight_course":
              return include 'Courses/eight.html';
              break;

          case "nine_course":
              return include 'Courses/nine.html';
              break;

          case "ten_course":
              return include 'Courses/ten.html';
              break;

          case "eleven_course":
              return include 'Courses/eleven.html';
              break;

          case "twelve_course":
              return include 'Courses/twelve.html';
              break;

          case "thirteen_course":
              return include 'Courses/thirteen.html';
              break;

          case "fourtheen_course":
              return include 'Courses/fourtheen.html';
              break;

          default: 
              include 'Courses/five.html';
              break;
          }
    

      } else {

      }

    ?>

    <br /> <br />
    <!-- Below a footer is added to the homepage using php -->
    <?php 
      include 'indexfooter.html';
    ?>

 </body>
</html>