<?php
require_once(__DIR__.'/Character.php');
class Orc extends Character{
    private $_damage;

	/**
	 * Summary of __construct
	 */
	public function __construct($damage, $health, $rage){
		$this->_damage = $damage;
		// parent::__construct($health, $rage);
		$this->setHealth($health);
		$this->setRage($rage);
		}
	/**
	 * @return mixed
	 */
	public function getDamage() : int {
		return $this->_damage;
	}
	
	/**
	 * @param mixed $damage 
	 * @return self
	 */
	public function setDamage(int $damage){
		$this->_damage = $damage;
	}
	public function attack(){
		$this->$damage random_int(600, 800);
		if ($hero instanceof Hero) {
            $hero->attacked($this);
        }
	}	
}

$orc = new orc(100, 50, 60);
var_dump($orc);
