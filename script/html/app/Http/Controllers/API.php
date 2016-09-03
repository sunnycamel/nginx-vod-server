<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Video;

class API extends Controller
{
     public function videos()
     {
          $videos = Video::all();
          return $videos->toJson();
     }
}
