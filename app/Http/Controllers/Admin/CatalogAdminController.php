<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Catalog Admin | Ship Shine!';

        $destination = Destination::all();

        return view('admin/catalog/index', [
            'pageTitle' => $pageTitle,
            'destination' => $destination,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Add Destination | Ship Shine!';
        return view('admin.catalog.add', ['pageTitle' => $pageTitle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute is require',
            'numeric' => 'Fill :Attribute with number',
        ];

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:destinations,slug',
            'location' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'facilities' => 'required',
            'prize' => 'required|numeric',
            'destinationphoto' => 'required|image',
        ], $messages);

        // Get File Image
        $file = $request->file('destinationphoto');
        $ImgDestinationOriginal = $file->getClientOriginalName();
        $ImgDestinationEncrypted = $file->hashName();

        // Store File Image
        $file->store('public/destination');

        // ELOQUENT
        $destination = new Destination;
        $destination->img_destination_original = $ImgDestinationOriginal;
        $destination->img_destination_encrypted = $ImgDestinationEncrypted;
        $destination->name = $request->name;
        $destination->slug = $request->slug;
        $destination->location = $request->location;
        $destination->duration = $request->duration;
        $destination->facilities = $request->facilities;
        $destination->description = $request->description;
        $destination->prize = $request->prize;
        $destination->save();

        // Alert::success('Added Successfully', 'Product Data Added Successfully');

        return redirect()->route('catalog-admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Edit Catalog | Ship Shine!';

        $destination = Destination::find($id);

        return view('admin.catalog.edit', compact('pageTitle', 'destination'));
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
        $messages = [
            'required' => ':Attribute is require',
            'numeric' => 'Fill :Attribute with number',
        ];

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'location' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'facilities' => 'required',
            'prize' => 'required|numeric',
            'destinationphoto' => 'image',
        ], $messages);

        $destination = Destination::find($id);

        // Get File Image
        $file = $request->file('destinationphoto');

        if ($file != null) {
            $ImgDestinationOriginal = $file->getClientOriginalName();
            $ImgDestinationEncrypted = $file->hashName();

            // Delete Existing Image
            Storage::disk('public')->delete('destination'.$destination->img_product_encrypted);

            // Store File Image
            $file->store('public/destination');
        }

        // Validate Slug
        $slug = $request->slug;

        if ($slug != $destination->slug) {
            $request->validate([
                'name' => 'required',
                'slug' => 'required|unique:destinations,slug',
                'location' => 'required',
                'duration' => 'required',
                'description' => 'required',
                'facilities' => 'required',
                'prize' => 'required|numeric',
                'destinationphoto' => 'image',
            ], $messages);
        }

        // ELOQUENT
        if ($file != null) {
            $destination->img_destination_original = $ImgDestinationOriginal;
            $destination->img_destination_encrypted = $ImgDestinationEncrypted;
        }

        $destination->name = $request->name;
        $destination->slug = $request->slug;
        $destination->location = $request->location;
        $destination->duration = $request->duration;
        $destination->facilities = $request->facilities;
        $destination->description = $request->description;
        $destination->prize = $request->prize;
        $destination->save();

        // Alert::success('Added Successfully', 'Product Data Added Successfully');

        return redirect()->route('catalog-admin.index');
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
        $destination = Destination::find($id);
        $ImgDestinationEncrypted = $destination->img_product_encrypted;

        // Delete Category
        $destination->delete();

        // Delete File Image
        Storage::disk('public')->delete('destination'.$ImgDestinationEncrypted);

        // Alert::success('Deleted Successfully', 'Product Data Deleted Successfully');

        return redirect()->route('catalog-admin.index');
    }
}
