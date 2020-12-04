<?php

class ActeNonConventionne extends ActeMedical {

    private $honorairesSupp;

    public function __construct(string $nom, int $num, string $code, float $hono, float $tx = 0.4) {

        parent::__construct($nom, $num, $code, $tx);
        $this->honorairesSupp = $hono;
    }

    
    
}