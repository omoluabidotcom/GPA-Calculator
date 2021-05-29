<?php

// Below a class a created
class Calcfive {

    // Below properties to be used in class are created
    private $score;
    private  $point;
    private $value_one;
    private $value_two;

    // Below a method that accept course score as an input and return a an alphabet equivalent is been created
    public function getGrade ($score) {

        $this->$score = $score;

            if ($score>= 0 && $score <= 39) {
        
              $grade = 'F';
            } else if ($score >= 40 && $score <= 44) {
        
              $grade = 'E';
            } else if ($score >= 45 && $score <= 49) {
        
              $grade = 'D';
            } else if ($score >= 50 && $score <= 59) {
        
              $grade = 'C';
            } else if ($score >=60 && $score <= 69) {
        
              $grade = 'B';
            } elseif ($score >= 70 && $score <= 100) {
        
              $grade = 'A';
            } 

            return $grade;
        
    }

    // Below a method that accept a grade in an alphabetic format and convert it to a number on a predefined grading system
    public function getCpoint($weight) {

        $this->point = $weight;
  
          if ($weight === 'A') {
        
            $mainWeight = 5;
          } else if ($weight === 'B') {
        
              $mainWeight = 4;
          } else if ($weight === 'C') {
        
            $mainWeight = 3;
          } else if ($weight === 'D') {
        
            $mainWeight = 2;
          } else if ($weight === 'E') {
        
            $mainWeight = 1;
          } else if ($weight === 'F') {
        
            $mainWeight = 0;
          } 
        
          return $mainWeight;
        
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