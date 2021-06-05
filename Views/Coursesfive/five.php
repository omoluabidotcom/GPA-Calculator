<!DOCTYPE html>
<html>

 <head>

   <link href="../../Stylesheets/courses.css" type="text/css" rel="stylesheet" />

 </head>

 <body>
   <?php
    include '../../Classes/calcfive.class.php';
      
    include '../../Inc/fivecourses.inc.php';
  ?>

  <?php 
    include '../header.html'; 
    $file_name = $_SERVER['SCRIPT_NAME']; 
  ?>

 <div class="main_container" id="main_container" >

  
  <form method="POST" action="<?php echo $file_name; ?>" class="course_form form" id="course_form form" >
    
    <div class="course_div div" id="course_div div" >

        <div id="inline">
        <button type="" class="sno" id="sno" name="sno" > 1 </button> 
        </div>
  
        <div class="inline" id="inline" >
        Course Name <br />
        <input type="text" class="course_name second" id="course_name" name="coursename_one" value="<?php if (isset($coursename_one)) {echo $coursename_one;} ?>" /> 
        </div>

        <div class="inline" id="inline" >
        Course Unit <br />
        <input type="number" class="course_unit third" id="course_unit" name="courseunit_one" value="<?php if (isset($courseunit_one)) {echo $courseunit_one;} ?>" />
        </div>

        <div class="inline" id="inline" >
        Score <br />
        <input type="number" class="course_score fourth" id="course_score" name="coursescore_one" value="<?php if (isset($coursescore_one)) {echo $coursescore_one;} ?>" />
        </div>

        <div class="inline" id="inline" >
        Grade <br />
        <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_one" value="<?php if (isset($coursegrade_one)) {echo $coursegrade_one;} ?>" />
        </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 2 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_two" value="<?php if (isset($coursename_two)) {echo $coursename_two;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_two" value="<?php if (isset($courseunit_two)) {echo $courseunit_two;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_two" value="<?php if (isset($coursescore_two)) {echo $coursescore_two;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_two" value="<?php if (isset($coursegrade_two)) {echo $coursegrade_two;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 3 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_three" value="<?php if (isset($coursename_three)) {echo $coursename_three;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_three" value="<?php if (isset($courseunit_three)) {echo $courseunit_three;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_three" value="<?php if (isset($coursescore_three)) {echo $coursescore_three;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_three" value="<?php if (isset($coursegrade_three)) {echo $coursegrade_three;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 4 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_four" value="<?php if (isset($coursename_four)) {echo $coursename_four;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_four" value="<?php if (isset($courseunit_four)) {echo $courseunit_four;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_four" value="<?php if (isset($coursescore_four)) {echo $coursescore_four;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_four" value="<?php if (isset($coursegrade_four)) {echo $coursegrade_four;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 5 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_five" value="<?php if (isset($coursename_five)) {echo $coursename_five;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_five" value="<?php if (isset($courseunit_five)) {echo $courseunit_five;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_five" value="<?php if (isset($coursescore_five)) {echo $coursescore_five;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_five" value="<?php if (isset($coursegrade_five)) {echo $coursegrade_five;} ?>" />
      </div>

    </div>

    <button type="submit" class="gpcalc" id="gpcalc" name="gpcalc" > 
      Calculate GP
    </button>
    
   </form>

   <?php

      if (!empty($gpa)) {

        echo '<h4 class="gpa" id="gpa" > Your Semester GPA is '. $gpa .'</h4> ';
      }
   ?>
   
   <?php
      include '../indexfooter.html';
   ?>


  </div>

 </body>

</html>