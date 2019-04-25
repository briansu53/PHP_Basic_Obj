<?php
//6-3 定義一個類別

class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }
}

//6-2 建立與使用物件

$soup = new Entree;
$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken', 'water');

$sandwich = new Entree;
$sandwich ->name = 'Chicken sandwitch';
$sandwich ->ingredients = array('chicken', 'bread');

foreach(['chicken','lemon', 'water','bread'] as $ing){
    if($soup->hasIngredient($ing)){
        print "Soup contains $ing.\n";
    }
    if($sandwich->hasIngredient($ing)){
        print "Sandwich contains $ing.\n";
    }
}

?>