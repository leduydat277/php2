<?php 
class dongvat{

    public $name;
    public $maulong;
    public $sochan;
    // hàm tạo construct
    public function __construct($name,$maulong,$sochan){
    $this->name =$name;
    $this->maulong =$maulong;
    $this->sochan =$sochan;
    
    }
    // phương thức method
    public function tiengkeu($tieng){
        echo $tieng;
       
    }
     public function getname(){
            return $this->name;
        }
        public function setname($name){
            return $this->name;
        }
        public function __destruct(){
            echo "đối tượng được hủy";
        }
}
// khởi tạo object
$choA = new dongvat('chó','đen','4');
echo $choA->getname();
$choA ->setname('dog');
echo $choA->getname();
echo $choA->tiengkeu('ẳng ẳng');
unset($choA);