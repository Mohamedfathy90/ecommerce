<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\Brand;
use Illuminate\Http\Request;

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
        $credentials['image'] = "/storage/profile_images/nophoto.jpg";
         }

        Brand::create($credentials);
        toastr()->success("Brand added successfully");
        return redirect ('/all-brands') ;
    }

    public function show (Brand $brand){
        return view('admin.edit-brand' , ['brand'=>$brand]);
    }

    public function update(Brand $brand){
        
        $credentials = request()->validate([
            'name'  => ['required'] ,
            'image' => ['image']
        ]);
        
        if(request()->has('image')){
        $credentials['image'] = $this->Saveimage('/Brands_images/');
        }
        
        $brand->update($credentials);
        
        toastr()->success('Brand updated successfully');

        return redirect ('/all-brands');
       
    }

    
    public function destroy (Brand $brand) {
        $brand->delete();
        toastr()->success('Brand deleted successfully');
        return redirect ('/all-brands');
    }
}
