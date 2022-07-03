<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StatusTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ListOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'List Order | Ship Shine!';

        $order = Transaction::all();

        return view('admin/list-order/index', [
            'pageTitle' => $pageTitle,
            'order' => $order,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $pageTitle = 'Verifikasi Pesanan | Ship Shine!';

        // ELOQUENT
        $transaction = Transaction::find($id);
        $status = StatusTransaction::all();

        return view('admin.list-order.verifikasi', compact('pageTitle', 'transaction', 'status'));
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
        ];

        $request->validate([
            'status' => 'required',
        ], $messages);

        $transaction = Transaction::find($id);

        $transaction->status_id = $request->status;
        $transaction->save();

        // Alert::success('Changed Successfully', 'Product Data Changed Successfully');

        return redirect()->route('list-order.index');
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
