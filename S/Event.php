<?php
class Event {

private string $event;
private string $date;

public function __construct(string $event, string $date;) {
     $this->event = $event;
     $this->date = $date;
}

public function getEvent(): string {
   return $this->event;
}

public function getDate(): string {
  return $this->event;
}

public function __toString(): string {
    return "The Event " . $this->event . " Occurred on " . $this->date;
}

}