<?php

class Calcfive {

    private $score;
    private  $point;
    private $value_one;
    private $value_two;

    
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
      

      public function GP($value_one, $value_two) {
      
        $this->value_one = $value_one;
        $this->value_two = $value_two;
  
        @$gp = $value_one * $value_two;
        
        return $gp;
        
      }

}

?>