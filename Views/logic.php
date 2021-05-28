<?php

    if (isset($_POST['scale']))  {
        
        // && isset($POST['grading'])
        
        $scale = $_POST['scale'];

        $grading = $_POST['grading'];

        switch($scale) {
          
          case "five_course":
            return include 'Courses/five.php';
            break;
          
          case "six_course":
            return include 'Courses/six.php';
            break;

          case "seven_course":
              return include 'Courses/seven.php';
              break;

          case "eight_course":
              return include 'Courses/eight.php';
              break;

          case "nine_course":
              return include 'Courses/nine.php';
              break;

          case "ten_course":
              return include 'Courses/ten.php';
              break;

          case "eleven_course":
              return include 'Courses/eleven.php';
              break;

          case "twelve_course":
              return include 'Courses/twelve.php';
              break;

          case "thirteen_course":
              return include 'Courses/thirteen.php';
              break;

          case "fourtheen_course":
              return include 'Courses/fourtheen.php';
              break;

          default: 
              return include 'Courses/five.php';
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


      ?>