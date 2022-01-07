<?php
echo '<pre>';

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("c"=>"yellow","d"=>"black","e"=>"brown");
$a3=array("f"=>"green","c"=>"purple","g"=>"red");

$result=array_diff_key($a1,$a2,$a3);
print_r($result);


echo '</pre>';
?>
