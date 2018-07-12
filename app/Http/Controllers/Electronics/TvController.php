<?php

namespace App\Http\Controllers\Electronics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tv;
use Image;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $tv = tv::all();
            return view('Electronics.tv.tv',compact('tv'));
        }
        catch (\Exception $exception)
        {
            return $exception;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try
        {
            return view('Electronics.tv.add');
        }
        catch (\Exception $exception)
        {
            return $exception;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tv = new tv;
        $this->validate ($request,[
            'tv_pic'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'             => 'required',
            'model'             => 'required|unique:tvs,id,?????',
            'price'             => 'required|integer',
            'specification'     => 'required',
        ]);
        try
        {
            if($request->hasfile('tv_pic'))
            {
                $profile = $request->file('tv_pic');
                $profilename =time().'.'.$profile->getClientOriginalExtension();
                Image::make($profile)->save(public_path('image/Electronics/tv/' . $profilename));
                $tv->tv_pic = $profilename;
            }
            $tv->category       = $request->category;
            $tv->sub_category    = $request->sub_caegory;
            $tv->brand          = $request->brand;
            $tv->model          = $request->model;
            $tv->price          = $request->price;
            $tv->specification  = $request->specification;
            $tv->save();
            return redirect('tv');
        }
        catch (\Exception $exception)
        {
            return $exception;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try
        {
            $item = tv::find($id);
        return view('Electronics.tv.show', compact('item'));
        }
        catch (\Exception $exception)
        {
            return $exception;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
            $item = mobile::find($id);
            return view('Electronics.mobile.edit',compact('item'));
        }
        catch (\Exception $exception)
        {
            return $exception;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tv = tv::find($id);
        $this->validate ($request,[
            'tv_pic'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'             => 'required',
            'model'             => 'required|unique:tvs,id,?????',
            'price'             => 'required|integer',
            'specification'     => 'required',
        ]);
        try
        {
            if($request->hasfile('tv_pic'))
            {
                $profile = $request->file('tv_pic');
                $profilename =time().'.'.$profile->getClientOriginalExtension();
                Image::make($profile)->save(public_path('image/Electronics/tv/' . $profilename));
                $tv->tv_pic = $profilename;
            }
            $tv->category       = $request->category;
            $tv->sub_category    = $request->sub_caegory;
            $tv->brand          = $request->brand;
            $tv->model          = $request->model;
            $tv->price          = $request->price;
            $tv->specification  = $request->specification;
            $v->update();
            return redirect('tv');
        }
        catch (\Exception $exception)
        {
            return $exception;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $item = tv::findOrFail($id);
            $item->delete();
            return redirect('tv');
        } catch (Exception $exception)
        {
            return $exception;
        }
    }
}
