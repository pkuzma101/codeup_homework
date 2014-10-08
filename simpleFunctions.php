<?php
 
/* TASK 1 */
 
    // Here is an array of strings:
 
    $arrayOfStrings = [ 'when you are done', 'with This task', 'this should Form', 'A complete sentence', 'with APPROPRIATE punctuation'];
 
    //  DO NOT MODIFY THE ARRAY OF STRINGS DIRECTLY!  Like, don't go into the above data and start changing 
    // letters and stuff. That's totally cheating, you cheater!
 
    //  You need to write a function that will accept the above array of input, and output a complete (and readable) sentence.
    // Make sure that the word "When" appears with a capital letter.  Make sure all other letters are lowercase.  
    // Add a period at the end of the sentence.  All words should have only one space between them.

    function sentence($arrayOfStrings) {
        $a = ucfirst($arrayOfStrings[0]);
        $b = strtolower($arrayOfStrings[1]);
        $c = strtolower($arrayOfStrings[2]);
        $d = strtolower($arrayOfStrings[3]);
        $e = strtolower($arrayOfStrings[4]);

        echo "$a" . " " . "$b" . " " . "$c" . " " . "$d" . " " . "$e" . "." . PHP_EOL;
    }


    sentence($arrayOfStrings);
 
/* TASK 2 */
 
    // Write a function that will generate 5 random integers between 1, 100 - returned as an array.
    
    // Assign that array to a variable called $numbers.
    
    // Write another function that will accept the array $numbers and return the minimum and maximum numbers in that array.
 
    // Can you make these into one function?
 
?>