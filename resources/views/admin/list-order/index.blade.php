@extends('layouts.admin')

@section('content')

      <div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="mt-4" style="color: white; font-size: 20">List Order</h1>
      </div>
      <!-- Card Box -->
      <div class="px-4 mt--7">
        <div
          class="col shadow container px-2 py-2"
          style="background-color: white; border-radius: 10px"
        >
          <div class="table-responsive">
            <table class="table table-borderless table-hover">
              <thead>
                <tr>
                  <th scope="col"><h5>No</h5></th>
                  <th scope="col"><h5>Nama Customer</h5></th>
                  <th scope="col"><h5>Destinasi</h5></th>
                  <th scope="col"><h5>Status Order</h5></th>
                  <th scope="col"><h5>Tanggal Berangkat</h5></th>
                  <th scope="col"><h5>Tanggal Pulang</h5></th>
                  <th scope="col"><h5>Quantity</h5></th>
                  <th scope="col"><h5>Total</h5></th>
                  <th scope="col"><h5>Action</h5></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($order as $order )
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td><h5>{{ $order->user->name }}</h5></td>
                  <td><h5>{{ $order->destination->name }}</h5></td>
                  <td>
                    <h5>{{ $order->statustransaction->name}}</h5>
                  </td>
                  <td><h5>{{ date('l, d F Y', strtotime($order->departure_date)) }}</h5></td>
                  <td><h5>{{ date('l, d F Y', strtotime($order->return_date)) }}</h5></td>
                  <td><h5>{{ $order->quantity }}</h5></td>
                  <td><h5>{{ $order->total}}</h5></td>
                  <td>
                    @if ($order->statustransaction->name == 'Belum Dibayar')

                    @else
                        <a href="{{ route('list-order.edit', ['list_order' => $order->id]) }}">
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
                                class="bi bi-pencil-square mr-1"
                                style="color: white"
                                ></i>
                                <span>Verifikasi</span>
                            </div>
                        </a>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection
