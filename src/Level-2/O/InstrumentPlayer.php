<?php
class InstrumentPlayer
{
    public function playInstrument(Play $instrument): void
    {
        echo $instrument->play();
    }
}