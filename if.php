<?php

$a = 5;
$b = 10;
$c = 20;

if($a < $b) {
 	// output the appropriate result
 	echo "{$a} is less than {$b}\n";
 }
 else {
 	echo "{$a} is greater than {$b}\n";
 }

// if($b > $a) {
//  	// output the appropriate result
// 	echo "$b is greater than $a\n";
//  }

if($b >= $c) {
	//output the appropriate result
	echo "{$b} is greater than or equal to {$c}\n";
}
else {
	echo "{$b} is less than or equal to {$c}\n";
}

// if($b <= $c) {
// 	//output the appropriate result
// 	echo "$b is less than or equal to $c\n";
// }

if($b == $c) {
	echo "{$b} is equal to {$c}\n";
}
elseif($b === $c) {
	echo "{$b} is not identical to {$c}\n";
}

elseif($b != $c) {
	echo "{$b} is not equal to {$c}\n";
}

//if($b !== $c) {
else {
	echo "{$b} is not identical to {$c}\n";
}

?>
