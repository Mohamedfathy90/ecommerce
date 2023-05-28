<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    
    use ImageTrait;
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.all-categories' , ['categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.add-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $credentials = request()->validate([
            'name'  => ['required' ,"unique:categories,name"] ,
            'image' => ['image'] 
         ]);
        
        if(request()->has('image'))
        $credentials['image'] = $this->Saveimage('/Categories_images/');
        
        else{
        $credentials['image'] = "/storage/Categories_images/nophoto.jpg";
         }

        $credentials['slug'] = Str::of(request('name'))->slug('-');
        Category::create($credentials);
        toastr()->success("Category added successfully");
        return redirect ('/all-categories') ;
    }

    /**
     * Display the specified resource.
     */
   
    public function show (Category $category){
        return view('admin.edit-category' , ['category'=>$category]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category)
    {
        $credentials = request()->validate([
            'name'  => ['required',Rule::unique('categories','name')->ignore($category)] ,
            'image' => ['image']
        ]);
        
        if(request()->has('image')){
        $this->Deleteimage('Categories_images/'.basename($category->image) ,basename($category->image) );
        $credentials['image'] = $this->Saveimage('/Categories_images/');
        }
        $credentials['slug'] = Str::of(request('name'))->slug('-');
        $category->update($credentials);
        
        toastr()->success("Category has been updated successfully");

        return redirect ('/all-categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();  
        $this->Deleteimage('Categories_images/'.basename($category->image) ,basename($category->image) );

    }
}
