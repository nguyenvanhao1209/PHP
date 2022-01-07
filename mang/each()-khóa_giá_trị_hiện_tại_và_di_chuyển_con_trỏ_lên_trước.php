<?php
echo '<pre>';

$people = array("Peter", "Joe", "Glenn", "Cleveland");

reset($people);

while (list($key, $val) = each($people))
  {
  echo "$key => $val<br>";
  }

echo '</pre>';
?>
