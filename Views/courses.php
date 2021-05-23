<!DOCTYPE html>
<html>
 <head>

   <link href="../Stylesheets/courses.css" type="text/css" rel="stylesheet" />

 </head>

 <body>

    <!-- Below an header for the homepage is added using php -->
    <?php 

      include 'header.html'; 

      echo "<br /> <br /> <br />";

      if (isset($_POST['scale']))  {
        
        // && isset($POST['grading'])
        
        $scale = $_POST['scale'];

        $grading = $_POST['grading'];

        switch($scale) {
          
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

          // switch($grading) {
          
          //   case "four":
          //     return include '';
          //     break;
            
          //   case "five":
          //     return include '';
          //     break;
  
          //   case "seven":
          //       return include '';
          //       break;
  
          //   default: 
          //       return include '';
          //       break;
          //   }

      } 

      echo "<br /> <br /> <br />";

      include 'indexfooter.html';

    ?>

 </body>
</html>