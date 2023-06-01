<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
    }
    public function index()
    {
       $product = Product::all();
        return view('admin.products.index').compact('products');
    }
    public function create()
    {
        return view('admin.products.create').compact('products');
    }

    class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('products.index', compact('products'));
    }
}

    public function edit()
    {
        $product = Product::all();
        $category = categorie::all();
        $category_name = categorie::find($product->categories_id);
        return view('admin.products.edit').compact('products' , 'category' , 'category_name');
    }

    public function store(Request $request)
    {
       $product = new Product ;
       $product->name = $request->name;
       $product->quntity = $request->quntity;
       $product->price = $request->price;
       $product->categories_id = $request->categories_id;
       $product->details = $request->details;

       $product->save();
       return redirect()->back();
    }

    public function delete($id)
    {
      $product = Product::find($id);
           $product->delete();

        return redirect()->back();
    }

     public function update(Request $request, $id)
    {
       $product = Product::find($id);
       $product->name = $request->name;
       $product->quntity = $request->quntity;
       $product->price = $request->price;
       $product->categories_id = $request->categories_id;
       $product->details = $request->details;

       $product->save();
       return redirect()->back();
    };
    Route::get('all-products', [ProductController::class,'show']);
    Route::post('STORE',[ProductController::class,'store'] );
    Route::post('delete/{id}',[ProductController::class,'distroy'] );
    Route::post('update/{id}',[ProductController::class,'goingToTheUpdate'] );
    Route::post('up/{id}',[ProductController::class,'update'] );

    Route::get('all-orders', [OrderController::class,'show']);
    Route::post('STOREOrder',[OrderController::class,'store'] );
    Route::post('deleteOrder/{id}',[OrderController::class,'distroy'] );
    Route::post('updateOrder/{id}',[OrderController::class,'goingToTheUpdate'] );
    Route::post('upOrder/{id}',[OrderController::class,'update'] );

    Route::get('all-categories', [CategoryController::class,'show']);
    Route::post('STORECategorie',[CategoryController::class,'store'] );
    Route::post('deleteCategorie/{id}',[CategoryController::class,'distroy'] );
    Route::post('updateCategorie/{id}',[CategoryController::class,'goingToTheUpdate'] );
    Route::post('upCategorie/{id}',[CategoryController::class,'update'] );
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
};
?>
