<?php

/* ---------------------------
    HIGH LOW REDEUX
 
    Remember your high_low game?  The boss says it needs some functions.  
 
    Some junior developer went buckwild and tried to do it all in one fell swoop.  
    Now its up to you to clean up his mess, and make it all work properly.
 
      You've been given the following template with the function calls in place, 
    but you need to define those functions to make this code work.
 
  ---------------------------  */
 
// Define Functions Here
 
/* THIS IS WHERE YOU'RE GONNA BE DOING ALL YOUR WORK. */
 
// End Function Definitions
function generateRandomNumber() {
    $number = mt_rand(1, 100);
    return $number;
}

function promptUserForGuess() {
    fwrite(STDOUT, "Guess a number between 1 and 100.");
}

function acceptUserGuess() {
    $input = fgets(STDIN);
    return $input;
}

function evaluateUserGuess($guess, $randomNumber, $count) {
    if($randomNumber > $guess) {
            fwrite(STDOUT, "Guess Higher");
        }
        elseif($randomNumber < $guess) {
            fwrite(STDOUT, "Guess Lower");
            }
        elseif($randomNumber == $guess) {
            fwrite(STDOUT, "Right-O, chap!!" . " " . "And in $count guesses!");
        }
}

// $input = trim(fgets(STDIN));
 
/*  BELOW THIS LINE, YOU DON'T HAVE TO MODIFY CODE! */
 
// Initialize Count
$count = 0;
 
// Generate Random Number
$randomNumber = generateRandomNumber();
 
// Begin Main Game Loop
do {
 
    // Allow User to Guess @ Random Number
    echo promptUserForGuess();
 
    // Define $guess according to captured input
    $guess = acceptUserGuess();
    
    // Increment Count by One
    $count++;
    
    //   This function should return a string of either higher, lower, 
    // or a success message if they guessed the number correctly.
 
    // Evaluate User Guess
    echo evaluateUserGuess($guess, $randomNumber, $count) . PHP_EOL;
    
} while ($guess != $randomNumber);