<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\QueryBuilder;

class TransformController extends Controller
{
    public function index(){
      $json = base_path('resources/request-data.json');
      $jsonObject = json_decode(file_get_contents($json), true);

      $builder = new QueryBuilder($jsonObject);
      echo $builder->build();
    }
}
