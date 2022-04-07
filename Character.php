<?php
    
    /**
     * On crée la classe 'Character' commençant par une majuscule (convention)
     * Le nom de la classe aura trés souvent le même nom que le nom de fichier (convention)
     */
    class Character { 
        /** 
         * La classe contient les attributs 'health' et 'rage'
         * private empêche les attributs d'être accessibles en dehors de la classe
         * on définit les types des attributs, ici 'int'
         */
        private int $_health;        
        private int $_rage;    
        
        /**
         * GETTER pour les attributs de Character, en l'occurence '_health'
         * Cette méthode retournera un entier
         */
        public function getHealth():int{
            return $this->_health;
        }
        /**
         * GETTER pour les attributs de Character, en l'occurence '_rage'
         * Cette méthode retournera un entier
         */
        public function getRage():int{
            return $this->_rage;
        }

        /**
         * SETTER pour l'attribut privé _health
         * @param int $health
         * @return [type]
         */
        public function setHealth(int $health){
            $this->_health = $health;
        }
        /**
         * SETTER pour l'attribut privé _rage
         * @param int $rage
         * @return [type]
         */
        public function setRage(int $rage){
            $this->_rage = $rage;
        }

        /**
         * Méthode magique '__construct' qui permet de définir un personnage par sa santé et sa rage
         * @param mixed $health
         * @param mixed $rage
         */
        public function __construct($health, $rage){
            $this->setHealth($health);
            $this->setRage($rage);
        }
    }
    # Exemple d'un nouvel objet 'character1'
    $character1 = new Character(100,0);
    # L'objet 'character1' nouvellement créé a une santé de 100 et un rage de 0


