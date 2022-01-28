<?php

namespace App\Http\Controllers\Admin\Service;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::first()->paginate(5);
        return view('admin.services.index',compact('service'));
    }
    public function destroy($id_service){
        Service::destroy($id_service);
        return redirect()->route('service.index');
    }
    public function edit($id){
        $editservice = Service::find($id);
        return view('admin.services.editservice',compact('editservice'));
    }
    public function update(Request $request, $id){
        $prong = Service::find($id);
        $prong->servicename = $request->name;
        $prong->detail = $request->detail;
        $prong->save();

        return redirect('admin/service/index');

    }
}
