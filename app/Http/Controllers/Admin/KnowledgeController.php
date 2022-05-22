<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\api\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Knowledge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KnowledgeController extends Controller
{
    
    public function index()
    {
        $knowledge = Knowledge::all();

        return view('admin_panel.pages.knowledge',[
            'knowledge' => $knowledge,
        ]);
    }

    public function store(Request $request)
    {
        $file = $request->file('file');

        if($file->extension() === 'pdf'){

            $data = $request->all();

            $file = $file->storeAs('/knowledge', $data['name'].'.pdf','public');

            $data['file'] = $file;

            Knowledge::create($data);
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        $knowledge = Knowledge::findOrFail($id);

        $data = $request->all();

        if(!$request->file){

            $data['file'] = $knowledge->file;
        }
        else{

            $file = $request->file('file');

            if($file->extension() === 'pdf'){

                $file = $file->storeAs('/knowledge', $data['name'].'.pdf','public');

                $data['file'] = $file;

                Storage::disk('public')->delete($knowledge->file);
            }
        }

        $knowledge->update($data);

        return back();
    }

    public function destroy($id)
    {
        $knowledge = Knowledge::find($id);
        Storage::disk('public')->delete($knowledge->file);

        $knowledge->delete();
        return back();
    }
}
