<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Dashboard Admin | Ship Shine!';

        // $product = Product::all();

        return view('admin/dashboard', [
            'pageTitle' => $pageTitle,
            // 'product' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pageTitle = 'Add Product | Dashboard';

        // ELOQUENT
        // $categorie = Categorie::all();

        // return view('admin.product.add', compact('pageTitle', 'categorie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $messages = [
        //     'required' => ':Attribute is require',
        //     'numeric' => 'Fill :Attribute with number',
        // ];

        // $request->validate([
        //     'productname' => 'required',
        //     'productprice' => 'required|numeric',
        //     'categoryproduct' => 'required',
        //     'productphoto' => 'required'
        // ], $messages);

        // Get File Image
        // $file = $request->file('productphoto');
        // $ImgProductOriginal = $file->getClientOriginalName();
        // $ImgProductEncrypted = $file->hashName();

        // Store File Image
        // $file->store('public/image/product');

        // ELOQUENT
        // $product = new Product;
        // $product->img_product_original = $ImgProductOriginal;
        // $product->img_product_encrypted = $ImgProductEncrypted;
        // $product->nama_product = $request->productname;
        // $product->harga_product = $request->productprice;
        // $product->categorie_id = $request->categoryproduct;
        // $product->save();

        // Alert::success('Added Successfully', 'Product Data Added Successfully');

        // return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $pageTitle = 'Product Detail | Dashboard';

        // ELOQUENT
        // $product = Product::find($id);

        // return view('admin.product.view', compact('pageTitle', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $pageTitle = 'Edit Product | Dashboard';

        // ELOQUENT
        // $categorie = Categorie::all();
        // $product = Product::find($id);

        // return view('admin.product.edit', compact('pageTitle', 'categorie', 'product'));
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
        // $messages = [
        //     'required' => ':Attribute is require',
        //     'numeric' => 'Fill :Attribute with number',
        // ];

        // $request->validate([
        //     'productname' => 'required',
        //     'productprice' => 'required|numeric',
        //     'categoryproduct' => 'required',
        // ], $messages);

        // $product = Product::find($id);

        // Get File Image
        // $file = $request->file('productphoto');

        // if ($file != null) {
        //     $ImgProductOriginal = $file->getClientOriginalName();
        //     $ImgProductEncrypted = $file->hashName();

        //     // Delete Existing Image
        //     Storage::disk('public')->delete('image/product/'.$product->img_product_encrypted);

        //     // Store File Image
        //     $file->store('public/image/product');
        // }

        // ELOQUENT
        // $product->nama_product = $request->productname;
        // $product->harga_product = $request->productprice;
        // $product->categorie_id = $request->categoryproduct;

        // if ($file != null) {
        //     $product->img_product_original = $ImgProductOriginal;
        //     $product->img_product_encrypted = $ImgProductEncrypted;
        // }

        // $product->save();

        // Alert::success('Changed Successfully', 'Product Data Changed Successfully');

        // return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ELOQUENT
        // $product = Product::find($id);
        // $ImgProductEncrypted = $product->img_product_encrypted;

        // Delete Category
        // $product->delete();

        // Delete File Image
        // Storage::disk('public')->delete('image/product/'.$ImgProductEncrypted);

        // Alert::success('Deleted Successfully', 'Product Data Deleted Successfully');

        // return redirect()->route('product.index');
    }
}
