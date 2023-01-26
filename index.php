<?php
abstract class Cats
{
    public $name;
    public $skinType;
    public $prey;
    public $weight;

    function __construct($name, $skinType, $prey, $weight)
    {
        $this->name = $name;
        $this->skinType = $skinType;
        $this->prey = $prey;
        $this->weight = $weight;
    }
    abstract protected function animalRoar();
    abstract protected function interactionWithPerson();
}
class Cat extends Cats
{
    function __construct($name, $skinType, $prey, $weight) {
        parent::__construct($name, $skinType, $prey, $weight);
    }    
    public function animalRoar()
    {
        return "мур-мяу";
    }
    public function interactionWithPerson()
    {
        return "підлабузник під рукою";
    }
}
class Lynx extends Cats
{
    function __construct($name, $skinType, $prey, $weight) {
        parent::__construct($name, $skinType, $prey, $weight);
    }   
    public function animalRoar()
    {
        return "ріііі-рііі";
    }
    public function interactionWithPerson()
    {
        return "надеру їбальник якщо підійдеш";
    }
}
class Cheetah extends Cats
{
    function __construct($name, $skinType, $prey, $weight) {
        parent::__construct($name, $skinType, $prey, $weight);
    }  
    public function animalRoar()
    {
        return "рааррараррр гарчу";
    }
    public function interactionWithPerson()
    {
        return "біжи не біжи а станеш хорошим руським";
    }
}
$cat = new Cat("Кіт очеретяний", 'плямиста', 'гризуни', '8кг');
$lynx = new Lynx('Рись канадська', 'полосата', 'зайці', '11кг');
$cheetah = new Cheetah('Гепа́рд струнки́й', 'однокольорова', 'антилопа', '30кг');