<!DOCTYPE html>
<html>

 <head>

   <link href="../../Stylesheets/courses.css" type="text/css" rel="stylesheet" />

 </head>

 <body>
   <?php
    include '../../Classes/calcfour.class.php';
      
    include '../../Inc/fourtheencourses.inc.php';
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

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 6 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_six" value="<?php if (isset($coursename_six)) {echo $coursename_six;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_six" value="<?php if (isset($courseunit_six)) {echo $courseunit_six;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_six" value="<?php if (isset($coursescore_six)) {echo $coursescore_six;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_six" value="<?php if (isset($coursegrade_six)) {echo $coursegrade_six;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 7 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_seven" value="<?php if (isset($coursename_seven)) {echo $coursename_seven;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_seven" value="<?php if (isset($courseunit_seven)) {echo $courseunit_seven;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_seven" value="<?php if (isset($coursescore_seven)) {echo $coursescore_seven;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_seven" value="<?php if (isset($coursegrade_seven)) {echo $coursegrade_seven;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 8 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_eight" value="<?php if (isset($coursename_eight)) {echo $coursename_eight;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_eight" value="<?php if (isset($courseunit_eight)) {echo $courseunit_eight;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_eight" value="<?php if (isset($coursescore_eight)) {echo $coursescore_eight;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_eight" value="<?php if (isset($coursegrade_eight)) {echo $coursegrade_eight;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 9 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_nine" value="<?php if (isset($coursename_nine)) {echo $coursename_nine;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_nine" value="<?php if (isset($courseunit_nine)) {echo $courseunit_nine;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_nine" value="<?php if (isset($coursescore_nine)) {echo $coursescore_nine;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_nine" value="<?php if (isset($coursegrade_nine)) {echo $coursegrade_nine;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 10 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_ten" value="<?php if (isset($coursename_ten)) {echo $coursename_ten;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_ten" value="<?php if (isset($courseunit_ten)) {echo $courseunit_ten;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_ten" value="<?php if (isset($coursescore_ten)) {echo $coursescore_ten;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_ten" value="<?php if (isset($coursegrade_ten)) {echo $coursegrade_ten;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 11 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_eleven" value="<?php if (isset($coursename_eleven)) {echo $coursename_eleven;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_eleven" value="<?php if (isset($courseunit_eleven)) {echo $courseunit_eleven;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_eleven" value="<?php if (isset($coursescore_eleven)) {echo $coursescore_eleven;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_eleven" value="<?php if (isset($coursegrade_eleven)) {echo $coursegrade_eleven;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 12 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_twelve" value="<?php if (isset($coursename_twelve)) {echo $coursename_twelve;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_twelve" value="<?php if (isset($courseunit_twelve)) {echo $courseunit_twelve;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_twelve" value="<?php if (isset($coursescore_twelve)) {echo $coursescore_twelve;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_twelve" value="<?php if (isset($coursegrade_twelve)) {echo $coursegrade_twelve;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 13 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_thirteen" value="<?php if (isset($coursename_thirteen)) {echo $coursename_thirteen;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_thirteen" value="<?php if (isset($courseunit_thirteen)) {echo $courseunit_thirteen;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_thirteen" value="<?php if (isset($coursescore_thirteen)) {echo $coursescore_thirteen;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_thirteen" value="<?php if (isset($coursegrade_thirteen)) {echo $coursegrade_thirteen;} ?>" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 14 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_fourtheen" value="<?php if (isset($coursename_fourtheen)) {echo $coursename_fourtheen;} ?>" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_fourtheen" value="<?php if (isset($courseunit_fourtheen)) {echo $courseunit_fourtheen;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_fourtheen" value="<?php if (isset($coursescore_fourtheen)) {echo $coursescore_fourtheen;} ?>" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_fourtheen" value="<?php if (isset($coursegrade_fourtheen)) {echo $coursegrade_fourtheen;} ?>" />
      </div>

    </div>

    <button type="submit" class="gpcalc" id="gpcalc" name="gpcalc" > 
      Calculate GP
    </button>
    
   </form>

   <?php
      include '../indexfooter.html';
    ?>

  </div>

 </body>

</html>