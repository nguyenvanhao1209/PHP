<?php
echo '<pre>';

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);

echo '</pre>';
?>
