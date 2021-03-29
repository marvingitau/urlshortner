<?php

namespace App\Http\Controllers;

use App\Shortner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ShortnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortLinks = Shortner::latest()->get();
        return view('welcome',compact('shortLinks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->validate(
            [
                'link'=>'required',
            ]
        );
        $input['link'] = $res['link'];
        $input['shortner'] = Str::random(6);
        Shortner::create($input);
        return back()->with('success','Url Generated');

    }

    public function shortenLink($code)
    {

        $find = Shortner::where('shortner', $code)->first();
        return redirect($find->link);

    }

}
