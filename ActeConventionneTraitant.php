<?php

class ActeConventionneTraitant extends ActeMedical {

    public function __construct(string $nom, int $num, string $code, float $tx = 0.7) {

        parent::__construct($nom, $num, $code, $tx);
    }
    
}