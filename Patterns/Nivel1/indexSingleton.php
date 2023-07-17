<?php
include('tigger.php');
$tigger = Tigger::getInstance();
$tigger->roar();
$tigger->roar();
$tigger->roar();
echo "Tigger ha rugido " . $tigger->getCounter() . " veces";
?>