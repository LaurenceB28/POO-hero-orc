<?php
//exo1//
class Character{
    protected int $_health;
    protected int $_rage;
//exo2//
    public function getHealth(){
        return $this->_health;
    }
    public function setHealth(int $health): void{
        $this->_health = $health;
    }

    public function getRage(){
        return $this->_rage;
    }
    public function setRage(int $rage): void{
        $this->_rage = $rage;
    }
//exo3//
    /**
     * Summary of __construct
     * @param mixed $health
     * @param mixed $rage
     */
    public function __construct(int $health, int $rage){
        $this->_health = $health;
        $this->_rage = $rage;
        //OU//
        $this->setHealth($health);
        $this->setRage($rage);
    }
}


