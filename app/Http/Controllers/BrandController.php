<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class BrandController extends Controller
{
    use ImageTrait;

    public function index(){
        return view ('admin.all-brands' , ['brands'=>Brand::all()]);
    }
    
    public function create(){
        return view ('admin.add-brand');
    }

    public function store(){
        
        $credentials = request()->validate([
            'name'  => ['required' ,"unique:brands,name"] ,
            'image' => ['image'] 
         ]);
        
        if(request()->has('image'))
        $credentials['image'] = $this->Saveimage('/Brands_images/');
        
        else{
        $credentials['image'] = "/storage/Brands_images/nophoto.jpg";
         }
        
        $credentials['slug'] = Str::of(request('name'))->slug('-');
        Brand::create($credentials);
        toastr()->success("Brand added successfully");
        return redirect ('/all-brands') ;
    }

    public function show (Brand $brand){
        return view('admin.edit-brand' , ['brand'=>$brand]);
    }

    public function update(Brand $brand){
        
        $credentials = request()->validate([
            'name'  => ['required',Rule::unique('categories','name')->ignore($brand)] ,
            'image' => ['image']
        ]);
        
        if(request()->has('image')){
        $this->Deleteimage('Brands_images/'.basename($brand->image) , basename($brand->image) );
        $credentials['image'] = $this->Saveimage('/Brands_images/');
        }
        $credentials['slug'] = Str::of(request('name'))->slug('-');
        $brand->update($credentials);
        
        toastr()->success("Brand has been updated successfully");

        return redirect ('/all-brands');
       
    }

    
    public function destroy (Brand $brand) {
        $brand->delete();
        $this->Deleteimage('Brands_images/'.basename($brand->image) , basename($brand->image) );  
    }
}
