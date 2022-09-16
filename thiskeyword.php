<?php
class simple {
  
    public $k = 9;
  
    public function change($val){
        $this->k = $val;
    }
  
    public function display(){
        return $this->k;
    }
}

$obj = new simple();
print("value of before update: ");
echo $obj->display();
  
$obj->change(8);
print("value of after update: ");
echo $obj->display();
?>
s