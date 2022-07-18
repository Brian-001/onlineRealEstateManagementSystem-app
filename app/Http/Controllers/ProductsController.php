<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductFormRequest;

class ProductsController extends Controller
{


    /*getdata() returns array of arrays*/
    private static function getData(){
        return[
            ['id' => 1, 'name'=>'Resort Garden', 'category'=>'commercial'],
            ['id' => 2, 'name'=>'Business stall', 'category'=>'commercial'],
            ['id'=> 3, 'name'=>'Warehouse', 'category'=>'commercial'],
            ['id'=> 4, 'name'=>'Office', 'category'=>'commercial'],
            ['id'=>5, 'name'=>'Land', 'category'=>'commercial'],
            ['id'=>6, 'name'=>'Single house', 'category'=>'residential'],
            
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' =>Product::all(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $data=$request->validated();

        // POST
        $product = new Product(); 

        $product->name = $data['product-name'];
        $product->category = $data['category'];
        $product->year_posted = $data['year'];

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     /*Search data in a given id*/
    public function show(Product $product)
    {
        
        /*Get Data stored in a variable called products*/
       
        return view('products.show',[
            'product' => $product /* 'product is the key or route parameter and provide data in $products then $index'*/

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit',[
            'product' => $product /* 'product is the key or route parameter and provide data in $products then $index'*/

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        //POST

        $data=$request->validated();


        //POST
        

        $product->name = $data['product-name'];
        $product->category = $data['category'];
        $product->year_posted = $data['year'];

        $product->save();

        return redirect()->route('products.show', $product->id);  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
