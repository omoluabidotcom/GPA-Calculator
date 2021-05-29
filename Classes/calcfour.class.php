<?php

// Below a class a created
class Calcfour {

    // Below properties to be used in class are created
    private $score;
    private  $weight;
    private $value_one;
    private $value_two;

    // Below a method that accept course score as an input and return a an alphabet equivalent is been created
    public function getGrade ($score) {

        $this->$score = $score;

            if ($score>= 0 && $score <= 40) {
        
              $grade = 'F';
            } else if ($score >= 41 && $score <= 44) {
        
              $grade = 'E';
            } else if ($score >= 45 && $score <= 49) {
        
              $grade = 'D';
            } else if ($score >= 50 && $score <= 54) {
        
              $grade = 'CD';
            } else if ($score >=55 && $score <= 59) {
        
              $grade = 'C';
            } elseif ($score >= 60 && $score <= 64) {
        
              $grade = 'BC';
            } else if ($score >= 65 && $score <= 69) {
        
              $grade = 'B';
            } else if ($score >= 70 && $score <= 74) {
        
              $grade = 'AB';
            } else if ($score >= 75 && $score <= 100) {
        
              $grade = 'A';
            }
        
            return $grade;
        
    }


    // Below a method that accept a grade in an alphabetic format and convert it to a number on a predefined grading system
    public function getCpoint($weight) {

      $this->weight = $weight;

        if ($weight === 'A') {
      
          return $mainWeight = 4;
        } else if ($weight === 'AB') {
      
          return $mainWeight = 3.5;
        } else if ($weight === 'B') {
      
          return $mainWeight = 3.25;
        } else if ($weight === 'BC') {
      
          return $mainWeight = 3;
        } else if ($weight === 'C') {
      
          return $mainWeight = 2.75;
        } else if ($weight === 'CD') {
      
          return $mainWeight = 2.5;
        } else if ($weight === 'D') {
      
          return $mainWeight = 2.25;
        } else if ($weight === 'E') {
      
          return $mainWeight = 2;
        } else if ($weight === 'F') {
      
          return $mainWeight = 0;
        }
       
    }

    // Below is a method that accept two input, multiply this input and return a result 
    public function GP($value_one, $value_two) {
      
      $this->value_one = $value_one;
      $this->value_two = $value_two;

      @$gp = $value_one * $value_two;
      
      return $gp;
      
    }

}

?>