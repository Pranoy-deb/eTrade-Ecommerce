<?php

namespace App\Http\Controllers\Frontend;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ShopController extends Controller
{
     function shopPage(Request $request)
    {
        $products = Product::query()->with('category');

        // Category Filter
        if ($request->has('category') && $request->category != '') {
            $products->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Sorting (with selling_price fallback)
        if ($request->has('sort') && $request->sort != '') {

            switch ($request->sort) {
                case 'price_asc':
                    $products->orderByRaw('
                        CASE 
                            WHEN sellign_price IS NOT NULL AND sellign_price > 0 THEN sellign_price 
                            ELSE price 
                        END ASC
                    ');
                    break;

                case 'price_desc':
                    $products->orderByRaw('
                        CASE 
                            WHEN sellign_price IS NOT NULL AND sellign_price > 0 THEN sellign_price 
                            ELSE price 
                        END DESC
                    ');
                    break;

                case 'newest':
                    $products->orderBy('created_at', 'desc');
                    break;

                case 'oldest':
                    $products->orderBy('created_at', 'asc');
                    break;
            }
        }

        // Status Active + Pagination + Keep Query Params
        $products = $products->where('status', true)->paginate(20)->withQueryString();
        $count = count($products);
        // dd($count);

        // All Categories
        $categories = Category::where('status', true)->select('id', 'title', 'slug')->get();

        return view('frontend.shop', compact('products', 'categories', 'count'));
    }

}
