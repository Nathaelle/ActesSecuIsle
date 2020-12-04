<?php

require_once "Transmettre.php";
require_once "ActeMedical.php";
require_once "ActeConventionneTraitant.php";
require_once "ActeConventionneNonTraitant.php";
require_once "ActeNonConventionne.php";

$acte1 = new ActeConventionneTraitant("Dupond", 156325698554, "MDC1568");
$acte2 = new ActeConventionneNonTraitant("Durand", 21569845697, "456987");
$acte3 = new ActeNonConventionne("Michel", 16985632566, "45SQD698632", 40);

