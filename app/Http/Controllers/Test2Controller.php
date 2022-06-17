<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
      /**
     * @OA\Get(
     *      path="/api/customers",
     *      description="Customer Resources",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              required={"name", "email", "password"},
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="email", type="string", format="email"),
     *              @OA\Property(property="password", type="string", format="password")
     *          ),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *      ),
     *     @OA\PathItem (
     *     ),
     * )
     */

    public function index()
    {
        return 1;
    }
}
