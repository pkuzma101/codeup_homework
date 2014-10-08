<?php

$trees = array(
    'Scale' => array(
        'genus' => 'Lepidodendron',
        'species' => 'freakius',
        'extinct' => true,
    ),
    'Lambert Pine' => array(
        'genus' => 'Pinus',
        'species' => 'lambertiana',
        'extinct' => false
    ),
    'English Oak' => array(
        'genus' => 'Quercus',
        'species' => 'robur',
        'extinct' => false
    ),
    'Coast Redwood' => array(
        'genus' => 'Sequoia',
        'species' => 'sempervirens',
        'extinct' => false
    )
);

foreach($trees as $key => $tree) {
	if($tree['extinct'] == true) {
		echo "{$key} Tree" . " " . "(" . $tree['genus'] . " " . $tree['species'] . ")\n";
		echo "Extinct?  Yes\n";
		echo "----------------------\n";
	}
	elseif($tree['extinct'] == false) {
		echo "{$key} Tree" . " " . "(" . $tree['genus'] . " " . $tree['species'] . ")\n";
		echo "Extinct?  No\n";
		echo "----------------------\n";
	}
	}

// foreach($trees as $treeName => $properties) {
// 	echo "$treeName Tree" . "(" . $properties['genus'] . " " . $properties['species'] . ")\n";
// }
// 		if($properties['extinct'] == TRUE) {
// 			echo 'Extinct?' . " Yes" . PHP_EOL;
// 			break;
// 		}
// 		else {
// 			echo "Extinct?" . " No" . PHP_EOL;
// 		}
// 	echo "-----------------------" . PHP_EOL;




?>