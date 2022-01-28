<?php

namespace App\Http\Controllers\Admin\Content;
use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ContentController extends Controller
{
    public function index(){
        $content = Content::first()->paginate(5);
        return view('admin.content.index',compact('content'));
    }
    public function add(){
        return view('admin.content.addcontent');
    }
    public function create(Request $request){
        $content = new Content();
        $content-> contentname = $request->name;
        $content-> detail = $request->text;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $content->image = $filename;
        }else{
            $content->image = 'NOPIC.jpg';
        }
        $content->save();
        return redirect()->route('content.index');
    }
    public function edit($content_id){
        $content = Content::find($content_id);    
        return view('admin.content.editcontent',compact('content'));
    }
    public function destroy($content_id){
        Content::destroy($content_id);
        return redirect()->route('content.index');
    }
    public function update(Request $request, $content_id){
        if($request->hasFile('image')){
            $content = Content::find($content_id);
            if($content->image!= 'NOPIC.jpg'){
                File::delete(public_path().'admin/images/'.$content->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $content->contentname = $request->name;
            $content->detail = $request->text;
            $content->image = $filename;
        }else{
            $content = Content::find($content_id);
            $content->contentname = $request->name;
            $content->detail = $request->text;

        }
        $content->save();
        return redirect()->route('content.index');
    }
}
