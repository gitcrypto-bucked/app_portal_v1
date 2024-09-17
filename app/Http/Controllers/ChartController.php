<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /** Função que monta os dados a serem exibidos via chartJS */
    public static function chartNoticias()
    {
        $model = new NewsModel();
        // Replace this with your actual data retrieval logic
        $data = $model->chartNews(); #return $data;
        $totals = array();
        $dates = array();
        array_push($totals,0);
        array_push($dates, 0);
        for($i = 0; $i < count($data); $i++)
        {
            array_push($totals, $data[$i]->total);
            array_push($dates,date('d/m/Y H:i:s'));
        }

        return [$totals, $dates];
    }



}
