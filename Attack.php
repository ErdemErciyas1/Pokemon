<?php


Class Attack{

    public $Attack;

//
    function __construct ($attack)
    {
        $this->Attack = $attack;
    }

    public function Attack()
    {
        return $this->Attack;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
//