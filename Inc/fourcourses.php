<?php

include '../Classes/calcfour.class.php';

if (isset($_POST['gpcalc'])) {

    if (!empty($_POST['courseunit_one']) && !empty($_POST['courseunit_two']) && !empty($_POST['courseunit_three']) 
    && !empty($_POST['courseunit_four']) && !empty($_POST['courseunit_five']) && !empty($_POST['coursescore_one']) 
    && !empty($_POST['coursescore_two']) && !empty($_POST['coursescore_three']) && !empty($_POST['coursescore_four']) 
    && !empty($_POST['coursescore_five']) ) {

        echo $courseunit_one = $_POST['courseunit_one'];
        echo $courseunit_two = $_POST['courseunit_two'];
        echo $courseunit_three = $_POST['courseunit_three'];
        echo $courseunit_four = $_POST['courseunit_four'];
        echo $courseunit_five = $_POST['courseunit_five'];
        
        $coursescore_one = $_POST['coursescore_one'];
        $coursescore_two = $_POST['coursescore_two'];
        $coursescore_three = $_POST['coursescore_three'];
        $coursescore_four = $_POST['coursescore_four'];
        $coursescore_five = $_POST['coursescore_five'];

        $coursename_one = $_POST['coursename_one'];
        $coursename_two = $_POST['coursename_two'];
        $coursename_three = $_POST['coursename_three'];
        $coursename_four = $_POST['coursename_four'];
        $coursename_five = $_POST['coursename_five'];
    
    }

} else {


}

?>