<?php
echo '<pre>';

$a=array("red","green","blue","yellow","brown");

print_r(array_slice($a,1,2));

print_r(array_slice($a,-2,1));

print_r(array_slice($a,1,2,true));

echo '</pre>';
?>
