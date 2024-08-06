<?php
interface Drawable
{
    
    public function draw();

}

class Circle implements Drawable
{
    public function draw()
    {
        echo "draw Cricle";
    }
}

class Rectangle implements Drawable
{
    public function draw()
    {
        echo "Drawing a rectangle";
    }
}

$circle = new Circle();
$rectangle = new Rectangle();
$circle->draw();
echo "</br>";
$rectangle->draw(); 

?>