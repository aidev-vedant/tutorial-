<html>
<body>

<?php    // traits are used by one or multiple classs by using "use" keyword.
trait message1 {
  public function msg1() {
    echo "OOP is fun! ";        //the main goal of the traits is to provide same metod and functions to multiple mehods etc.
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
 
</body>
</html>

output 

oop is fun