<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    .container{
      max-width: 600px;
      border: 1px solid blue;
      padding: 10px;
      background-color: yellow;
      margin:auto;
    }
  </style>
</head>
<body>
  <div class="container">
  <?php
  define('pi',3.14);
    $MyphpValue = 1;
    $MyphpValue2 = 1;
    echo pi;
      if(pi==3.14){
        echo var_dump($MyphpValue == $MyphpValue2); 
      }
   $languages = array("python", "C++", "php", "NodeJs");
   echo count($languages);
   echo $languages[2];
// while loop
   $a = 0;
   while ($a < count($languages)){
    echo "<br> The value of a is: ";
    echo $languages[$a];
    $a++;
   }
      // do loop
   $b = 200;
   do{
      echo "</br>The value of b is: ";
      echo $b;
      $b++;
   } while($b <10);

  //  For loop

  for ($c=0; $c<5 ; $c++) { 
      echo "<br> The value of c  is: ";
      echo $c;
  }

  function print5(){
    echo "Five";
  }

  print5();

  function print_number($number){

    echo "<br> Your number is ";
    echo $number;

  }

  print_number(45);

  $str = "This";
  echo $str. "<br>";
  $len = strlen($str);
echo "The length of this string is ". $len . " thank you <br>";
  echo "The number of words in this string is ". str_word_count($str) ." Thank you <br>";

  echo " The reversed string is ".strrev($str).". Thank you <br>";
  echo "The search for is in this string is ".strpos($str, 'is');

  echo "<br>The replaced string is " .str_replace('is', 'at', $str) . "Thank you <br>"

  ?>

  </div>
  
</body>
</html>