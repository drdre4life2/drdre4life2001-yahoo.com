<?php

//find firt none repeated letter
 function find_non_repeat($word) {
  $chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
     if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
  }
}



//  firnd 

function find_characters($word) {
$letters = str_split($word);
$result  = array_fill_keys($letters, 1);
$previous = '';

foreach($letters as $letter) {
    if($letter == $previous) {
        $result[$letter]++;
    }
    $previous = $letter;
}
arsort($result);
print_r($result);
}
?>