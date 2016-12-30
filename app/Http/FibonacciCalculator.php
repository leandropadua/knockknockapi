<?php

namespace App\Http;

/**
 * Basic Fibonacci related calculations.
 *
 * @author Leandro
 */
class FibonacciCalculator {
    public function getFibonacciSequenceNumber($n) {
        
        $n = intval($n);
        if($n == 0) {
            return 0;
        }
        
        //Calculate fibonacci for positive values
        $fib0 = 0;
        $fib1 = 1;
        for ($i = 2; $i <= abs($n); $i++)
        {
           $tmp = $fib0;
           $fib0 = $fib1;
           $fib1 = $tmp + $fib1;
        }
        $positiveFibonacci = $fib1;
        
        if($n > 0) {
            return $positiveFibonacci;
        }
        
        //For negative values, invert the result signal when a even number
        //is given
        $negativeFactor = pow(-1, $n + 1);
        return $negativeFactor * $positiveFibonacci;
    }
}
