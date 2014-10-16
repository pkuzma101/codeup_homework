<?php



// function daysOfMonth($month, $year){
// 	return date("F") . " " . "has" . " " .  date("t") . " " . "days in it." . PHP_EOL;
// }

// daysOfMonth(date("F"));function daysInMonth($date) {
	
// }

// function daysOfMonth($days, $month) {
// 	echo date()
// }

// echo date("F") . " " . "has " . date("t") . " " . "days in it." . PHP_EOL;

// $originalDate = "2014-10-15";
// $newDate = date("01-01-2014", strtotime($originalDate));

// function findDate($newDate) {
// 	$originalDate = "2014-10-15";
// 	$newDate = date("01-01-2014", strtotime($originalDate));
// 	echo $newDate("F") . " " . "has " . $newDate("t") . " " . "days in it." . PHP_EOL;
// }

// findDate();

// $month = date("F");


// $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// $year = date('Y');
// // cal_days_in_month(CAL_GREGORIAN, month, year)

function daysOfMonth($monthName, $monthNum) {
	$numDays = date('t', strtotime($monthName));
	return "$monthName has $numDays days.";
}


echo "Please enter a month: ";
$input = trim(fgets(STDIN));
$monthNum = date('m', strtotime('October'));

echo daysOfMonth($input, $monthNum) . PHP_EOL;

?>