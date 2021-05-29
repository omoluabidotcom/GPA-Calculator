<!DOCTYPE html>
<html>
 <head>

   <link href="../Stylesheets/courses.css" type="text/css" rel="stylesheet" />

 </head>

 <body>

    <?php

    if (isset($_POST['scale']))  {
        
        // && isset($POST['grading'])
        
        $scale = $_POST['scale'];

        $grading = $_POST['grading'];

        if ($scale === "five_course" ) {
            
            header("Location: Courses/five.php");
        } else if($scale === "six_course") {

            header("Location: Courses/six.php");
        } else if ($scale === "seven_course") {

            header("Location: Courses/seven.php");
        } else if ($scale === "eight_course") {

            header("Location: Courses/eight.php");
        } else if ($scale === "nine_course") {

            header("Location: Courses/nine.php");
        } else if ($scale === "ten_course") {

            header("Location: Courses/ten.php");
        } else if ($scale === "eleven_course") {

            header("Location: Courses/eleven.php");
        } else if ($scale === "twelve_course") {

            header("Location: Courses/twelve.php");
        } else if ($scale === "thirteen_course") {

            header("Location: Courses/thirteen.php");
        } else if ($scale === "fourtheen_course") {

            header("Location: Courses/fourtheen.php");
        } else {

            header("Location: Courses/five.php");
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


    
      // include 'logic.php';
    ?>

 </body>
</html>