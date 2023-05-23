<?php
class Orc extends Character{
    private $damage;

	/**
	 * @return mixed
	 */
	public function getDamage() {
		return $this->damage;
	}
	
	/**
	 * @param mixed $damage 
	 * @return self
	 */
	public function setDamage($damage): self {
		$this->damage = $damage;
		return $this;
	}
}

?>