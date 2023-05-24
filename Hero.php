<?php 
//exo4//
require_once(__DIR__.'/Character.php');
class Hero extends Character{
    private string $_weapon;
    private int $_weaponDamage;
    private string $_shield;
    private int $_shieldValue;

    //exo6//
    public function __construct($health = 100, $rage= 50, $weapon = 'épée', $weaponDamage=50, $shield='bouclier', $shieldValue = 40)
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

        /**
           * Summary of setWeapon
           * @param mixed $weapon
           * @return void
           */
    public function setWeapon(string $weapon) : void{
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
public function attacked(int $damage){
    if($this->_shieldValue > 0){
    $this->_health = $this->_health  - ($damage - $this->_shieldValue);
    $this->_shieldValue = $this->_shieldValue - $damage;
    }else{
        $this->_shieldValue = 0;
        $this-> _health = $this-> _health - $damage;
    }
    $this-> _rage += 30;
    }

    public function attack($value) {
    if($this->getShieldValue()>0){
        $real = $value-$this->getShieldValue();
        $this->setHealth($this->getHealth()-$real);
        $this->setShieldValue($this->getShieldValue()-$value);
    }else{
        $this->setHealth($this->getHealth()-$value);
    // }else($hero->getRage () + 100){
    // $hero->attacked();
}
    }
}
