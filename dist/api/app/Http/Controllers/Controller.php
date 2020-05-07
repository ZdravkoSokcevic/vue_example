<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\EditorPost;
use DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function saveEditorData(Request $r)
    {
    	$success= DB::table('editor_post')->insert($r->only((new EditorPost)->fillable));
    	if(!$success)
    		return response()->json(['message'=> 'could not save data'], 500);
    	return response()->json(['message' => 'success']);
    }

    public function retrieveAllEditorData(Request $r)
    {
    	$data= [
    		'data'=> DB::table('editor_post')->get()
    	];
    	return response()->json($data);
    }
}
