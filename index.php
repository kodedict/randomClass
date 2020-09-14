<?php
include('randomClass.php');

class index extends randomClass{
  public function home(){
      $number   = $this->randomAlpha(10);
      $alphabet = $this->randomNumber(0, 30, 10);
      
      echo "Random number is ".$number.", Random alphabet is ".$alphabet;
  }
}
