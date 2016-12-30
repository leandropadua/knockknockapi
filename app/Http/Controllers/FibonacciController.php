<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\FibonacciCalculator;

/**
 * /api/Fibonacci
 *
 * @author Leandro
 */
class FibonacciController extends ApiController {
    protected $fibonacciCalculator = null;
    
    public function __construct(FibonacciCalculator $fibonacciCalculator) {
        $this->fibonacciCalculator = $fibonacciCalculator;
    }

    /**
    * Returns the nth fibonacci number.
    * @SWG\Get(
    *     path="/api/Fibonacci",
    *     description="Returns the nth number in the fibonacci sequence.",
    *     operationId="api.fibonacci",
    *     produces={"application/json"},
    *     tags={"Fibonacci"},
    *     @SWG\Response(
    *         response=200,
    *         description="Fibonacci Calculator."
    *     ),
    *    @SWG\Parameter(
    *         name="n",
    *         in="query",
    *         description="The index (n) of the fibonacci sequence",
    *         required=true,
    *         type="integer",
    *         format="int64"
    *    )
    * )
    */
    public function getFibonacciSequenceNumber(Request $request) {
        $n = $request->input('n');

        //Check if the request is valid.
        if(!is_numeric($n)) {
            $response = array('message' => 'The request is invalid.');
            return response(json_encode($response), Response::HTTP_BAD_REQUEST);
        }
        
        return $this->fibonacciCalculator->getFibonacciSequenceNumber($n);
    }
}
