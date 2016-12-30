<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\StringInverter;

/**
 * /api/ReverseWords
 *
 * @author Leandro
 */
class ReverseWordsController extends ApiController {

    protected $stringInverter = null;

    public function __construct(StringInverter $stringInverter) {
        $this->stringInverter = $stringInverter;
    }

    /**
    * Reverses the letters of each word in a sentence.
    * @SWG\Get(
    *     path="/api/ReverseWords",
    *     description="Reverses the letters of each word in a sentence.",
    *     operationId="api.reverseWords",
    *     produces={"application/json"},
    *     tags={"ReverseWords"},
    *     @SWG\Response(
    *         response=200,
    *         description="Reverse Sentence."
    *     ),
    *    @SWG\Parameter(
    *         name="sentence",
    *         in="query",
    *         description="A sentence",
    *         required=true,
    *         type="string"
    *    )
    * )
    */    
    public function reverseWordsInSentence (Request $request) {
        $sentence = $request->input('sentence');
        return $this->stringInverter->reverseSentence($sentence);
    }
}
