<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->cate_description = $request->cate_description;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);


        if ($request->hasFile('productImage')) {
            $des = 'public/upload';
            $imgname = $request->file('productImage')->getClientOriginalName();
            $request->file('productImage')->move($des, $imgname);
            $product->productImage = $imgname;
        }
    

        $product->categoryID = $request->categoryID;
        $product->productName = $request->productName;
        $product->listPrice = $request->listPrice;
        $product->discountPercent = $request->discountPercent;
        $product->description = $request->description;
    

        $product->save();
    
        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id); 
       return view('category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $request->validate([
            'categoryName' => 'required',
            'cate_description' => 'required',
        ]);
        $category->categoryName = $request->categoryName;
        $category->cate_description = $request->cate_description;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index');
    }
    public function __construct()
    {
        $this->middleware('AdminRole'); 
    }
}
