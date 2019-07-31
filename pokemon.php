<?php
class Pokemon
{
    public $level;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attack()
    {
        echo '攻撃';

    }
     public function getName()
     {
         return $this->name;
     }
}
$pokemon = new Pokemon('ピカチュウ');

$pokemon->level = 3;
echo $pokemon->level;
$pokemon->attack();

//echo $pokemon->name;

$fushigidane = new Pokemon('フシギダネ');
$zenigame = new Pokemon('ゼニガメ');

echo $fushigidane->getName();
echo $zenigame->getName();

