<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Nette\Utils\Json;

class ProductController extends Controller
{
    function index(){
        $products = product::latest()->get();
        return view('backend.products.index',compact('products'));
    }

    function create(){
        $categorise = Category::where('status',true)->latest()->get();
        return view('backend.products.create',compact('categorise'));
    }

    //* Store part
    function store(Request $request){
    $request -> validate([
        'product_title'=> 'required|min:3',
        'price'=> 'required',
        'selling_price'=> 'nullable',
        'brand'=> 'nullable',
        'sku'=> 'nullable',
        'short_details' => 'nullable',
        'features' => 'nullable',
        'featured_img' => 'nullable|max:2000|mimes:png,jpg,jpeg,webp',
        'gall_img' => 'nullable|mimes:png,jpg,jpeg,webp',
        'category' => 'required'
    ]);

    //*After valication
        $featurdImg = null;
        $gallImg = [];

        if($request->hasFile('featured_img')){
            $featurdImg = $request->featured_img->store('products','public');
        }

        if(count($request->gall_img) >0){
            foreach($request->gall_img as $gallImgs){
                $gallImgName = $gallImgs->store('products','public');
                $gallImg[] = $gallImgName;
            }
        }
        product::create([
            "category_id" => $request->category,
            "title" => $request->product_title,
            "slug" => str()->slug($request->product_title),
            "price" => $request->price,
            "sellign_price" => $request->selling_price,
            "brand" => $request->brand,
            "sku" => $request->sku,
            "featured_img" => $featurdImg,
            "gall_img" => json_encode($gallImg),
            "short_details" => $request->short_details,
            "features" => $request->features,
        ]);

        return to_route('backend.product.index')->with('msg',[
            'icon'=> 'success',
            'msg'=> 'Product added successfully'
        ]);
    }

    //* Editing part
    function Edit(product $product){
       $categorise =  Category::get();
        return view('backend.products.edit',
        [
            'products' => $product, 
            'product' => product::get(),
            'gallery' => json_decode($product->gall_img, true),

        ],compact('categorise'));
    }

    //* Update part
    function Update(Request $request, product $product){
    // Validation in form
        $request -> validate([
            'product_title'=> 'required|min:3',
            'price'=> 'required',
            'selling_price'=> 'nullable',
            'brand'=> 'nullable',
            'sku'=> 'nullable',
            'short_details' => 'nullable',
            'features' => 'nullable',
            'featured_img' => 'nullable|max:2000|mimes:png,jpg,jpeg,webp',
            'gall_img' => 'nullable|mimes:png,jpg,jpeg,webp',
            'category' => 'required'
        ]);
        // Featured Image Update
        if($request->hasFile('featured_img')){
            // Delete Old Featured Image
            if(Storage::disk('public')->exists($product->featured_img)){
                Storage::disk('public')->delete($product->featured_img);
            }

            // Upload New Featured Image
            $product->featured_img = $request->file('featured_img')->store('products','public');
        }

        // Gallery Image Update
        if($request->hasFile('gall_img')){
            // Delete Old gallery Image
            $OldGallImg = json_decode($product->gall_img,true);
            if(!empty($OldGallImg)){
                foreach($OldGallImg as $oldImg){
                    if(Storage::disk('public')->exists($oldImg)){
                        Storage::disk('public')->delete($oldImg);
                    }
                }
            }
            //Upload New Gallery Image
            $NewGallImge =[];
            foreach($request->file('gall_img') as $file){
                $NewGallImge[] = $file->store('products','public');
            }
            // save in db
            $product->gall_img = json_encode($NewGallImge);
        }
        // Update Another field
            $product->category_id = $request->category_id;
            $product->title = $request->title;
            $product->slug = str()->slug($request->title);
            $product->price = $request->price;
            $product->sellign_price = $request->selling_price; // FIXED
            $product->brand = $request->brand;
            $product->sku = $request->sku;
            $product->short_details = $request->short_details;
            $product->features = $request->features;

        // Update finaly
            $product->update();

            return to_route('backend.product.index')->with('msg',[
                'msg' => 'Product Updated Successfully!'
                ]);


    }

    //* Delete part
    function Delete(product $product){
        //* Delete Featured Image
      if (Storage::disk('public')->exists($product->featured_img)) {
      Storage::disk('public')->delete($product->featured_img);
     }
     //* Delete Gallery Image
     $GallImg = json_decode($product->gall_img,true);
    if(!empty($GallImg)){
        foreach($GallImg as $Img){
            if (Storage::disk('public')->exists($Img)){
                Storage::disk('public')->delete($Img);
            }
        }
    }

     $product->delete();

     return back()->with('msg',[
        'msg' => 'Product Deleted Successfully'
     ]);
    }
}


