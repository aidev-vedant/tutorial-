<?php
class ved1 
{
  public $amount;
}
$value = 5;
$obj = new ved1();
$obj->amount = &$value;
$copy = clone $obj;
$obj->amount = 9;
print_r($copy);
?>