<?php

namespace App\Http\Controllers;

/**
 * ApiController to create a default definition for Swagger
 *
 * @author Leandro Padua
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="192.168.0.123/api/public",
 *     schemes={"http"},
 *     @SWG\Info(title="Knock knock API", version="1.0",
 *          @SWG\Contact(name="Leandro Padua")
 *     )
 * )
 */
class ApiController extends Controller
{
}
