<?php 
namespace b7;
class square extends rectangle{
    public function __construct($canh){
        $this->chieudai = $canh;
        $this->chieurong =$canh;
    }
    public function getname()
    {
        echo"đây là hình vuông";
    }
}
?>