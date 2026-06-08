<?php
require_once "Attacker.php";
require_once "Character.php";
require_once "Warrior.php";
require_once "Ghost.php";


function doCombat(Character $character)
{
    $character->move();
    
    if ($character instanceof Attacker) {
        $character->attack();
    }
}

$enemy = new Ghost();
doCombat($enemy);
$enemy->scare();

$warrior = new Warrior();
doCombat($warrior);
