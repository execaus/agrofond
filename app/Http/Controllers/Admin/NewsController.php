<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\api\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function index()
    {
        return view('admin_panel.pages.news');
    }

    public function store(Request $request)
    {
        $file = $request->file('image')->store('/news', 'public');

        $data = $request->all();

        $data['image'] = $file;

        News::create($data);

        return back();
    }

    public function showAll()
    {
        $news = News::orderByDesc('created_at')->get();

        return view('admin_panel.pages.all-news',[
            'news' => $news
        ]);
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $data = $request->all();

        if(!$request->image){
            $data['image'] = $news->image;
        }
        else{
            $file = $request->file('image')->store('/news', 'public');
            $data['image'] = $file;
            Storage::disk('public')->delete($news->image);
        }

        $news->update($data);

        return back();
    }

    public function destroy($id)
    {
        $news = News::find($id);
        Storage::disk('public')->delete($news->image);

        $news->delete();
        return back();
    }

}
