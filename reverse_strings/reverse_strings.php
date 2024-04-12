<?php
    function reverseString($phrase) {
        $phraseAsArray = str_split($phrase);
        $reversePhrase = [];
        
        for ($index = count($phraseAsArray) -1; $index >= 0; $index--) {
            $reversePhrase[] = $phraseAsArray[$index];
        }
        
        return implode("", $reversePhrase);
    }
    
    echo reverseString("Hola mundo"); //odnum aloH
?>
