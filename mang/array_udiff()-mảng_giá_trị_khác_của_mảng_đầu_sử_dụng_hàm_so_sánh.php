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

$a1=array("a"=>"red","b"=>"green","c"=>"blue","yellow");
$a2=array("A"=>"red","b"=>"GREEN","yellow","black");
$a3=array("a"=>"green","b"=>"red","yellow","black");

$result=array_udiff($a1,$a2,$a3,"myfunction");
print_r($result);

echo '</pre>';
?>
