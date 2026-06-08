<?php

interface IMachineActions
{
    public function turnOn(): void;
    public function turnOff(): void;
    public function heat(): void;
    public function cool(): void;
    public function wash(): void;
}

//require_once 'IMachineActions.php';

class WashingMachine implements IMachineActions
{
    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function heat(): void
    {
        // Not supported
        throw new Exception("Heating not supported");
    }

    public function cool(): void
    {
        // Not supported
        throw new Exception("Cooling not supported");
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}

//require_once 'IMachineActions.php';

class ElectricHeater implements IMachineActions
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }

    public function cool(): void
    {
        // Not supported
        throw new Exception("Cooling not supported");
    }

    public function wash(): void
    {
        // Not supported
        throw new Exception("Washing not supported");
    }
}

//require_once 'classes/ElectricHeater.php';
//require_once 'classes/WashingMachine.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();
$heater->wash();

echo "\n";

$washer->turnOn();
$washer->heat();
$washer->wash();
$washer->turnOff();
?>