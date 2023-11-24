<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {


        return view('admin.video', ['video' => Video::all()]);
    }

    public function store(Request $request)
    {


        $video = $request->all();
        $filepath = $request->file('video')->store('videos', 'public');
        $video['video'] = $filepath;
        $video['clarge'] = $request->clarge;
        $video['cmedium'] = $request->cmedium;
        Video::create($video);

        return back()->with('success', 'Video has been successfully uploaded.');
    }

    public function showVideo($id){
        return view('admin.showVideo', ['showVideo'=> Video::find($id)]);
    }

    public function updateVideo($id)
    {
        $video = Video::find($id);



        return view('admin.updatevideo', ['updatevideo'=>[$video]]);
    }
    public function updateSubmit(Request $request,$id){
        $video = Video::find($id);
        $filepath = $request->file('video')->store('videos', 'public');
        $video['video'] = $filepath;
        $video['clarge'] = $request->clarge;
        $video['cmedium'] = $request->cmedium;
        $video->update($request->all($filepath));



        return redirect()->route('admin.video',$id);
    }

    public function destroyVideo(Video $video){
        $video = Video::first();
        $video->delete();

        return redirect()->route('admin.video');
    }
}

