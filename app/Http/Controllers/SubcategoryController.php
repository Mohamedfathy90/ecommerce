<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.all-subcategories' , ['subcategories'=>Subcategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.add-subcategory',['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = request()->validate([
            'name'  => ['required' ,"unique:subcategories,name"] ,
         ]);
        $credentials['category_id'] = request('category_id');
        $credentials['slug'] = Str::of(request('name'))->slug('-');        
        Subcategory::create($credentials);
        toastr()->success("Sub-Category added successfully");
        return redirect ('/all-subcategories') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        return view('admin.edit-subcategory' , ['subcategory'=>$subcategory , 'categories'=>Category::all()]);
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
    public function update(Subcategory $subcategory)
    {
        $credentials = request()->validate([
            'name'  => ['required',Rule::unique('subcategories','name')->ignore($subcategory)] ,
        ]);

        $credentials['category_id'] = request('category_id');
        $credentials['slug'] = Str::of(request('name'))->slug('-');
        
        $subcategory->update($credentials);
        
        toastr()->success("Sub-Category has been updated successfully");

        return redirect ('/all-subcategories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();  
    }
}
