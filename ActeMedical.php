<?php

abstract class ActeMedical implements Transmettre {

    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;
    protected $tarif;

    public function __construct(string $nom, int $num, string $code, float $tx) {
        $this->nomPatient = $nom;
        $this->numSecu = $num;
        $this->codeMutuelle = $code;
        $this->tauxRemboursement = $tx;
    }

    public function prescrire(): string {
        return "Paracetamol 1000";
    }

    public function facturer(): float {
        return 0;
    }

}