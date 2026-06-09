<?php
class Character
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }

    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }
}

include('Character.php');

class Ghost extends Character
{
    public function move(): void
    {
        echo "The ghost floats silently.\n";
    }

    public function attack(): void
    {
        // Ghosts can't attack in this game
        throw new Exception("Ghosts cannot attack!");
    }
}

include('classes/Ghost.php');

function doCombat(Character $character)
{
    $character->move();
    $character->attack(); 
}

$enemy = new Ghost();
doCombat($enemy); 