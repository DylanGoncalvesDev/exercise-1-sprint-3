<?php
class OlympicReporter {
   private array $results;

   public function __construct(array $results) {
        $this->results = $results;
   }

   public function reportResults(): string {
       $report = "";
       foreach ($this->results as $result) {
                $report .= $result . PHP_EOL;
       }
       return $report;
   }
}