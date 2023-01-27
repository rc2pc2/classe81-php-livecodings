<?php

    /**
    * Generates a random password, given a number of chars.
    *
    * @param $charsNumber the length of the generated password
    *
    * @return string the generated password
    */
    function generatePassword($charsNumber){

        $charsNumber = ($charsNumber >= 25) ? 25 : $charsNumber;
        $generatedString = '';


        $alphaChars = 'abcdefghilmnopqrstuwzvx';
        $numbers = '1234567890';
        $symbols = '!"£$%&/()=?|\\';

        $genericString = $alphaChars . $numbers . $symbols;
        /**
         *
         *  finché la stringa non è lunga quanto l'utente ha chiesto
         * aggiungi un carattere randomico tra quelli presenti in alphaChars
         *
         */
        while ( strlen($generatedString) < $charsNumber){
            $generatedString .= substr($genericString, random_int(0, strlen($genericString) - 1), 1);
        }

        return $generatedString;
    }


    /**
    * Generates a random password, given a number of chars.
    *
    * @param $charsNumber the length of the generated password
    *
    * @return string the generated password
    */


    /**
     * Generate a password without repeated characters
     *
     * @param $charsNumber length of the password to be generated
     * @param $hasChars when true it includes standard characters in our password
     * @param $hasNumbers when true it includes numbers in our password
     * @param $hasSymbols when true it includes symbols in our password
     * @return void
     */
    function generatePasswordWithoutRepeatedChars($charsNumber, $hasUniqueChars,  $hasChars, $hasNumbers, $hasSymbols){

        $charsNumber = ($charsNumber >= 25) ? 25 : $charsNumber;
        $generatedString = '';


        $alphaChars = 'abcdefghilmnopqrstuwzvxABCDEFGHILMNOPQRSTUVZXWY';
        $numbers = '1234567890';
        $symbols = '!"£$%&/()=?|\\';

        $genericString = "";


        if ($hasChars){
            $genericString .= $alphaChars;
        }

        if ($hasNumbers){
            $genericString .= $numbers;
        }

        if ($hasSymbols){
            $genericString .= $symbols;
        }

        $maximumLength = (strlen($genericString) > $charsNumber) ? $charsNumber  : strlen($genericString);

        while ( strlen($generatedString) < $maximumLength){
            $randomEl = substr($genericString, random_int(0, strlen($genericString) - 1), 1);
            if (!$hasUniqueChars){
                if (!str_contains($generatedString, $randomEl)) $generatedString .= $randomEl;
            } else {
                $generatedString .= $randomEl;
            }
        }

        return $generatedString;
    }
?>