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
    public function getAggs($key) {

        $nbr_towns = DB::table('towns')->where('dept_code', '=', $key)->count();

        if ($nbr_towns > 0) {

            $max_population = DB::table('towns')->where('dept_code', '=', $key)->max('population');
            $min_population = DB::table('towns')->where('dept_code', '=', $key)->min('population');
            $avg_population = DB::table('towns')->where('dept_code', '=', $key)->avg('population');

            $aggs['nbr_towns_by_dept_code'] = $nbr_towns;
            $aggs['max_population_by_dept_code'] = $max_population;
            $aggs['min_population_by_dept_code'] = $min_population;
            $aggs['avg_population_by_dept_code'] = $avg_population;

            return response()->json($aggs, 200, (['charset' => 'utf-8']));

        } else {

            return response()->json(['message' => 'No Content'], 204, (['charset' => 'utf-8']));

        }
        
    }
}