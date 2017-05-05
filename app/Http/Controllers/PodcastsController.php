<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PodcastsController extends Controller
{

    public function index()
    {
        return view('content.buttonMosh');
    }

    public function create()
    {
        
    }
  
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = mt_rand(999,999999)."_".time()."_".$request->image->getClientOriginalExtension();
        //$type = $request->image->guessClientExtension();
        $request->image->move(public_path('uploads/images'), $imageName);
        $imagePath = asset('/public/uploads/images/')."/".$imageName;
        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imagePath);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
