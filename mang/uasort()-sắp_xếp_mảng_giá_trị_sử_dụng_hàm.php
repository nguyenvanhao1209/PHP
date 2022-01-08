<?php
echo '<pre>';

function my_sort($a,$b)
{
if ($a==$b) return 0;
return ($a<$b)?-1:1;
}

$arr=array("a"=>4,"b"=>2,"c"=>8,"d"=>6);
uasort($arr,"my_sort");
print_r($arr);

echo '</pre>';
?>
