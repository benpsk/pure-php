<?php 


// function lookandsay($s) {
//     // initialize the return value to the empty string
//     $r = '';
//     // $m holds the character we're counting, initialize to the first
//     // character in the string
//     $m = $s[0];
//     // $n is the number of $m's we've seen, initialize to 1
//     $n = 1;
//     for ($i = 1, $j = strlen($s); $i < $j; $i++) {
//         // if this character is the same as the last one
//         if ($s[$i] == $m) {
//             // increment the count of this character
//             $n++;
//         } else {
//             // otherwise, add the count and character to the return value
//             $r .= $n.$m;
//             // set the character we're looking for to the current one
//             $m = $s[$i];
//             // and reset the count to 1
//             $n = 1;
//         }
//     }
//     // return the built up string as well as the last count and character
//     return $r.$n.$m;
// }


function lookAndSay($currentSequence)
{
    $newSequence = '';
    $character = $currentSequence[0];
    $currentCharacterCount = 1;

    for ($i = 1; $i < strlen($currentSequence); $i++) {
        if ($currentSequence[$i] == $character) {
            $currentCharacterCount++;
        } else {
            $newSequence .= $currentCharacterCount . $character;
            $character = $currentSequence[$i];
            $currentCharacterCount = 1;
        }
    }
    return $newSequence . $currentCharacterCount . $character;
}

$sequence = 1;

for ($i = 0; $i < 10; $i++) {
    $sequence = $this->lookandsay($sequence);
    print "$sequence<br>";
}