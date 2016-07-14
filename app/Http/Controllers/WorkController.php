<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use Storage;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('create.work');
    }

    public function create()
    {
        return view('pages.create-work');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'github' => 'required',
            //'preview' => 'required|mimes:jpg,jpeg,png'
        ]);

        Work::create($request->all());

        return redirect('/portfolio');
    }

    public function getPreviewTn($filename)
    {
        $file = Storage::get(Work::getThumbnailDir() . $filename);

        return new Response($file, 200);
    }
}
