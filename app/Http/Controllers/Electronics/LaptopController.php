<?php

namespace App\Http\Controllers\Electronics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\laptop;
use Image;

class LaptopController extends Controller
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
            $laptop = laptop::all();
            return view('Electronics.laptop.laptop',compact('laptop'));
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
            return view('Electronics.laptop.add');
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
        $laptop = new laptop;
        $this->validate ($request,[
            'laptop_pic'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'             => 'required',
            'model'             => 'required|unique:laptops,id,?????',
            'price'             => 'required|integer',
            'specification'     => 'required',
        ]);
        try
        {
            if($request->hasfile('laptop_pic'))
            {
                $profile = $request->file('laptop_pic');
                $profilename =time().'.'.$profile->getClientOriginalExtension();
                Image::make($profile)->save(public_path('image/Electronics/laptop/' . $profilename));
                $laptop->laptop_pic = $profilename;
            }
            $laptop->category       = $request->category;
            $laptop->sub_category    = $request->sub_caegory;
            $laptop->brand          = $request->brand;
            $laptop->model          = $request->model;
            $laptop->price          = $request->price;
            $laptop->specification  = $request->specification;
            $laptop->save();
            return redirect('laptop');
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
            $item = laptop::find($id);
        return view('Electronics.laptop.show', compact('item'));
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
            $item = laptop::find($id);
            return view('Electronics.laptop.edit',compact('item'));
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
        $laptop = laptop::find($id);
        $this->validate ($request,[
            'laptop_pic'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'             => 'required',
            'model'             => 'required|unique:laptops,id,?????',
            'price'             => 'required|integer',
            'specification'     => 'required',
        ]);
        try
        {
            if($request->hasfile('laptop_pic'))
            {
                $profile = $request->file('laptop_pic');
                $profilename =time().'.'.$profile->getClientOriginalExtension();
                Image::make($profile)->save(public_path('image/Electronics/laptop/' . $profilename));
                $laptop->laptop_pic = $profilename;
            }
            $laptop->category       = $request->category;
            $laptop->sub_category    = $request->sub_caegory;
            $laptop->brand          = $request->brand;
            $laptop->model          = $request->model;
            $laptop->price          = $request->price;
            $laptop->specification  = $request->specification;
            $laptop->update();
            return redirect('laptop');
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
            $item = laptop::findOrFail($id);
            $item->delete();
            return redirect('laptop');
        } catch (Exception $exception)
        {
            return $exception;
        }
    }
}
