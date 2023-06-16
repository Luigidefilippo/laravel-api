<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
      $projects = Project::all();
      return response()->json([
        'succes' => true,
        'results'=>$projects
      ]);      
    }



    public function show($slug){
      $project = Project::where('slug', $slug)->first();
      if($project){
        return response()->json([
          'succes' => true,
          'result' => $project
        ]);
      }else{
        return response()->json([
          'success' => false,
          'error' => 'Post non Trovato '
        ]);
      }
    }
}
