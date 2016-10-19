<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\VideoList;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
  

class VideoListController extends Controller
{
    //show all the videos
    public function index()
    {
    	$videos = VideoList::all();
        return view('videoList',['videos' => $videos]);
	}

	//add new videos to page 
	protected function add()
	{

	}

	//delete videos on page 
	protected function delete()
	{
		
	}
}
