<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class TestController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/profiles",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *      ),
     * )
     */
    
    public function index()
    {
        $profiles = ["Amal", "Kamal", "Nimal", "Sadun"];
        return response()->json()->status($profiles);
    }
}
