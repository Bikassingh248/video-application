<?php

namespace App\Http\Controllers;

use App\videolist;
use Illuminate\Http\Request;

class videolistcontroller extends Controller
{
    //
    public function index(){
        return view('addvideolist');
    }
    public function savevideolink(Request $req){
        $video_url='';
        if($req->hasfile('video')){
            $file=$req->file('video');
            $new_name=str_random(5).time().$file->getClientOriginalName();
            $path=public_path('uploads');
            $file->move($path,$new_name);
            $video_url=asset('uploads/'.$new_name);
        }
     $data=[
'name'=>$req->get('name'),
'link'=>$video_url ?? '',
'video_id'=>$req->get('id'),
     ];
     videolist::insert($data);
     return redirect()->back();
    }

    public function disp(){
        $data=videolist::all();
        // dd($data);
        return view('managevideolistinformation',compact('data',$data));
    }

    public function edit($id){
        $data=videolist::find($id);

        return view('editvideolist',compact('data',$data));



    }

    public function update(Request $req,$id){
        $video_url='';
        if($req->hasfile('video')){
            $file=$req->file('video');
            $new_name=str_random(5).time().$file->getClientOriginalName();
            $path=public_path('uploads');
            $file->move($path,$new_name);
            $video_url=asset('uploads/'.$new_name);
        }
     $data=[
'name'=>$req->get('name'),
'link'=>$video_url ?? '',
'video_id'=>$req->get('id'),
     ];
     videolist::where('id',$id)->update($data);
     return redirect()->route('videolist.disp');
    }

    public function delete($id){
        // dd("delete successfully");
        videolist::destroy($id);

        return redirect()->back();

    }
}
