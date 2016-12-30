<?php

namespace App\Http;

/**
 * Unique token
 *
 * @author Leandro
 */
class Token {
    public function __construct() {
        define('TOKEN','bf636b0d-42d3-464a-9b13-8c08bc9ab5e1');
    }
    
    public static function toString() {
        return TOKEN;
    }
}
