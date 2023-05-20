<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;


class BrandController extends Controller
{
    use ImageTrait;

    public function index(){
        confirmDelete("Delete Brand!", "Are you sure you want to delete?");
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
            if(Storage::exists('Brands_images/'.basename($brand->image))) {
            unlink(storage_path('/app/public/Brands_images/').basename($brand->image));
            }
        $credentials['image'] = $this->Saveimage('/Brands_images/');
        }

        $brand->update($credentials);
        
        toastr()->success("Brand has been updated successfully");

        return redirect ('/all-brands');
       
    }

    
    public function destroy (Brand $brand) {
        $brand->delete();
        // toastr()->info('Brand deleted successfully');
        $message = array('message' => 'Success!', 'title' => 'Updated');
        return response()->json($message);
        // return response()->json(['url'=>'/all-brands']);
        //session()->flash('success','category updated');
    }
}
