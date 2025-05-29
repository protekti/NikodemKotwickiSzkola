<?php
class dwieliczby
{
    private $a;
    private $b;

    function _construct($p1, $p2)
    {
        $this->a=$p1;
        $this->b=$p2;
    }

    function suma()
    {
        return $this->a+$this->b;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function setA($ile)
    {
        $this->a=$ile;
    }
}

$b=new dwieliczby (5,7);
$b2=new dwieliczby (10,11);
echo "<br>".$b->suma();
//echo "<br>".$b->a; // brak dostepu
echo "<br>".$b->getA();
echo "<br>".$b2->getB()."<br>";
echo var_dump($b)."<br>";
echo var_dump($b2)."<br>";
$b->setA(100);
echo $b->getA();
echo "<br>".$b->suma();
?>