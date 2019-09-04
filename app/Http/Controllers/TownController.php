<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TownController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function dslQuery(Request $request) {

        $fields = $request->json()->get('fields');
        return $request->json()->get('fields');
        
    }
}