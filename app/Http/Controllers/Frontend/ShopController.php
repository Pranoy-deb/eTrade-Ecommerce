<?php

namespace App\Http\Controllers\Frontend;

use App\Models\product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
     function shopPage(Request $request)
    {
        $products = Product::query()->with('category');

        // Category Filter
        if ($request->has('category') && $request->category != '') {
            $products->whereHas('category', function($q) use($request) {
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

            // PRICE RANGE FILTER
        if ($request->min_price && $request->max_price) {

            $min = $request->min_price;
            $max = $request->max_price;

            $products->where(function ($q) use ($min, $max) {

                //  If selling_price > 0 → use selling_price
                $q->where(function($sub) use ($min, $max) {
                    $sub->whereNotNull('selling_price')
                        ->where('selling_price', '>', 0)
                        ->whereBetween('selling_price', [$min, $max]);
                })

                //  else → use main price
                ->orWhere(function($sub) use ($min, $max) {
                    $sub->where(function($s) {
                        $s->whereNull('selling_price')
                        ->orWhere('selling_price', 0);
                    })
                    ->whereBetween('price', [$min, $max]); 
                });
            });
        }
        }

        $products = $products->where('status', true)->paginate(20)->withQueryString();
        $count = count($products);
        // dd($count);

        // All Categories
        $categories = Category::where('status', true)->select('id', 'title', 'slug')->get();

        // wishlist
        $wishlist = Wishlist::where('customer_id', auth('customer')->id())->pluck('product_id')->toArray();
        // dd($wishlist);
        return view('frontend.shop', compact('products', 'categories', 'count','wishlist'));
    }

}
