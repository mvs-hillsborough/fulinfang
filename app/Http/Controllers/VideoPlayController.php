<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class VideoPlayController extends Controller
{
    //

    public function index($courseId)
    {
    	$video = DB::select('select * from video_lists where id =?',[$courseId]);

    	return view('videoPlay',["video" => $video[0]]);
    }
}
