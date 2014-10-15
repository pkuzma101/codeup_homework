<?php

$radiusDonut = 15;
$radiusHole = 5;

function areaOfDonut($radiusDonut) {
	return pow(pi() * $radiusDonut, 2);
}

function areaOfHole($radiusHole) {
	return pow(pi() * $radiusHole, 2);
}
echo areaOfDonut($radiusDonut) - areaOfHole($radiusHole) . PHP_EOL;


?>