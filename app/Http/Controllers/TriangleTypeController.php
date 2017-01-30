<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\TriangleCalculator;

/**
 * /api/TriangleType
 *
 * @author Leandro
 */
class TriangleTypeController extends ApiController {
    protected $triangleCalculator = null;

    public function __construct(TriangleCalculator $triangleCalculator) {
        $this->triangleCalculator = $triangleCalculator;
    }

    /**
    * Returns the type of triange given the lengths of its sides. 
    * @SWG\Get(
    *     path="/api/TriangleType",
    *     description="Returns the type of triange given the lengths of its sides.",
    *     operationId="api.triangletype",
    *     produces={"application/json"},
    *     tags={"TriangleType"},
    *     @SWG\Response(
    *         response=200,
    *         description="Triangle Type Discover."
    *     ),
    *    @SWG\Parameter(
    *         name="a",
    *         in="query",
    *         description="The length of side a",
    *         required=true,
    *         type="integer",
    *         format="int32"
    *    ),
    *    @SWG\Parameter(
    *         name="b",
    *         in="query",
    *         description="The length of side b",
    *         required=true,
    *         type="integer",
    *         format="int32"
    *    ),
    *    @SWG\Parameter(
    *         name="c",
    *         in="query",
    *         description="The length of side c",
    *         required=true,
    *         type="integer",
    *         format="int32"
    *    )
    * )
    */
    public function getTriangleType(Request $request) {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
       
        //Check if the request is valid.
        if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
            $response = array('message' => 'The request is invalid.');
            return response(json_encode($response), Response::HTTP_BAD_REQUEST);
        }
        
        return  $this->triangleCalculator->getTriangleType($a, $b, $c);
    }
}
