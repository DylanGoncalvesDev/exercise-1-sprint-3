<?php
require_once "Attacker.php";

class Warrior extends Character implements Attacker {
 
   public function attack(): void {
      echo "¡Sword attack!";
   }
}