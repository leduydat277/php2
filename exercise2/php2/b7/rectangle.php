<?php 
namespace b7;
class rectangle{
    public $chieudai;
    public $chieurong;
    public function __construct($chieudai,$chieurong)
    {
        $this->chieudai = $chieudai;
        $this->chieurong = $chieurong;

    }
    public function tinhdientich(){
        return $this->chieudai *
        $this->chieurong;
    }
public function getname(){
    echo "đây là hình chữ nhật";
}
// public final function getname k cho class ghi đè
}
?>