<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\QueryBuilder\Query;

class TransformController extends Controller
{
    public function index(){
        $file = base_path('resources/request-data.json');
        $jsonObject = json_decode(file_get_contents($file), true);
        $builder = new Query($jsonObject);
        echo $builder->build();
    }
}
