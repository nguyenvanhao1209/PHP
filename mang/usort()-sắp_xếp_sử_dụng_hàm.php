<?php
echo '<pre>';

function my_sort($a,$b)
{
if ($a==$b) return 0;
return ($a<$b)?-1:1;
}

$a=array(4,2,8,6);
usort($a,"my_sort");

echo '</pre>';
?>
