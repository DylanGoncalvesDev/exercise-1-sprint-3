<?php
require_once "Play.php";
require_once "Guitar.php";
require_once "Drums.php";
require_once "Piano.php";
require_once "InstrumentPlayer.php";

$guitar = new Guitar();
$drums = new Drums();
$piano = new Piano();

$player = new InstrumentPlayer();

echo $player->playInstrument($guitar);