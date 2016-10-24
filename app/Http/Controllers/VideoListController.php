<?php

namespace App\Http\Controllers;

// use App\Utils\Utils
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
      	// $originalUrl  = "7xvypf.com1.z0.glb.clouddn.com/chrisieltssex.MP4";
		// $encodedUrl = UtilsHashUrl::privateDownloadUrl($originalUrl);
		  return view('videoList',['videos' => $videos]);
	}

	//初级教程
	public function beginner(){
		$videos = VideoList::where('course_level', '初级')
					->get();

		return view('videoList',['videos' => $videos]);
	}

	//中级教程
	public function intermidiate(){
		$videos = VideoList::where('course_level', '中级')
					->get();

		return view('videoList',['videos' => $videos]);
	}
	//高级教程
	public function advance(){
		$videos = VideoList::where('course_level', '高级')
					->get();

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
