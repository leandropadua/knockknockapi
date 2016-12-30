<?php

namespace App\Http\Controllers;

use App\Http\Token;

/**
 * /api/Token
 *
 * @author Leandro
 */
class TokenController extends ApiController {
    
    protected $token = null;
    
    public function __construct(Token $token) {
        $this->token = $token;
    }
    
    /**
    * My Token
    * @SWG\Get(
    *     path="/api/Token",
    *     description="My Token.",
    *     operationId="api.token",
    *     produces={"application/json"},
    *     tags={"Token"},
    *     @SWG\Response(
    *         response=200,
    *         description="My Token."
    *     )
    * )
    */
    public function getToken() {
        return $this->token->toString();
    }
}
