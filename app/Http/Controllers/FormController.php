<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();

        return view('admin_panel.pages.form',[
            'forms' => $forms
        ]);
    }

    public function getForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|alpha',
            'telephone' => 'required',
            'email' => 'required|email',
            'message' => 'nullable|max:255'
        ]);

        Form::create($data);

        return back();
    }

    public function destroy($id)
    {
        Form::find($id)->delete();

        return back();
    }
}
