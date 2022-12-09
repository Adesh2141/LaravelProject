<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProcuctsControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Products::all();
        return view('product.index')->with(compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',

        ]);
        $product=new Products();
        if ($request->hasFile('image')) {
            $doc = $request->file('image');
            $docName = Storage::disk('public_uploads')->put('ProductImage', $doc);
            $product->image = $docName;
        }
        $product->name=$request->post('name');
        $product->upc=$request->post('upc');
        $product->price=$request->post('price');
        $product->status=$request->post('status');
        $product->save();
        $request->session()->flash('success', 'product created successfully');
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Products::find($id);
        return view('product.create')->with(compact('product'));
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
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',

        ]);
        $product=Products::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            @unlink(public_path('uploads / ' . $product->image));
            $filename = Storage::disk('public_uploads')->put('ProductImage', $image);
            $product->image = $filename;
        }
        $product->name=$request->post('name');
        $product->upc=$request->post('upc');
        $product->price=$request->post('price');
        $product->status=$request->post('status');
        $product->save();
        $request->session()->flash('warning', 'product updated successfully');
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        $status = $message = '';
        if (Products::destroy($id)) {
            $status = 'error';
            $message = 'product deleted successfully.';
        } else {

            $status = 'info';
            $message = 'product failed to delete.';
        }
        $request->session()->flash($status, $message);
        return redirect('product');
    }
}
