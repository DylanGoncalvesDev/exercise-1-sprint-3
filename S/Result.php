<?php
require_once "Athlete.php";
require_once "Event.php";

enum Medal {
   case Bronze;
   case Silver;
   case Gold;
}

class Result {
  private Athlete $athlete;
  private Event $event;
  private Medal $medal;

  public function __construct(Athlete $athlete, Event $event, Medal $medal) {
    $this->athlete = $athlete;
    $this->event = $event;
    $this->medal = $medal;
  }

  public function __toString(): string {
    return $this->athlete . " Won " . $this->medal . " Medal in " . $this->event;
  }

}