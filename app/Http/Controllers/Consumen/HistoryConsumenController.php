<?php

namespace App\Http\Controllers\Consumen;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HistoryConsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'History | Ship Shine!';

        $transaction = Transaction::where('user_id', Auth::user()->id)->get();

        return view('consumen/history/index', [
            'pageTitle' => $pageTitle,
            'transaction' => $transaction,
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
        $messages = [
            'required' => ':Attribute is require',
            'numeric' => 'Fill :Attribute with number',
        ];

        $request->validate([
            'departure_date' => 'required',
            'return_date' => 'required',
            'quantity' => 'required|numeric',
            'total' => 'required|numeric',
        ], $messages);

        $huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $kodePemesanan = strtoupper(substr(str_shuffle($huruf), 0, 7));

        // ELOQUENT
        $transaction = new Transaction;
        $transaction->kode = $kodePemesanan;
        $transaction->user_id = Auth::user()->id;
        $transaction->destination_id = $request->destinasi;
        $transaction->departure_date = $request->departure_date;
        $transaction->return_date = $request->return_date;
        $transaction->quantity = $request->quantity;
        $transaction->total = $request->total;
        $transaction->status_id = 1;
        $transaction->save();

        // Alert::success('Added Successfully', 'Product Data Added Successfully');

        return redirect()->route('history-consumen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pageTitle = 'Detail Pesanan | Ship Shine!';

        // ELOQUENT
        $transaction = Transaction::find($id);

        return view('consumen.history.show', compact('pageTitle', 'transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Detail Pesanan | Ship Shine!';

        // ELOQUENT
        $transaction = Transaction::find($id);

        return view('consumen.history.bayar', compact('pageTitle', 'transaction'));
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
            'required' => 'Bukti Pembayaran is require',
        ];

        $request->validate([
            'phototf' => 'required|image',
        ], $messages);

        $transaction = Transaction::find($id);

        // Get File Image
        $file = $request->file('phototf');

        if ($file != null) {
            $ImgTransactionOriginal = $file->getClientOriginalName();
            $ImgTransactionEncrypted = $file->hashName();

            // Delete Existing Image
            Storage::disk('public')->delete('transaksi/'.$transaction->img_transaction_encrypted);

            // Store File Image
            $file->store('public/transaksi');
        }

        // ELOQUENT
        $transaction->img_transaction_original = $ImgTransactionOriginal;
        $transaction->img_transaction_encrypted = $ImgTransactionEncrypted;
        $transaction->status_id = 2;
        $transaction->save();

        // Alert::success('Changed Successfully', 'Product Data Changed Successfully');

        return redirect()->route('history-consumen.index');
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
