<?php

// Below a condition statement is used to perform some operation
if (isset($_POST['gpcalc'])) {
    
    // Below a conditional statement is used to check if a a form field is empty or not before performing some operation.
    if (!empty($_POST['courseunit_one']) && !empty($_POST['courseunit_two']) && !empty($_POST['courseunit_three']) 
    && !empty($_POST['courseunit_four']) && !empty($_POST['courseunit_five']) && !empty($_POST['courseunit_six']) 
    && !empty($_POST['courseunit_seven']) && !empty($_POST['courseunit_eight']) && !empty($_POST['courseunit_nine'])
    && !empty($_POST['courseunit_ten']) && !empty($_POST['courseunit_eleven']) && !empty($_POST['courseunit_twelve']) 
    && !empty($_POST['courseunit_thirteen']) && !empty($_POST['courseunit_fourtheen']) && !empty($_POST['coursescore_one']) 
    && !empty($_POST['coursescore_two']) && !empty($_POST['coursescore_three']) && !empty($_POST['coursescore_four']) 
    && !empty($_POST['coursescore_five']) && !empty($_POST['coursescore_six']) && !empty($_POST['coursescore_seven']) 
    && !empty($_POST['coursescore_eight']) && !empty($_POST['coursescore_nine']) && !empty($_POST['coursescore_ten']) 
    && !empty($_POST['coursescore_eleven']) && !empty($_POST['coursescore_twelve']) && !empty($_POST['coursescore_thirteen']) ) 
    {

        // Below course unit for each course is save into a variable
        $courseunit_one = $_POST['courseunit_one'];
        $courseunit_two = $_POST['courseunit_two'];
        $courseunit_three = $_POST['courseunit_three'];
        $courseunit_four = $_POST['courseunit_four'];
        $courseunit_five = $_POST['courseunit_five'];
        $courseunit_six = $_POST['courseunit_six'];
        $courseunit_seven = $_POST['courseunit_seven'];
        $courseunit_eight = $_POST['courseunit_eight'];
        $courseunit_nine = $_POST['courseunit_nine'];
        $courseunit_ten = $_POST['courseunit_ten'];
        $courseunit_eleven = $_POST['courseunit_eleven'];
        $courseunit_twelve = $_POST['courseunit_twelve'];
        $courseunit_thirteen = $_POST['courseunit_thirteen'];
        $courseunit_fourtheen = $_POST['courseunit_fourtheen'];

        // Below course unit of each course is summed togther and saved in a variable
        $coureunitTotal = $courseunit_one + $courseunit_two + $courseunit_three + $courseunit_four + $courseunit_five + 
        $courseunit_six + $courseunit_seven + $courseunit_eight + $courseunit_nine + $courseunit_ten + $courseunit_eleven
        + $courseunit_twelve + $courseunit_thirteen + $courseunit_fourtheen;
        
        // Below course score for each course is saved into a variable
        $coursescore_one = $_POST['coursescore_one'];
        $coursescore_two = $_POST['coursescore_two'];
        $coursescore_three = $_POST['coursescore_three'];
        $coursescore_four = $_POST['coursescore_four'];
        $coursescore_five = $_POST['coursescore_five'];
        $coursescore_six = $_POST['coursescore_six'];
        $coursescore_seven = $_POST['coursescore_seven'];
        $coursescore_eight = $_POST['coursescore_eight'];
        $coursescore_nine = $_POST['coursescore_nine'];
        $coursescore_ten = $_POST['coursescore_ten'];
        $coursescore_eleven = $_POST['coursescore_eleven'];
        $coursescore_twelve = $_POST['coursescore_twelve'];
        $coursescore_thirteen = $_POST['coursescore_thirteen'];
        $coursescore_fourtheen = $_POST['coursescore_fourtheen'];

        // Below course name for each course is saved into a variable
        $coursename_one = $_POST['coursename_one'];
        $coursename_two = $_POST['coursename_two'];
        $coursename_three = $_POST['coursename_three'];
        $coursename_four = $_POST['coursename_four'];
        $coursename_five = $_POST['coursename_five'];
        $coursename_six = $_POST['coursename_six'];
        $coursename_seven = $_POST['coursename_seven'];
        $coursename_eight = $_POST['coursename_eight'];
        $coursename_nine = $_POST['coursename_nine'];
        $coursename_ten = $_POST['coursename_ten'];
        $coursename_eleven = $_POST['coursename_eleven'];
        $coursename_twelve = $_POST['coursename_twelve'];
        $coursename_thirteen = $_POST['coursename_thirteen'];
        $coursename_fourtheen = $_POST['coursename_fourtheen'];

        // Below an object was instantiated to be able to use it method and properties. The object is from the class calcfour
        $mainObj = new Calcfive();

        // Below after instantiating the class a method that convert score to grade in alphabet was called and the 
        // return value is saved in a variable.
        $coursegrade_one = $mainObj->getGrade($coursescore_one);
        $coursegrade_two = $mainObj->getGrade($coursescore_two);
        $coursegrade_three = $mainObj->getGrade($coursescore_three);
        $coursegrade_four = $mainObj->getGrade($coursescore_four);
        $coursegrade_five = $mainObj->getGrade($coursescore_five);
        $coursegrade_six = $mainObj->getGrade($coursescore_six);
        $coursegrade_seven = $mainObj->getGrade($coursescore_seven);
        $coursegrade_eight = $mainObj->getGrade($coursescore_eight);
        $coursegrade_nine = $mainObj->getGrade($coursescore_nine);
        $coursegrade_ten = $mainObj->getGrade($coursescore_ten);
        $coursegrade_eleven = $mainObj->getGrade($coursescore_eleven);
        $coursegrade_twelve = $mainObj->getGrade($coursescore_twelve);
        $coursegrade_thirteen = $mainObj->getGrade($coursescore_thirteen);
        $coursegrade_fourtheen = $mainObj->getGrade($coursescore_fourtheen);

        // Below a method called getCpoint was called, it convert grade in alphabet to equivalent in number according to 
        // a scale used 
        $courseweight_one = $mainObj->getCpoint($coursegrade_one);
        $courseweight_two = $mainObj->getCpoint($coursegrade_two);
        $courseweight_three = $mainObj->getCpoint($coursegrade_three);
        $courseweight_four = $mainObj->getCpoint($coursegrade_four);
        $courseweight_five = $mainObj->getCpoint($coursegrade_five);
        $courseweight_six = $mainObj->getCpoint($coursegrade_six);
        $courseweight_seven = $mainObj->getCpoint($coursegrade_seven);
        $courseweight_eight = $mainObj->getCpoint($coursegrade_eight);
        $courseweight_nine = $mainObj->getCpoint($coursegrade_nine);
        $courseweight_ten = $mainObj->getCpoint($coursegrade_ten);
        $courseweight_eleven = $mainObj->getCpoint($coursegrade_eleven);
        $courseweight_twelve = $mainObj->getCpoint($coursegrade_twelve);
        $courseweight_thirteen = $mainObj->getCpoint($coursegrade_thirteen);
        $courseweight_fourtheen = $mainObj->getCpoint($coursegrade_fourtheen);

        // Below a method called GP was called, it multiple course unit with course grade equivalent in number for each course
        $gp_one = $mainObj->GP($courseunit_one, $courseweight_one);
        $gp_two = $mainObj->GP($courseunit_two, $courseweight_two);
        $gp_three = $mainObj->GP($courseunit_three, $courseweight_three);
        $gp_four = $mainObj->GP($courseunit_four, $courseweight_four);
        $gp_five = $mainObj->GP($courseunit_five, $courseweight_five);
        $gp_six = $mainObj->GP($courseunit_six, $courseweight_six);
        $gp_seven = $mainObj->GP($courseunit_seven, $courseweight_seven);
        $gp_eight = $mainObj->GP($courseunit_eight, $courseweight_eight);
        $gp_nine = $mainObj->GP($courseunit_nine, $courseweight_nine);
        $gp_ten = $mainObj->GP($courseunit_ten, $courseweight_ten);
        $gp_eleven = $mainObj->GP($courseunit_eleven, $courseweight_eleven);
        $gp_thirteen = $mainObj->GP($courseunit_thirteen, $courseweight_thirteen);
        $gp_fourtheen = $mainObj->GP($courseunit_fourtheen, $courseweight_fourtheen);
        

        // Below a all the gp of each course is added together and saved into a variable
        $gpTotal = $gp_one + $gp_two + $gp_three + $gp_four + $gp_five + $gp_six + $gp_seven + $gp_eight + $gp_nine 
        + $gp_ten + $gp_eleven + $gp_twelve + $gp_thirteen + $gp_fourtheen;

        // Below the gpa is calculated by dividing sum of each course gp by the sum of each course courseunit
        $gpa = ($gpTotal/$coureunitTotal);
        
        // Below the gpa is formatted to four decimal places
        $gpa = number_format($gpa, 4, '.', ' ');
        

    
    } else {

        // Below is message that will be return to users if certain forms aren't filled
        echo "<br /> Make sure the Score and Course unit field are all filled";
    }

} else {


}

?>