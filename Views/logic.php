<?php

    if (isset($_POST['scale']))  {
        
        // && isset($POST['grading'])
        
        $scale = $_POST['scale'];

        $grading = $_POST['grading'];

        if ($scale === "five_course" ) {
            
            include 'Courses/five.php';
        } else if($scale === "six_course") {

            include 'Courses/six.php';
        } else if ($scale === "seven_course") {

            return include 'Courses/seven.php';
        } else if ($scale === "eight_course") {

            include 'Courses/eight.php';
        } else if ($scale === "nine_course") {

            include 'Courses/nine.php';
        } else if ($scale === "ten_course") {

            include 'Courses/ten.php';
        } else if ($scale === "eleven_course") {

            include 'Courses/eleven.php';
        } else if ($scale === "twelve_course") {

            include 'Courses/twelve.php';
        } else if ($scale === "thirteen_course") {

            include 'Courses/thirteen.php';
        } else if ($scale === "fourtheen_course") {

            include 'Courses/fourtheen.php';
        } else {

            include 'Courses/five.php';
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


      ?>