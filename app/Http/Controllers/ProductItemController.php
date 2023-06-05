<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductItem;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new product item
     */
    public function create(Product $product)
    {
    return view('admin.add-productitem',[
        'colors'=>ProductColor::all() , 'sizes'=>ProductSize::all() , 'product'=>$product
    ]);
    
    }

    /**
     * Store a newly created product item.
     */
    public function store(Product $product)
    {
             request()->validate([
             'quantity' => ['required' , 'integer'] , 
             ]);
            
           
           $SKU = $product->id.request('color').request('size');
           
           $duplicate = ProductItem::where('SKU',$SKU)->first();
            if($duplicate){
                throw ValidationException::withMessages(['sku'=>"Product item already exists !!"]);
            }
            ProductItem::create([
                'product_id' => $product->id , 
                'color_id'   => request('color') ,
                'size_id'    => request('size') ,
                'SKU'        => $SKU, 
                'quantity'   => request('quantity') ,
            ]);
    
            return redirect('/productitems/'.$product->id);
        }
    



    /**
     * Display product items related to specific product.
     */

    public function show(Product $product)
    {
    $productitems = ProductItem::where('product_id',$product->id)->get();
    return view('admin.all-productitems',['product'=>$product,'productitems'=>$productitems->load(['product','productitemcolor','productitemsize'])]);
        
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
