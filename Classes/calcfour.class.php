<?php

class Calcfour {

    private $score;
    private  $weight;
    private $value_one;
    private $value_two;

    
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


    public function getCpoint($weight) {

      $this->weight = $weight;

        if ($weight === 'A') {
      
          $mainWeight = 4;
        } else if ($weight === 'AB') {
      
            $mainWeight = 3.5;
        } else if ($weight === 'B') {
      
          $mainWeight = 3.25;
        } else if ($weight === 'BC') {
      
          $mainWeight = 3;
        } else if ($weight === 'C') {
      
          $mainWeight = 2.75;
        } else if ($weight === 'CD') {
      
          $mainWeight = 2.5;
        } else if ($weight === 'D') {
      
          $mainWeight = 2.25;
        } else if ($weight === 'E') {
      
          $mainWeight = 2;
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