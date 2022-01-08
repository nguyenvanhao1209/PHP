<?php
echo '<pre>';

function my_sort($a,$b)
{
if ($a==$b) return 0;
return ($a<$b)?-1:1;
}

$arr=array("a"=>4,"d"=>2,"b"=>8,"c"=>6);
uksort($arr,"my_sort");
print_r($arr);

echo '</pre>';
?>
