<?php

namespace App\Http\Controllers;

use App\video;
use Illuminate\Http\Request;

class videocontroller extends Controller
{
    //
    public function index(){
        return view('addvideoinformation');
    }
    public function savevideo(Request $req){
     $data=[
'name'=>$req->get('name'),
'description'=>$req->get('description'),
'status'=>$req->get('status'),
     ];
     video::insert($data);
return redirect()->back();
    }
    public function disp(){
        $data=video::all();
        // dd($data);
        return view('managevideoinformation',compact('data',$data));
    }
    public function show(){
        $data=video::with('getdata')->get();
    //  return $data;
    return view('videoshow',compact('data',$data));
    }
    public function edit($id){
        $data=video::find($id);
        return view('editvideoinformation',compact('data',$data));



    }


    public function update(Request $req,$id){
        $data=[
   'name'=>$req->get('name'),
   'description'=>$req->get('description'),
   'status'=>$req->get('status'),
        ];
        video::where('id',$id)->update($data);
        return redirect()->route('video.disp');
       }

       public function delete($id){
        // dd("delete successfully");
        video::destroy($id);

        return redirect()->back();

    }


}
