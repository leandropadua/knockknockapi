<?php

namespace App\Http;

/**
 * Basic inversion operations for strings.
 *
 * @author Leandro
 */
class StringInverter {
    public function reverseSentence($sentence) {
        
        //Iterate over the sentence to invert every word and keep the spaces.
        $sentenceLength = strlen($sentence);
        $reversedSentence = "\"";
        $currentWord = "";
        
        if(trim($sentence) == "") {
            return "\"\"";
        }
        
        for ($i = 0; $i < $sentenceLength; $i++) {
            $currentChar = $sentence[$i];

            //When current char is not blank, invert the word
            if($currentChar != " ") {
                $currentWord = $currentChar . $currentWord;
            }
            
            //When current char is blank, concatenate the inverted word and keep spaces
            if($currentChar == " ") {
                $reversedSentence = $reversedSentence . $currentWord . $currentChar;
                $currentWord = "";
            }
        }
        
        //If the last char was not blank, concatenate the last word
        $lastChar = $currentChar;
        if($lastChar != " ") {
            $reversedSentence = $reversedSentence . $currentWord;
        }
        
        $reversedSentence = $reversedSentence . "\"";
        
        return $reversedSentence;
    }
}
