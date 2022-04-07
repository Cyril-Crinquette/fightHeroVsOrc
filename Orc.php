<?php

require_once(dirname(__FILE__).'/Character.php');

class Orc extends Character {
    private int $_damage;

    public function setDamage(int $damage):void{
        $this->_damage = $damage;
    }

    public function getDamage(){
        return $this->_damage;
    }


    public function __construct(int $health, int $rage){
        Character::__construct($health, $rage);
    }

    public function __toString(){
        return
        'Un nouvel orc est créé: <br>
        Points de santé ' .$this->getHealth(). '<br>
        Points de rage: ' .$this->getRage(). '<br><br>';
    }

    public function attack():int{
        $this->setDamage(rand(600,800));
        return $this->_damage;
    } 
}

$orc1 = new Orc(40, 10);

//echo $orc1->__toString();




