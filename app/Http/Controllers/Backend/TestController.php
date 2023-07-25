<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\ProductModel;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addproduct()
    {
     return view('frontend.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function productstor(Request $req)
    {
        $pinfo = new ProductModel();
         $pinfo->pname =$req->pname;
         $pinfo->pdes =$req->pdes;
         $pinfo->status =$req->status;
         $pinfo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
