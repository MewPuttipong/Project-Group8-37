<?php

namespace App\Http\Controllers\Admin\Background;
use App\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class BackgroundController extends Controller
{
    public function index(){
        $background = Background::first()->paginate(5);
        return view('admin.background.index',compact('background'));
    }
    public function add(){
        return view('admin.background.addbackground');
    }
    public function create(Request $request){
        $background = new Background();

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $background->image = $filename;
        }else{
            $background->image = 'NOPIC.jpg';
        }
        $background->save();
        return redirect()->route('background.index');
    }
    public function edit($id_bg){
        $background = Background::find($id_bg);    
        return view('admin.background.editbackground',compact('background'));
    }
    public function update(Request $request, $id_bg){
        if($request->hasFile('image')){
            $background = Background::find($id_bg);
            if($background->image!= 'NOPIC.jpg'){
                File::delete(public_path().'admin/images/'.$background->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $background->image = $filename;
        }else{
            $background = Background::find($id_bg);

        }
        $background->save();
        return redirect()->route('background.index');
    }
    public function destroy($id_bg){
        Background::destroy($id_bg);
        return redirect()->route('background.index');
    }
    
}
