<?php
echo '<pre>';

$a1=array("a"=>array("red"),"b"=>array("green","blue"));
$a2=array("a"=>array("yellow"),"b"=>array("black"));
$a3=array("a"=>array("orange"),"b"=>array("burgundy"));
print_r(array_replace_recursive($a1,$a2,$a3));

echo '</pre>';
?>
