<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('name');
            $table->String('user_id');
            $table->String('product_id');
            $table->String('quantity');
            $table->String('total_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function index()
    {
        $category = Categories::all();
        return view('admin.categorie.index') . compact('category');
    }
    public function create()
    {
        $category = categorie::all();
        return view('admin.categorie.create') . compact('category');
    }
    public function edit()
    {
        $category = categorie::all();
        return view('admin.categorie.edit') . compact('category');
    }

    public function delete($id)
    {
        $category = categorie::find($id);
        $category->delete();

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $category = new categorie;
        $category->name = $request->name;

        $category->save();
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $category = categorie::find($id);
        $category->name = $request->name;

        $category->save();
        return redirect()->back();
    }
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
