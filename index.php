<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>
      <?php

      // DIE AND DUMP
      function dd($data) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        // die();
      }



      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // For a given number num, write a function to test if it's a numerical palindrome or not and return a boolean (true if it is and false if not). Return "Not valid" if the input is not an integer or less than 0.

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function palindrome($num) {
      //   if ($num < 0 || is_string($num)) {
      //     return 'Not valid';
      //   }
      //   elseif (strrev($num) == $num) {
      //     return true;
      //   }
      //   else {
      //     return false;
      //   }
      // }

      //******************** REFACTORED



      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // palindrome(1221); // True
      // palindrome(123322); // False
      // palindrome("ACCDDCCA"); // Not valid
      // palindrome("1221"); // Not valid
      // palindrome(-450); // Not valid
      // palindrome('1221123322ACCDDCCA1221');






      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////


      // You'll be given 2 numbers as arguments: (num,s). Write a function which returns an array of s number of numerical palindromes that come after num. If num is a palindrome itself, it should be included in the count.
      //
      // Return "Not valid" instead if any one of the inputs is not an integer or is less than 0.
      //
      // For this kata, single digit numbers will NOT be considered numerical palindromes.


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function palindrome($num, $s) {
      //   $counter = 0;
      //   $palidromes = [];
      //
      //   if ($num < 0 || is_string($num) || $s < 0 || is_string($s)) {
      //     return "Not valid";
      //   }
      //
      //   for ($i=$num; $s > $counter; $i++) {
      //     if (strrev($i) == $i && $i > 9) {
      //       array_push($palidromes, $i);
      //       $counter++;
      //     }
      //   }
      //   return $palidromes;
      // }

      //******************** REFACTORED



      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************


      // palindrome(6, 4); //[11, 22, 33, 44]
      // palindrome(75, 1); // [77]
      // palindrome(19, 3); //[22, 33, 44]
      // palindrome(101, 2); //[101, 111]
      // palindrome("ACCDDCCA", 3); // "Not valid"
      // palindrome(773, "1551"); //"Not valid"
      // palindrome(-4505, 15); //"Not valid"









      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // For this kata, single digit numbers will not be considered numerical palindromes.
      //
      // For a given number num, write a function to test if the number contains a numerical palindrome or not and return a boolean (true if it does and false if does not). Return "Not valid" if the input is not an integer or is less than 0.
      //
      // Note: Palindromes should be found without permutating num.

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function palindrome($num) {
      //   if(gettype($num) !== 'integer' or $num < 0){
      //   return "Not valid";
      //   }
      //   else{
      //     $palindrom = false;
      //     for($i=0; $i<strlen($num) - 1; $i++){
      //       for($j=2; $j<=strlen($num) - $i; $j++){
      //         $a = substr($num, $i, $j);
      //         if($a == strrev($a)){
      //           $palindrom = true;
      //           break;
      //         }
      //       }
      //       if($palindrom){
      //         break;
      //       }
      //     }
      //     return $palindrom;
      //   }
      // }

      //******************** REFACTORED



      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // palindrome(2); // False
      // palindrome(123322367); // True
      // palindrome(1551); // True
      // palindrome(13598); // False
      // palindrome(940800); // True
      // palindrome("ACCDDCCA"); // "Not valid"
      // palindrome("1551"); // "Not valid"
      // palindrome(-4505); // "Not valid"








      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Write a function that takes an (unsigned) integer as input, and returns the number of bits that are equal to one in the binary representation of that number.

      // Example

      // Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function countBits($n) {
      //   if ($n == 0) {
      //     return 0;
      //   }
      //   $bits = array_count_values(str_split(decbin($n)));
      //   return $bits[1];
      // }

      //******************** REFACTORED



      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // countBits(0); // 0
      // countBits(4); // 1
      // countBits(7); // 3
      // countBits(9); // 2
      // countBits(10); // 2











      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Example

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function comp($a1, $a2) {
      //   $root_arr = [];
      //   foreach($a2 as $root) {
      //     array_push($root_arr, sqrt($root));
      //   }
      //   return array_diff($root_arr, $a1) == [] ? true : false;
      // }

      //******************** REFACTORED

      // function comp($a1, $a2) {
      //
      //   if ( is_null($a1) || is_null($a2) )
      //     return false;
      //
      //   $t = array_map(function($v) {
      //     return $v * $v;
      //   }, $a1);
      //
      //   sort($a2);
      //   sort($t);
      //   return $a2 == $t;
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // $a1 = [121, 144, 19, 161, 19, 144, 19, 11];
      // $a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];
      // comp($a1, $a2); // true
      // $a1 = [121, 144, 19, 161, 19, 144, 19, 11];
      // $a2 = [11*21, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];
      // comp($a1, $a2); // false









      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Example

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      //******************** REFACTORED



      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************



      ?>
    </h1>
  </body>
</html>
