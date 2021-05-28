<!DOCTYPE html>
<html>

 <head>

   <link href="../../Stylesheets/courses.css" type="text/css" rel="stylesheet" />

 </head>

 <body>

 <div class="main_container" id="main_container" >

  
  <form method="POST" action="<?php echo $file_name; ?>" class="course_form form" id="course_form form" >
    
    <div class="course_div div" id="course_div div" >

        <div id="inline">
        <button type="" class="sno" id="sno" name="sno" > 1 </button> 
        </div>
  
        <div class="inline" id="inline" >
        Course Name <br />
        <input type="text" class="course_name second" id="course_name" name="coursename_one" /> 
        </div>

        <div class="inline" id="inline" >
        Course Unit <br />
        <input type="number" class="course_unit third" id="course_unit" name="courseunit_one" />
        </div>

        <div class="inline" id="inline" >
        Score <br />
        <input type="number" class="course_score fourth" id="course_score" name="coursescore_one" />
        </div>

        <div class="inline" id="inline" >
        Grade <br />
        <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_one" />
        </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 2 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_two" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_two" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_two" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_two" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 3 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_three" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_three" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_three" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_three" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 4 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_four" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_four" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_four" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_four" />
      </div>

    </div>

    <div class="course_div div" id="course_div div" >

      <div id="inline">
      <button type="" class="sno" id="sno" name="sno" > 5 </button> 
      </div>

      <div class="inline" id="inline" >
      Course Name <br />
      <input type="text" class="course_name second" id="course_name" name="coursename_five" /> 
      </div>

      <div class="inline" id="inline" >
      Course Unit <br />
      <input type="number" class="course_unit third" id="course_unit" name="courseunit_five" />
      </div>

      <div class="inline" id="inline" >
      Score <br />
      <input type="number" class="course_score fourth" id="course_score" name="coursescore_five" />
      </div>

      <div class="inline" id="inline" >
      Grade <br />
      <input type="text" class="course_grade fifth" id="course_grade" name="coursegrade_five" />
      </div>

    </div>

    <button type="submit" class="gpcalc" id="gpcalc" name="gpcalc" > 
      Calculate GP
    </button>
    
   </form>

   <!-- <?php 
    include '../Inc/fivecourses.inc.php';
   ?> -->

  </div>

 </body>

</html>