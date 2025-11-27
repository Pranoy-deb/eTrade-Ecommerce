<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller{

    function index() {
        $categories = Category::latest()->get();
        return view('backend.categories.index', compact('categories'));
    }

    function store(Request $request){

        // dd($request->all());
        $request -> validate([
            'title' => 'required|min:3',
            'icon' => 'nullable|max:2000|mimes:png,jpg,webp'
        ]);
            // Store image  
        $icon= $request->icon->store('category_icon','public');

        try {
            $category = Category::create([
                'title' => $request->title,
                'slug' => str()->slug($request->title),
                'icon' => $icon
            ]);

            return back()->with('msg', [
                'icon' => 'success',
                'msg' => 'Category added successfully!'
            ]);
        } 
        catch (\Exception $e) {

            return back()->with('msg', [
                'icon' => 'error',
                'msg' => 'Category not added!'
            ]);
        }
    }

     function Edit(Category $category)
    {
        return view('backend.categories.update', [
            'category' => $category, 
            'categories' => Category::latest()->get()
        ]);
    }

    

    function Update(Category $category, Request $request){

        $request->validate([
            'title' => 'required|min:3',
            'icon' => 'nullable|max:2000|mimes:png,jpg,webp'
        ]);

    // icon upload if provided
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon')->store('category_icon', 'public');

    // delete old icon if exists
            if ($category->icon && file_exists(storage_path('app/public/' . $category->icon))) {
                unlink(storage_path('app/public/' . $category->icon));
            }

            $category->icon = $icon;
        }

        $category->title = $request->title;
        $category->slug  = str()->slug($request->title);

        $category->save();

        return to_route('backend.category.index')->with('msg', [
            'icon' => 'success',
            'msg'  => 'Category updated successfully!'
        ]);
}

    function delete(Category $category){
        if(Storage::disk('public')->exists($category->icon)){
            Storage::disk('public')->delete($category->icon);
        }
        $category->delete();
        
        return back()->with('msg',[
            'msg'=> 'Category Deleted Successfully!'
        ]);
    }
}
    




    

