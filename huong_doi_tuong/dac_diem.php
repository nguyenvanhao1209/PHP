<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!";
  }
}

trait message3{
  public function say_1(){
    echo 'Hello mess 3.1';
  }
  public function say_2(){
    echo 'Hello mess 3.2';
  }
}

trait message4{
  public function say_1(){
    echo 'Hello mess 4.1';
  }
  public function say_2(){
    echo 'Hello mess 4.2';
  }
}

trait message5{
  public function msg5(){
    echo 'Hello mess 5';
  }
}

class Welcome {
  use message1,message2;
  use message3,message4 {
    message3::say_1 insteadof message4;
    message4::say_2 insteadof message3;
  }
  use message5{
    msg5 as public wel_msg;
  }
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";
$obj->msg2();
echo '<br>';
$obj->say_1();
echo '<br>';
$obj->say_2();
echo '<br>';
$obj->wel_msg();

?>
