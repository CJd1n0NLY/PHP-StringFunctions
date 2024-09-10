<!DOCTYPE html>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Activity 1 - Postrado</title>
   </head>
   <body>
     <style>
       .label {
         font-weight: bold;
         display: inline;
       }
     </style>
<?php
$str="The quick brown fox jumps over the lazy dog. if # @ - _ , ! + 0123456789";
// --------------------------------------------------------------       NAME       --------------------------------------------------------------
//                               C                      H                  A                   R                   L                   E                   S
$firstName = strtoupper(substr($str, 7, 1) . substr($str, 1,1) . substr($str, 36,1) . substr($str, 11,1) . substr($str, 35,1) . substr($str, 2,1) . substr($str, 24,1)
//                  J                    A                   C                     O                     B
. " " . substr($str, 20,1) . substr($str, 36,1) . substr($str, 7,1) . substr($str, 26,1) . substr($str, 10,1));
//                                     C                      .
$middleInitial = strtoupper(substr($str, 7, 1) . substr($str, 43, 1));
//                               P                        O                     S                     T                     R                     A                     D                       O
$lastName = strtoupper(substr($str, 23, 1) . substr($str, 26, 1) . substr($str, 24, 1) . substr($str, 0, 1) . substr($str, 11, 1) . substr($str, 36, 1) . substr($str, 40, 1) . substr($str, 26, 1) );

$name = $firstName . " " . $middleInitial . " " . $lastName;

// --------------------------------------------------------------       ADDRESS       --------------------------------------------------------------
//                          B                      L                       K                             3
$blk = strtoupper(substr($str, 10, 1)) . substr($str, 35, 1) . substr($str, 8, 1) . " " . substr($str, 65, 1);
//                          L                      O                       T                                        2                       8
$lot = strtoupper(substr($str, 35, 1)) . substr($str, 26, 1) . strtolower(substr($str, 0, 1)) . " " . substr($str, 64, 1)  . substr($str, 70, 1);
//                          P                           H                     A                     S                      E                          2
$phase = strtoupper(substr($str, 23, 1)) . substr($str, 1, 1) . substr($str, 36, 1) . substr($str, 24, 1)  . substr($str, 2, 1) . " " . substr($str, 64, 1);
//                               A                    R                      E                    A                             3
$area = strtoupper(substr($str, 36, 1)) . substr($str, 11, 1) . substr($str, 2, 1) . substr($str, 36, 1) . " "   . substr($str, 65, 1);
//                                  B                       R                    G                      Y                  .
$brgy = strtoupper(substr($str, 10, 1)) . substr($str, 11, 1) . substr($str, 42, 1) . substr($str, 38, 1)  . substr($str, 43, 1) . " " .
//                                  l                      O                      N                     G                     O                      S                       ,
            strtoupper(substr($str, 35, 1)) . substr($str, 26, 1) . substr($str, 14, 1) . substr($str, 42, 1)  . substr($str, 26, 1) .  substr($str, 24, 1) .  substr($str, 56, 1) ;
//                            M                         A                    L                     A                     B                         O                   N
$city = strtoupper(substr($str, 22, 1)) . substr($str, 36, 1) . substr($str, 35, 1) . substr($str, 36, 1)  . substr($str, 10, 1) . substr($str, 26, 1) .substr($str, 14, 1) . " " .
//                              C                      I                                T                     Y
        strtoupper(substr($str, 7, 1)) . substr($str, 45, 1) . strtolower(substr($str, 0, 1)) . substr($str, 38, 1);


$address = $blk . " " . $lot . " " . $phase . " " . $area . " " . $brgy . " " . $city;

// --------------------------------------------------------------       EMAIL       --------------------------------------------------------------
//           p                               o                      s                              t                     r                     a                     d                     o
$email = substr($str, 23, 1) . substr($str, 26, 1) . substr($str, 24, 1) . strtolower(substr($str, 0, 1)) . substr($str, 11, 1) . substr($str, 36, 1) . substr($str, 40, 1) . substr($str, 26, 1) .
//                    c                    h                     a                    r                    l                     e                     s
         substr($str, 7, 1) . substr($str, 1, 1) . substr($str, 36, 1) . substr($str, 11, 1) . substr($str, 35, 1) . substr($str, 2, 1) . substr($str, 24, 1) .
//                    .                    b                      s                       i                              t                     @
         substr($str, 43, 1) . substr($str, 10, 1) . substr($str, 24, 1) . substr($str, 45, 1) . strtolower(substr($str, 0, 1)) . substr($str, 50, 1) .
//                    g                     m                      a                       i                  l                     .                     c                    o                     m
         substr($str, 42, 1) . substr($str, 22, 1) . substr($str, 36, 1) . substr($str, 45, 1) . substr($str, 35, 1) . substr($str, 43, 1) . substr($str, 7, 1) . substr($str, 26, 1) . substr($str, 22, 1);


// --------------------------------------------------------------       CONTACT NUMBER       --------------------------------------------------------------
//                     0                        9                    9                    3                     7                    9                   8
$contactno = substr($str, 62,1) . substr($str, 71,1) . substr($str, 71,1) . substr($str, 65,1) . substr($str, 69,1) . substr($str, 71,1) . substr($str, 70,1) .
//            9                    9                   0                     1
substr($str, 71,1) . substr($str, 71,1) . substr($str, 62,1) . substr($str, 63,1);

// --------------------------------------------------------------       STUDENT NUMBER       --------------------------------------------------------------
//                         2                    0                   2                    2                     0                    5                   6
$studentno = substr($str, 64,1) . substr($str, 62,1) . substr($str, 64,1) . substr($str, 64,1) . substr($str, 62,1) . substr($str, 67,1) . substr($str, 68,1) .
//                         8                   -                   S
             substr($str, 70,1) . substr($str, 52,1) . strtoupper(substr($str, 24,1));


// --------------------------------------------------------------       DISPLAYING THE OUTPUT       --------------------------------------------------------------

echo "<p class='label'>COMPLETE NAME: </p>" . $name . "<br>";
echo "<p class='label'>COMPLETE ADDRESS: </p>" .$address . "<br>";
echo "<p class='label'>ACADEMIC EMAIL: </p>" .$email . "<br>";
echo "<p class='label'>CONTACT NO: </p>" .$contactno . "<br>";
echo "<p class='label'>STUDENT NO: </p>" .$studentno;
 ?>


   </body>
 </html>
