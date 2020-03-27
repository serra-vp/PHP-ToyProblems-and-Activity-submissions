<?php
declare(strict_types=1);
define('ENUM_RATINGS', array(
  "Needs more improvement",
  "Failed in Boom.Camp Training",
  "Pass in Boom.Camp and can proceed in Graduation",
));
//Your code here..

function compareIfPass( $newGrade,$oldGrade ):? string{

  $failed = $passed = $improve = null;

  (($newGrade<=>$oldGrade ) === 0) ? $failed = ENUM_RATINGS[0] : (($newGrade<=>$oldGrade) === -1) ? $improve = ENUM_RATINGS[1] : $passed = ENUM_RATINGS[2];

  return $failed ?? $passed ?? $improve;
}
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week-3 Constant Arrays and Null-Coalescing Operator</title>
</head>
<body>
  <?php 
    echo compareIfPass(70,80) . "<br>"; //-1  0 -1 1
    echo compareIfPass(80,90) . "<br>"; //-1
    echo compareIfPass(90,90) . "<br>"; //0
    echo compareIfPass(95,90) . "<br>"; //1
  ?>
</body>
</html>