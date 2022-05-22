<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\api\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Solutions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolutionsController extends Controller
{

    public function index()
    {
        $solutions = Solutions::all();

        $categories = Categories::all();

        return view('admin_panel.pages.solutions',[
            'solutions' => $solutions,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $file = $request->file('file');

        if($file->extension() === 'pdf'){

            $data = $request->all();

            $file = $file->storeAs('/solutions', $data['name'].'.pdf','public');

            $data['file'] = $file;

            Solutions::create($data);
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        $solutions = Solutions::findOrFail($id);

        $data = $request->all();

        if(!$request->file){

            $data['file'] = $solutions->file;
        }
        else{

            $file = $request->file('file');

            if($file->extension() === 'pdf'){

                $file = $file->storeAs('/solutions', $data['name'].'.pdf','public');

                $data['file'] = $file;

                Storage::disk('public')->delete($solutions->file);
            }
            else{
                return back();
            }
        }

        $solutions->update($data);

        return back();
    }

    public function destroy($id)
    {
        $solutions = Solutions::find($id);
        Storage::disk('public')->delete($solutions->file);

        $solutions->delete();
        return back();
    }
}
