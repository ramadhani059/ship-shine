@extends('layouts.customer')

@section('content')

      <!-- Header -->
      <div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="text-center  mt-4" style="color: black; font-size: 20">
          Order History
        </h1>
      </div>
      <!-- Card Box -->
      <div class="px-4 mt--7">
        <div
          class="col shadow container px-2 py-2"
          style="background-color: white; border-radius: 10px"
        >
        @if ($transaction->count() > 0)
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col"><h5>List</h5></th>
                <th scope="col"><h5>Kode</h5></th>
                <th scope="col"><h5>jumlah</h5></th>
                <th scope="col"><h5>Tanggal Berangkat</h5></th>
                <th scope="col"><h5>Tanggal Pulang</h5></th>
                <th scope="col"><h5>Harga</h5></th>
                <th scope="col"><h5>Status</h5></th>
                <th scope="col"><h5></h5></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaction as $history )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <h5>{{ $history->kode }}</h5>
                    </td>
                    <td><h5>{{ $history->quantity }}</h5></td>
                    <td><h5>{{ date('l, d F Y', strtotime($history->departure_date)) }}</h5></td>
                    <td><h5>{{ date('l, d F Y', strtotime($history->return_date)) }}</h5></td>
                    <td><h5>Rp. {{ $history->total }}</h5></td>
                    <td><h5>{{ $history->statustransaction->name }}</h5></td>
                    <td>
                        @if ( $history->statustransaction->name == 'Belum Dibayar')
                            <a href="{{ route('history-consumen.edit', ['history_consuman' => $history->id]) }}">
                                <div
                                    class="mx-1 text-center"
                                    style="
                                    color: white;
                                    background-color: green;
                                    padding: 2px 7px;
                                    border-radius: 5px;
                                    width: 90%;
                                    "
                                >
                                    <i
                                    class="bi bi-eye mr-1"
                                    style="color: white"
                                    ></i>
                                    <span>Detail</span>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('history-consumen.show', ['history_consuman' => $history->id]) }}">
                                <div
                                    class="mx-1 text-center"
                                    style="
                                    color: white;
                                    background-color: green;
                                    padding: 2px 7px;
                                    border-radius: 5px;
                                    width: 90%;
                                    "
                                >
                                    <i
                                    class="bi bi-eye mr-1"
                                    style="color: white"
                                    ></i>
                                    <span>Detail</span>
                                </div>
                            </a>
                        @endif
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <div class="col-12 mb-4">
                <div class="card-body text-center mt-4">
                  <h3 class="text-gray-900 font-weight-bold">Tidak ada riwayat pemesanan</h3>
                </div>
          </div>
        @endif
        </div>
      </div>


@endsection
