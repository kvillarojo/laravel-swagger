<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="127.0.0.1:8000",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Akira Test API",
 *         @SWG\Contact(name="Akira", url="https://www.google.com"),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */

class ApiController extends Controller
{
    //
}
