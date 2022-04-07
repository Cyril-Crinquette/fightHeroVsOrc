<?php

require_once(dirname(__FILE__).'/Character.php'); 

class Hero extends Character{
    //déclaration d’attributs spécifiques à la classe 'Hero' fille de 'Character'
    private string $_weapon;
    private int $_weaponDamage;
    private string $_shield;
    private int $_shieldValue;


    /**
     * GETTER pour l'attribut '_weapon' de 'Hero'
     * @return string
     */
    public function getWeapon():string{
        return $this->_weapon;
    }

    /**
     * GETTER pour l'attribut '_weaponDamage' de 'Hero'
     * @return int
     */
    public function getWeaponDamage():int{
        return $this->_weaponDamage;
    }

    /**
     * GETTER pour l'attribut '_shield' de 'Hero'
     * @return string
     */
    public function getShield():string{
        return $this->_shield;
    }

    /**
     * GETTER pour l'attribut '_shieldValue' de 'Hero'
     * @return int
     */
    public function getShieldValue():int{
        return $this->_shieldValue;
    }


    /**
     * SETTER pour l'attribut privé _weapon
     * @param string $weapon
     * @return void
     */
    public function setWeapon(string $weapon):void{
        $this->_weapon = $weapon;
    }

    /**
     * SETTER pour l'attribut privé _weaponDamage
     * @param int $weaponDamage
     * @return void
     */
    public function setWeaponDamage(int $weaponDamage):void{
        $this->_weaponDamage = $weaponDamage;
    }

    /**
     * SETTER pour l'attribut privé _shield
     * @param string $shield
     * @return void
     */
    public function setshield(string $shield):void{
        $this->_shield = $shield;
    }

    /**
     * SETTER pour l'attribut privé _shieldValue
     * @param int $shieldValue
     * @return void
     */
    public function setshieldValue(int $shieldValue):void{
        $this->_shieldValue = $shieldValue;
    }

    /**
     * Le nouveau héros sera créé grâce aux différents paramètres rentrés, qui deviendront ses caractéristiques
     * @param int $health
     * @param int $rage
     * @param string $weapon
     * @param int $weaponDamage
     * @param string $shield
     * @param string $shieldValue
     */

    public function __construct(int $health, int $rage, string $weapon, int $weaponDamage, string $shield, string $shieldValue){
        Character::__construct($health, $rage);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
    }

    /**
     * Méthode permettant d'afficher une phrase résumant les différentes caractéristiques du héros
     * @return [type]
     */
    public function __toString(){
        return
        'Un nouveau héros est créé: <br>
        Points de santé ' .$this->getHealth(). '<br>
        Points de rage: ' .$this->getRage(). '<br>
        Nom de l\'arme: ' .$this->getWeapon(). '<br>
        Dégâts de l\'arme: ' .$this->getWeaponDamage(). '<br>
        Nom du bouclier: ' .$this->getShield().'<br>
        Protection du bouclier: ' .$this->getShieldValue(). '<br><br>';
    }


    /**
     * Création d'une méthode 'attacked' permettant de redéfinir les points de santé du héros en fonction de l'attaque subie
     * @param int $attackValue
     * @return [type]
     */
    public function attacked(int $attackValue){
        $damage = $attackValue - $this->getShieldValue(); 
        # La valeur du bouclier permettra d'absorber ou non l'attaque ennemie
        if ($damage>0) {
            $this->setHealth($this->getHealth() - $damage);
            # Si la valeur du bouclier n'est pas assez importante, les PV seront atteints
            $this->setRage($this->getRage() + 30);
            # A chaque coup reçu, la rage du héros augmente de 30
        }
    }

    /**
     * Méthode permettant de changer les points de santé d'un ennemi touché par l'attaque spéciale du héros
     * @param mixed $victimHealth
     * @return int
     */
    public function specialAttack($victimHealth):int{
        $victimHealth = $victimHealth - $this->getWeaponDamage();
        return $victimHealth;
    } 
}


    # Création d'un nouveau héros appelé 'character1', à l'extèrieur de la classe
    $character1 = new Hero(100, 0, 'Necrolight', 10, 'Ancien Shield', 100);
    // var_dump($character1);

    # On affiche les caractéristiques de 'character1' grâce à la méthode '__toString' définie dans la classe 'Character'
    // echo $character1->__toString();

    



    


