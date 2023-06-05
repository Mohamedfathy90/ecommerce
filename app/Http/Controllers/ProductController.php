<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductItem;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.all-products' , ['products'=>Product::with(['seller','brand'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.add-product' , ['brands'=>Brand::all() , 'categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // $credentials = request()->validate([
        //     'name'      => ['required'] , 
            
        // ]);
        
        // $tags = explode(",", request('tags'));
        // $product = Product::create([
        //     'name' =>  request('name'),
        // ]);
    	
        // $product->tag($tags);

        // $sizes  = explode(",", request('size'));
        // $colors = explode(",", request('color'));

        // foreach($sizes as $size){
        // $size= ProductColor::create(['size'=>$size]);
        // $sizes_id[] = $size->id ;
        // }
        
        // foreach($colors as $color){
        // $color= ProductColor::create(['color'=>$color]);
        // $colors_id[] = $color->id ;
        // }
        
        // $product->productsizes()->attach($sizes_id);
        // $product->productcolors()->attach($colors_id);
        

        // $sizes  = ProductSize::all();
        // foreach($sizes as $size)
        // $sizes_id[] = $size->id; 
        // $product =Product::Find(12);
        // $product->productsizes()->sync($sizes_id);
        
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
    public function update()
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
