<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Data User | Ship Shine!';

        $user = User::all();

        return view('admin/user/index', [
            'pageTitle' => $pageTitle,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Add User | Ship Shine!';

        //ELOQUENT
        $roles = Role::all();

        return view('admin.user.add', compact('pageTitle', 'roles'));
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
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'roles' => 'required',
            'userphoto' => 'required|image',
        ], $messages);

        // Get File Image
        $file = $request->file('userphoto');
        $ImgUserOriginal = $file->getClientOriginalName();
        $ImgUserEncrypted = $file->hashName();

        // Store File Image
        $file->store('public/user');

        // ELOQUENT
        $user = new User;
        $user->img_user_original = $ImgUserOriginal;
        $user->img_user_encrypted = $ImgUserEncrypted;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->roles = $request->roles;
        $user->save();

        // Alert::success('Added Successfully', 'Product Data Added Successfully');

        return redirect()->route('data-user.index');
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
        //
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
        //
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
        $user = User::find($id);
        $ImgUserEncrypted = $user->img_user_encrypted;

        // Delete Category
        $user->delete();

        // Delete File Image
        Storage::disk('public')->delete('user'.$ImgUserEncrypted);

        // Alert::success('Deleted Successfully', 'Product Data Deleted Successfully');

        return redirect()->route('data-user.index');
    }
}
