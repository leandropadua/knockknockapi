<?php

namespace App\Http;

/**
 * Basic triangle related calculations.
 *
 * @author Leandro
 */
class TriangleCalculator {
    
    public function __construct() {
        define("INVALID_TRIANGLE","\"Error\"");
        define("INVALID_INPUT","\"Error\"");
        define("EQUILATERAL_TRIANGLE","\"Equilateral\"");
        define("ISOSCELES_TRIANGLE","\"Isosceles\"");
        define("SCALENE_TRIANGLE","\"Scalene\"");
    }
    
    public function getTriangleType($a, $b, $c) {
        
        //Convert input into integers
        //Invalid inputs will became zero
        $a = intval($a);
        $b = intval($b);
        $c = intval($c);

        //Error message in case of negative values or zeros
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            return INVALID_INPUT;
        }
        
        //Error message in case it is not a triangle
        if ($a+$b <= $c && $a+$c <= $b && $b+$c <= $a) {
            return INVALID_TRIANGLE;
        }
        
        //Equilateral
        if($a == $b && $a == $c) {
            return EQUILATERAL_TRIANGLE;
        }
        
        //Isosceles (it must come after equilateral)
        if($a == $b || $a == $c || $b == $c) {
            return ISOSCELES_TRIANGLE;
        }        

        //Scalene
        if($a != $b && $a != $c && $b != $c) {
            return SCALENE_TRIANGLE;
        }
        
        //All the other cases should return an error
        return INVALID_TRIANGLE;
        
    }
}
