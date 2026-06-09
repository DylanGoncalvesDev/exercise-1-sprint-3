<?php
class Ghost extends Character
{
    public function move(): void
    {
       echo "The ghost floats silently.\n";
    }

    public function scare(): void 
    {
       echo "Boooo!.\n";
    }
}