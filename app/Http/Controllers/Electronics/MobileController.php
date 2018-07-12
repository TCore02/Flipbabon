<?php

namespace App\Http\Controllers\Electronics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\mobile;
use Image;

class MobileController extends Controller
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
            $mobiles = mobile::all();
            return view('Electronics.mobile.mobiles',compact('mobiles'));
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
            return view('Electronics.mobile.add');
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
        $mobile = new mobile;
        $this->validate ($request,[
            'mobile_pic'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'             => 'required',
            'model'             => 'required|unique:mobiles,id,?????',
            'price'             => 'required|integer',
            'specification'     => 'required',
        ]);
        try
        {
            if($request->hasfile('mobile_pic'))
            {
                $profile = $request->file('mobile_pic');
                $profilename =time().'.'.$profile->getClientOriginalExtension();
                Image::make($profile)->save(public_path('image/Electronics/mobile/' . $profilename));
                $mobile->mobile_pic = $profilename;
            }
            $mobile->category       = $request->category;
            $mobile->sub_category    = $request->sub_caegory;
            $mobile->brand          = $request->brand;
            $mobile->model          = $request->model;
            $mobile->price          = $request->price;
            $mobile->specification  = $request->specification;
            $mobile->save();
            return redirect('mobiles');
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
            $item = mobile::find($id);
        return view('Electronics.mobile.show', compact('item'));
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
        $mobile = mobile::find($id);
        $this->validate ($request,[
            'mobile_pic'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'             => 'required',
            'model'             => 'required|unique:mobiles,id,?????',
            'price'             => 'required|integer',
            'specification'     => 'required',
        ]);
        try
        {
            if($request->hasfile('mobile_pic'))
            {
                $profile = $request->file('mobile_pic');
                $profilename =time().'.'.$profile->getClientOriginalExtension();
                Image::make($profile)->save(public_path('image/Electronics/mobile/' . $profilename));
                $mobile->mobile_pic = $profilename;
            }
            $mobile->category       = $request->category;
            $mobile->sub_category    = $request->sub_caegory;
            $mobile->brand          = $request->brand;
            $mobile->model          = $request->model;
            $mobile->price          = $request->price;
            $mobile->specification  = $request->specification;
            $mobile->update();
            return redirect('mobiles');
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
            $item = mobile::findOrFail($id);
            $item->delete();
            return redirect('mobiles');
        } catch (Exception $exception)
        {
            return $exception;
        }
    }
}
