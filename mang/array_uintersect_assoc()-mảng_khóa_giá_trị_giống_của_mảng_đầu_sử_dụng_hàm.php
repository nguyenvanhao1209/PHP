<?php
echo '<pre>';

function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"blue","c"=>"green");

$result=array_uintersect_assoc($a1,$a2,"myfunction");
print_r($result);

echo '</pre>';
?>
