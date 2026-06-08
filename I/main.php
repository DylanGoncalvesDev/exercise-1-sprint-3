<?php
require_once "Switchable.php";
require_once "Heatable.php";
require_once "Coolable.php";
require_once "Washable.php";
require_once "ElectricHeater.php";
require_once "WashingMachine.php";

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();

echo PHP_EOL;

$washer->turnOn();
$washer->wash();
$washer->turnOff();