<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function show($id){
        //categories, brands
        $categories = ProductCategory::all();
        $brands = Brand::all();

        $product = Product::findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0) {
            $avgRating = $sumRating/$countRating;
        }
        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            ->where('tag',$product->tag)
            ->limit(4)
            ->get();

        return view('front.shop.show', compact('product', 'categories',  'brands', 'avgRating', 'relatedProducts'));
    }

    public function postComment(Request $request){
        ProductComment::create($request->all());

        return redirect()->back();
    }

    public function index(Request $request)
    {
        //categories, brands
        $categories = ProductCategory::all();
        $brands = Brand::all();

        //get product
        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';
        $search = $request->search ?? '';

        $products = Product::where('name', 'like' , '%' . $search . '%');

        $products= $this->filter($products, $request);

        switch ($sortBy){
            case 'latest';
                $products = $products->orderBy('id');
                break;
            case 'oldest';
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending';
                $products = $products->orderBy('name');
                break;
            case 'name-descending';
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending';
                $products = $products->orderBy('price');
                break;
            case 'price-descending';
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('id');
        }

//        $products = Product::paginate(6);

        $products = $products->paginate($perPage);

        $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);

        return view('front.shop.index', compact('products', 'brands',  'categories'));
    }

    public function category($categoryName ,Request $request ){
        //categories, brands
        $categories = ProductCategory::all();
        $brands = Brand::all();

        //get products
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery()->paginate();

        $products= $this->filter($products, $request);

        return view('front.shop.index', compact('products','brands', 'categories'));
    }

    public function filter($products , Request $request)
    {

        $brands = $request->brand ?? [];
        $brands_id = array_keys($brands);
        $products = $brands_id != null ? $products->whereIn('brand_id', $brands_id) : $products;

        //price
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);
        $products = ($priceMin != null && $priceMax != null) ? $products->whereBetween('price', [$priceMin, $priceMax]) : $products;

        //color
        $color = $request->color;
        $products = $color != null
            ? $products->whereHas('productDetails' , function ($query) use ($color) {
                return $query->where('color', $color)->where('qty', '>', 0);
            })
            :$products;

        //size
        $size = $request->size;
        $products = $size != null
            ? $products->whereHas('productDetails' , function ($query) use ($size) {
                return $query->where('size', $size)->where('qty', '>', 0);
            })
            :$products;

        return $products;
    }
}
