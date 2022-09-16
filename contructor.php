<?php  
    class vvv  
    {  
        public function vvv()  
        {  
            echo "constructor example here";  
        }  
    }  
      
    class ved1 extends vvv
    {  
        public function __construct()  
        {  
            echo parent::vvv();  
            echo "constructor2 ved1 example here";  
        }  
    }  
    $obj= new ved1();  
?>  
