<?php

namespace App\Http\Controllers\Admin\Service;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddServiceController extends Controller
{
    public function add(){
        return view('admin.services.addservice');
    }
    public function create(Request $request){
        $service = new Service();
        $service-> servicename = $request->name;
        $service-> detail = $request->text;
        $service->save();

        return redirect()->route('service.index');
    }
}
