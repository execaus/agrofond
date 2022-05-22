<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\api\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{

    public function index()
    {
        return view('admin_panel.pages.services');
    }

    public function store(Request $request)
    {
        $file = $request->file('image')->store('/services', 'public');

        $data = $request->all();

        $data['image'] = $file;

        Services::create($data);

        return back();
    }

    public function showAll()
    {
        $services = Services::orderByDesc('created_at')->get();

        return view('admin_panel.pages.all-services',[
            'services' => $services
        ]);
    }

    public function update(Request $request, $id)
    {
        $services = Services::findOrFail($id);

        $data = $request->all();

        if(!$request->image){
            $data['image'] = $services->image;
        }
        else{
            $file = $request->file('image')->store('/news', 'public');
            $data['image'] = $file;
            Storage::disk('public')->delete($services->image);
        }

        $services->update($data);

        return back();
    }

    public function destroy($id)
    {
        $services = Services::find($id);
        Storage::disk('public')->delete($services->image);

        $services->delete();
        return back();
    }
}
