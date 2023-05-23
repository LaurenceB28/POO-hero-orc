<?php 
//exo4//
require_once(__DIR__.'/Character.php');
class Hero extends Character{
    private string $_weapon;
    private int $_weaponDamage;
    private string $_shield;
    private int $_shieldValue;

    //exo6//
    public function __construct($health, $rage, $weapon, $weaponDamage, $shield, $shieldValue)
    {
        $this-> _weapon = $weapon;
        $this-> _weaponDamage = $weaponDamage;
        $this-> _shield = $shield;
        $this-> _shieldValue = $shieldValue;
        parent::__construct($health,$rage);
    }
    
    
//exo5//
        public function getWeapon(): string {
		return $this->_weapon;
	}

    public function setWeapon(string $weapon): void {
		$this->_weapon = $weapon;
	}

    public function getWeaponDamage(): int {
		return $this->_weaponDamage;
	}

    public function setWeaponDamage(int $weaponDamage): void {
		$this->_weaponDamage = $weaponDamage;
	}
	public function getShield(): string {
		return $this->_shield;
	}

    public function setShield(string $shield): void{
		$this->_shield = $shield;
	}

    public function getShieldValue():int {
		return $this->_shieldValue;
	}

    public function setShieldValue(int $shieldValue): void {
		$this->_shieldValue = $shieldValue;
	}



    
    public function __toString(): string{
        return 'héro : '. $this->_health;
    }

//exo7//
/**
 * Summary of attacked
 * @param mixed $hero
 * @return void
 */
public function attacked($hero){
    if($hero->getDamage() - $this->_shieldValue > 0){
        $this->setHealth ($this->_shield - ($hero->getDamage() - $this->_shieldValue));
    }else{

    }
}

}

$hero = new Character('swore',1,'shield',1,100,50);
echo $hero;
?>