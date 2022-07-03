@extends('layouts.customer')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css')}} ">

<!-- Header -->
<div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
    <h1 class="text-center  mt-4" style="color: black; font-size: 20">
        Detail Transaksi
    </h1>
</div>

<!-- Card Box -->
<div class="px-4 mt--7">
    <div class="col shadow container px-2 py-2 mb-6" style="background-color: white; border-radius: 10px">
        <div class="row m-4">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div>
                    <div class="row mt-3" style="box-shadow: 1px 1px 3px gray; border-radius: 10px">
                        <div class="col-sm-3 px-0">
                            <img
                                src="{{ asset('storage/destination/'.$transaction->destination->img_destination_encrypted) }}"
                                alt=""
                                style="width: 100px; height: 80px; border-radius: 10px;"
                            />
                        </div>
                        <div class="col-sm-5 pt-2">
                            <h4>{{ $transaction->destination->name }}</h4>
                            <h4>{{ $transaction->destination->prize }}</h4>
                        </div>
                        <div class="col-sm-4 pt-2" style="text-align: right"><h4>{{ $transaction->quantity }} Orang</h4></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6"><h4>Kode Pemesanan</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ $transaction->kode }}</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><h4>Durasi</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ $transaction->destination->duration }}</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><h4>Tanggal Berangkat</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ date('l, d F Y', strtotime($transaction->departure_date)) }}</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><h4>Tanggal Pulang</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ date('l, d F Y', strtotime($transaction->return_date)) }}</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><h4>Status Pemesanan</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ $transaction->statustransaction->name }}</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Total Harga</h4>
                        </div>
                        <div class="col-sm-6" style="text-align: right">
                            <h4 style="color: #288afb">IDR {{ $transaction->total }}</h4>
                        </div>
                    </div>
                    <h3 class="mt-3" style="font-weight: bold">Diorder Oleh</h3>
                    <div class="row">
                        <div class="col-sm-6"><h4>Nama</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ $transaction->user->name }}</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>No Telepon</h4>
                        </div>
                        <div class="col-sm-6" style="text-align: right">
                            <h4>{{ $transaction->user->phone }}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><h4>Alamat</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ $transaction->user->address }}</h4></div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-6"><h4>Kota</h4></div>
                        <div class="col-sm-6" style="text-align: right"><h4>{{ $transaction->user->city }}</h4></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12"><h4>Silahkan Transfer ke Salah Satu Rekening Tujuan a/n <b>PT. Ship Shine</b> Berikut :</h4></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 mt-2">
                            <img
                                src="{{ asset('img/bank/mandiri.png') }}"
                                alt=""
                                style="width: 55%;"
                            />
                        </div>
                        <div class="col-sm-6">
                            <div class="row" style="align-content: right">
                                <div class="col-sm-12" style="text-align: right">
                                    <h5>Bank Mandiri</h5>
                                </div>
                            </div>
                            <div class="row" style="align-content: right">
                                <div class="col-sm-12" style="text-align: right">
                                    <h4>1120137788996</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-6 mt-2">
                            <img
                                src="{{ asset('img/bank/bca.png') }}"
                                alt=""
                                style="width: 55%;"
                            />
                        </div>
                        <div class="col-sm-6">
                            <div class="row" style="align-content: right">
                                <div class="col-sm-12" style="text-align: right">
                                    <h5>Bank BCA</h5>
                                </div>
                            </div>
                            <div class="row" style="align-content: right">
                                <div class="col-sm-12" style="text-align: right">
                                    <h4>45930700612</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('history-consumen.update', ['history_consuman' =>$transaction->id]) }}" method="POST" enctype="multipart/form-data" id="file-upload-form" class="uploader">
                        @csrf
                        @method('put')
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show text-light">
                                {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <!-- Upload  -->
                            <input id="file-upload" type="file" name="phototf" accept="image/*" />

                            <label for="file-upload" id="file-drag">
                                <img id="file-image" src="#" alt="Preview" class="hidden">
                                <div id="start">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    <div>Upload Bukti Pembayaran</div>
                                    <div id="notimage" class="hidden">Please select an image</div>
                                    <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                </div>
                                <div id="response" class="hidden">
                                <div id="messages"></div>
                                <progress class="progress" id="file-progress" value="0">
                                    <span>0</span>%
                                </progress>
                                </div>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block my-3" style=" background-color: #288afb; color: #fff; margin: auto; ">
                                    Bayar
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('history-consumen.index')}}">
                                    <button type="button" class="btn btn-block my-3" style=" background-color: red; color: #fff; margin: auto; ">
                                        Kembali
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script  src="{{ asset('js/script.js')}}"></script>

@endsection




