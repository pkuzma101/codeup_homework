<?php
define ('SIDES_OF_DICE', 6);
// This is where it decides what you rolled
$roll = mt_rand(1, SIDES_OF_DICE);
// This is where it will tell you what you rolled
echo "You rolled {$roll}\n";

?>

