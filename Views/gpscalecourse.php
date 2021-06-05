<!DOCTYPE html>
<html>
 <head>

   <link href="../Stylesheets/gpascalecourse.css" type="text/css" rel="stylesheet" />

 </head>

 <body>
  
  <form method="POST" action="courses.php">

   <!-- Below a dropdown option for the grading system scale is added -->
   <h4> Select Grade Scale Type </h4> <br />
    <p class="describe" id="describe" > 
      <i> 
        Choose from the dropdown your school grading scale e.g <br >
        Select 4.0 if your school higest grade is on 4.0. 
      </i> 
    </p> <br >
    <select name="grading" size="1" class="dropdown_scale" id="dropdown_scale" >
      
      <option value="four" class="four_p" id="four_p" > 4.0 </option>
      <option value="five" class="five_p" id="five_p" > 5.0 </option>
      <option value="seven" class="seven_p" id="seven_p" > 7.0 </option>

    </select>
   
   <!-- Below a dropdown of the number of courses to be calculated is added -->
   <h4> Select Course Number </h4> <br />
    <p class="describe" id="describe" > 
      <i> 
        Choose from the dropdown number of course offered in the semester e.g <br >
        Select seven if seven is the number of courses offered.
      </i> 
    </p> <br >
    <select name="scale" size="1" class="dropdown_course" id="dropdown_course" >
      
      <option value="five_course" class="five_c" id="five_c" > Five Courses </option>
      <option value="six_course" class="six_c" id="six_c" > Six Courses </option>
      <option value="seven_course" class="seven_c" id="seven_c" > Seven Courses </option>
      <option value="eight_course" class="eight_c" id="eight_c" > Eight Courses </option>
      <option value="nine_course" class="nine_c" id="nine_c" > Nine Courses </option>
      <option value="ten_course" class="ten_c" id="ten_c" > Ten Courses </option>
      <option value="eleven_course" class="eleven_c" id="eleven_c" > Eleven Courses </option>
      <option value="twelve_course" class="twelve_c" id="twelve_c" > Twelve Courses </option>
      <option value="thirteen_course" class="thirteen_c" id="thirteen_c" > Thirteen Courses </option>
      <option value="fourtheen_course" class="fourtheen_c" id="fourtheen_c" > Fourtheen Courses </option>

    </select>

    <button type="submit" class="proceed_btn" id="proceed_btn" name="proceed_btn" >
      Proceed
    </button>

  </form>

 </body>
</html>