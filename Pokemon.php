<?php


class Pokemon {

public $name;
public $max_health;
public $health;
public $energytype;
public $energytypes;
public $attack;
public $weakness;

function __construct($name, $max_health, $health, $energytype, $energytypes, $attack, $weakness){
$this->name = $name
$this->max_health = $max_health
$this->health = $health
$this->$energytype = $energytype
$this->$energytypes = $energytypes
$this->attack = $attack
$this->weakness = $weakness

}


function SetName($newName){
  $this->name = $newName;
}

function GetName(){
  return $this->name;
}

function GetHealth($newHealth){
  $this->health = $newHealth;
}

function GetHealth(){
  return $this->health;
}

function GetAttackDamage(){
  $attack->$thisattacks[$attackNumber];
  $damage = $attack->GetDamage();
  return $damage


  $targetHealth = $targetPokemon->GetHealth();
  $targetPokemon->SetHealth($targetHealth - $damage);

}
}





 ?>
