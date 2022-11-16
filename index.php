<?php
//initialize with a random integer within range
$diceNumber = mt_rand(1, 6);

//initialize
$numText = "";

//calling switch statement
  switch($diceNumber) 
  {
  case 1:
    $numText = "One";
    break;
  case 2:
    $numText = "Two";
    break;
  case 3:
      $numText = "Three";
    break;
  case 4:
    $numText = "Four";
    break;
  case 5:
    $numText = "Five";
    echo $numText;
     break;
  case 6:
    $numText = "Six";
    echo $numText;
    break;
  default:
    $numText = "unknown";
  }
  
  //display result
  echo 'Dice show number '.$numText.'.';

?>
