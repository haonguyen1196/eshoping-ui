<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    private $category;
    private $product;
    public function __construct(Category $category, Product $product) {
        $this->category = $category;
        $this->product = $product;
    }
    public function index ($slug, $id) {
        $categories = $this->category->where('parent_id', 0)->get();
        $categoryLimited = $categories->take(3);
        $products = $this->product->where('category_id', $id)->paginate(6);
        return view('product.category.list', compact('categoryLimited', 'categories', 'products'));
    }
}
