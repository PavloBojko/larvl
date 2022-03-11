<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Services\ImageServis;

class imageController extends Controller
{
    private $imagImageServis;

    public function __construct(ImageServis $imagImageServis)
    {
        $this->imagImageServis = $imagImageServis;
    }
    public function index($var = null)
    {
        return view('welcome', ['image' => $this->imagImageServis->allImage()]);
    }

    public function create($var = null)
    {
        return view('create');
    }

    function show($id)
    {
        return view('show', ['image' => $this->imagImageServis->one($id)->image]);
    }

    function edit($id)
    {
        $image = $this->imagImageServis->one($id);
        return view('edit', ['image' => $image]);
    }

    function stor(Request $request)
    {
        $image = $request->file('image');
        // dd(get_class_methods($image));
        $this->imagImageServis->add($image);
        return redirect('/');
    }

    function update($id, Request $request)
    {
        // dd(get_class_methods($request));
        $src = $request->input('src');
        $image = $request->file('image');

        $this->imagImageServis->update($id, $src, $image);
        return redirect('/');
    }

    function delate($id)
    {
        $this->imagImageServis->delate($id);
        return redirect('/');
    }
}
