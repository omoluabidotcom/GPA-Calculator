<?php

// Below a condition statement is used to perform some operation
if (isset($_POST['gpcalc'])) {
    
    // Below a conditional statement is used to check if a a form field is empty or not before performing some operation.
    if (!empty($_POST['courseunit_one']) && !empty($_POST['courseunit_two']) && !empty($_POST['courseunit_three']) 
    && !empty($_POST['courseunit_four']) && !empty($_POST['courseunit_five']) && !empty($_POST['coursescore_one']) 
    && !empty($_POST['coursescore_two']) && !empty($_POST['coursescore_three']) && !empty($_POST['coursescore_four']) 
    && !empty($_POST['coursescore_five']) ) {

        // Below course unit for each course is save into a variable
        $courseunit_one = $_POST['courseunit_one'];
        $courseunit_two = $_POST['courseunit_two'];
        $courseunit_three = $_POST['courseunit_three'];
        $courseunit_four = $_POST['courseunit_four'];
        $courseunit_five = $_POST['courseunit_five'];

        // Below course unit of each course is summed togther and saved in a variable
        $coureunitTotal = $courseunit_one + $courseunit_two + $courseunit_three + $courseunit_four + $courseunit_five;
        
        // Below course score for each course is saved into a variable
        $coursescore_one = $_POST['coursescore_one'];
        $coursescore_two = $_POST['coursescore_two'];
        $coursescore_three = $_POST['coursescore_three'];
        $coursescore_four = $_POST['coursescore_four'];
        $coursescore_five = $_POST['coursescore_five'];

        // Below course name for each course is saved into a variable
        $coursename_one = $_POST['coursename_one'];
        $coursename_two = $_POST['coursename_two'];
        $coursename_three = $_POST['coursename_three'];
        $coursename_four = $_POST['coursename_four'];
        $coursename_five = $_POST['coursename_five'];

        // Below an object was instantiated to be able to use it method and properties. The object is from the class calcfour
        $mainObj = new Calcfour();

        // Below after instantiating the class a method that convert score to grade in alphabet was called and the 
        // return value is saved in a variable.
        $coursegrade_one = $mainObj->getGrade($coursescore_one);
        $coursegrade_two = $mainObj->getGrade($coursescore_two);
        $coursegrade_three = $mainObj->getGrade($coursescore_three);
        $coursegrade_four = $mainObj->getGrade($coursescore_four);
        $coursegrade_five = $mainObj->getGrade($coursescore_five);

        // Below a method called getCpoint was called, it convert grade in alphabet to equivalent in number according to 
        // a scale used 
        $courseweight_one = $mainObj->getCpoint($coursegrade_one);
        $courseweight_two = $mainObj->getCpoint($coursegrade_two);
        $courseweight_three = $mainObj->getCpoint($coursegrade_three);
        $courseweight_four = $mainObj->getCpoint($coursegrade_four);
        $courseweight_five = $mainObj->getCpoint($coursegrade_five);

        // Below a method called GP was called, it multiple course unit with course grade equivalent in number for each course
        $gp_one = $mainObj->GP($courseunit_one, $courseweight_one);
        $gp_two = $mainObj->GP($courseunit_two, $courseweight_two);
        $gp_three = $mainObj->GP($courseunit_three, $courseweight_three);
        $gp_four = $mainObj->GP($courseunit_four, $courseweight_four);
        $gp_five = $mainObj->GP($courseunit_five, $courseweight_five);

        // Below a all the gp of each course is added together and saved into a variable
        $gpTotal = $gp_one + $gp_two + $gp_three + $gp_four + $gp_five;

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