<?php
declare(strict_types=1);
define('ENUM_RATINGS', array(
  "Needs more improvement",
  "Failed in Boom.Camp Training",
  "Pass in Boom.Camp and can proceed in Graduation",
));
//Your code here..

function compareIfPass($x,$y):? string{
  if(($x<=>$y ) === 0){
    return ENUM_RATINGS[1];
  }elseif(($x<=>$y ) === -1){
    return ENUM_RATINGS[0];
  }else{
    return ENUM_RATINGS[2];
  }
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