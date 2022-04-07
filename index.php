<?php

require_once(dirname(__FILE__).'/Hero.php');
require_once(dirname(__FILE__).'/Orc.php');

$hero = new Hero(2000, 0, 'Necrolight', 250, 'Ancien Shield', 600);
$orc = new Orc(500, 0);

while(($hero->getHealth() > 0)&&($orc->getHealth()>0)) {
    $attackValue = $orc->attack();
    $hero->attacked($attackValue);
    $touch = $attackValue - $hero->getShieldValue();
    if ($hero->getHealth() > 0) {
        echo 
        "
        L'orc effectue une attaque causant {$attackValue} points de dégâts. <br>
        Les dégâts absorbés par l'armure sont de {$hero->getShieldValue()}, ceux non absorbés sont de {$touch}. <br>
        La rage actuelle du héros est de {$hero->getRage()}pr, il lui reste {$hero->getHealth()}pv. <br>
        ";
        if ($hero->getRage()>=100) {
            $orc->setHealth($hero->specialAttack($orc->getHealth()));
            echo
            "
            Le héros enrage et effectue une attaque dévastatrice de {$hero->getWeaponDamage()} points de dégâts! <br>
            ";
            $hero->setRage(0);
        }
    } else {
        echo 
        "
        Le héros est mort... <br>
        ";
    }
    if (($orc->getHealth() <= 0)) {
        echo
        "
        L'orc est tombe à 0pv et s'écroule par terre!
        ";
    } else {
        echo
        "
        Il reste {$orc->getHealth()} pv à l'orc. <br> <br>
        ";
    }
    
} 