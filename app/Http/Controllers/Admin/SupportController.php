<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SupportMeasures;
use App\Models\SupportType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupportController extends Controller
{
    public function index()
    {
        $support_types = SupportType::all();

        return view('admin_panel.pages.support',[
            'support_types' => $support_types
        ]);
    }

    public function showAll()
    {
        $support_measures = SupportMeasures::orderByDesc('created_at')->get();

        $support_types = SupportType::all();

        return view('admin_panel.pages.all-support',[
            'support_measures' => $support_measures,
            'support_types' => $support_types
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $fileImage = $request->file('image')->store('/support/images', 'public');
        $data['image'] = $fileImage;

        $file = $request->file('file');

        if($file->extension() === 'pdf'){

            $file = $file->storeAs('/support/files', $data['title'].'.pdf','public');

            $data['file'] = $file;

            SupportMeasures::create($data);
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        $supportMeasures = SupportMeasures::findOrFail($id);

        $data = $request->all();

        if(!$request->image){
            $data['image'] = $supportMeasures->image;
        }
        else{

            $fileImage = $request->file('image')->store('/support/images', 'public');
            $data['image'] = $fileImage;
            Storage::disk('public')->delete($supportMeasures->image);
        }

        if(!$request->file){

            $data['file'] = $supportMeasures->file;
        }
        else{

            $file = $request->file('file');

            if($file->extension() === 'pdf'){

                $file = $file->storeAs('/support/files', $data['title'].'.pdf','public');

                $data['file'] = $file;

                Storage::disk('public')->delete($supportMeasures->file);
            }
            else{
                return back();
            }
        }

        $supportMeasures->update($data);

        return back();
    }

    public function destroy($id)
    {
        $supportMeasures = SupportMeasures::find($id);
        Storage::disk('public')->delete($supportMeasures->image);
        Storage::disk('public')->delete($supportMeasures->file);

        $supportMeasures->delete();
        return back();
    }
}
