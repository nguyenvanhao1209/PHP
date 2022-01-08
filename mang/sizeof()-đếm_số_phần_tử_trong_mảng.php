<?php
echo '<pre>';

$cars=array
  (
  "Volvo"=>array
  (
  "XC60",
  "XC90"
  ),
  "BMW"=>array
  (
  "X3",
  "X5"
  ),
  "Toyota"=>array
  (
  "Highlander"
  )
  );

echo "Normal count: " . sizeof($cars)."<br>";
echo "Recursive count: " . sizeof($cars,1);

echo '</pre>';
?>
