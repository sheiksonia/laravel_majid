<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addproduct()
    {
        return view("backend.addproduct");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function status($id)
    {
       $status = ProductModel::find($id);
       if($status->status == 1){

        $status->status = 2;
       }else{
        $status->status = 1;
       }
       $status->update();
       return redirect()->route("showproduct");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function productstore(Request $rqst)
    {
        $product = new ProductModel;
        $product->pname = $rqst->pname;
        $product->pdes = $rqst->pdes;
        $product->cat = $rqst->cat;
        $product->scat = $rqst->scat;
        $product->price = $rqst->price;
        $product->status = $rqst->status;
        $product->save();
        return redirect()->route("showproduct");
    }

    /**
     * Display the specified resource.
     */
    public function showproduct()
    {
        $products = ProductModel::all(); 
        return view("backend.showproduct",compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edditproduct($id)
    {
         $products = ProductModel::find($id); 
        return view("backend.edditproduct",compact("products"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $rqst, $id)
    {
        $data = ProductModel::find($id);
        $data->pname = $rqst->pname;
        $data->pdes = $rqst->pdes;
        $data->cat = $rqst->cat;
        $data->scat = $rqst->scat;
        $data->price = $rqst->price;
        $data->status = $rqst->status;
        $data->update();
        return redirect()->route("showproduct");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $delete = ProductModel::find($id);
        $delete->delete();
        return redirect()->route("showproduct");
    }
}
