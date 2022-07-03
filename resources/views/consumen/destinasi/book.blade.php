@extends('layouts.customer')

@section('content')

      <!-- Header -->
      <div class="container px-0">
        <img
          src="{{ asset('img/brand/backgroundDetailDestinasi.png') }}"
          alt=""
          width="100%"
        />
      </div>
      <!-- Card Box -->
      <div class="px-4 mt-4">
        <div
          class="col shadow container px-2 py-2"
          style="background-color: white; border-radius: 10px"
        >
          <div class="row d-flex justify-content-center p-2">
            <div class="col-md-6 mb-2">
              <h3 style="font-size: 18px; font-weight: 700">{{ $destinasi->name }}</h3>
              <h5><i class="bi bi-geo-alt"></i> {{ $destinasi->location }}</h5>
              <h3 class="mt-4" style="font-weight: 700">Tentang</h3>
              <p style="font-size: 12">
                {{ $destinasi->description }}
              </p>
              <h3 class="mt-4" style="font-weight: 700">Fasilitas</h3>
              <p style="font-size: 12">
                {{ $destinasi->facilities }}
              </p>
              {{-- <h3 class="mt-4" style="font-weight: 700">
                Tempat yang akan dikunjungi
              </h3>
              <div class="row d-flex justify-content-start">
                <div class="col-md-4 mb-2">
                  <img
                    src="../assets/img/brand/listImage.png"
                    style="width: 100%"
                  />
                </div>
                <div class="col-md-4 mb-2">
                  <img
                    src="../assets/img/brand/listImage.png"
                    style="width: 100%"
                  />
                </div>
                <div class="col-md-4 mb-2">
                  <img
                    src="../assets/img/brand/listImage.png"
                    style="width: 100%"
                  />
                </div>
                <div class="col-md-4 mb-2">
                  <img
                    src="../assets/img/brand/listImage.png"
                    style="width: 100%"
                  />
                </div>
              </div> --}}
            </div>
            <div class="col-md-6 mb-2 py-3">
                <form action="{{ route('history-consumen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div
                        style="
                        width: 80%;
                        margin: auto;
                        background-color: #93b3e9;
                        border-radius: 20px;
                        "
                    >
                        <div class="col pt-4 px-4">
                        <h3>Pilih Tanggal Berangkat</h3>
                            <label for="berangkat"></label>
                            <input class="col-sm-7 mt--3 form-control @error('departure_date') is-invalid @enderror" type="date" id="berangkat" name="departure_date" value="{{ old('departure_date') }}" />
                            @error('departure_date')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        <h3 class="mt-3">Pilih Tanggal pulang</h3>
                            <label for="pulang"></label>
                            <input class="col-sm-7 mt--3 form-control @error('return_date') is-invalid @enderror" type="date" id="pulang" name="return_date" value="{{ old('departure_date') }}" />
                            @error('return_date')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        <h3 class="mt-4 mb-3">Jumlah Orang</h3>

                        <!-- PASSING DATA -->
                        <h5 id="harga" style="display: none">{{ $destinasi->prize }}</h5>
                        <div class="row">
                            <div class="col-sm-4"><h4>Anak - Anak</h4></div>
                            <div class="col-sm-4">
                            <input type="number" id="anak" name="anak" value="0" />
                            </div>
                        </div>
                        <div class="row mt-3 mb-4">
                            <div class="col-sm-4"><h4>Dewasa</h4></div>
                            <div class="col-sm-4">
                            <input
                                type="number"
                                id="dewasa"
                                name="dewasa"
                                value="0"
                            />
                            </div>
                            <div class="row mt-3 mb-4" style="display: none">
                            <div class="col-sm-4">
                                <input
                                type="text"
                                id="total-penumpang"
                                name="quantity"
                                value="0"
                                readonly
                                />
                                <input
                                type="text"
                                id="total-penumpang"
                                name="destinasi"
                                value="{{ $destinasi->id }}"
                                readonly
                                />
                            </div>
                            </div>
                        </div>
                        </div>

                        <div
                        class="px-4 py-3 mt-4"
                        style="
                            background-color: #fff;
                            border-radius: 20px;
                            border: 2px solid #93b3e9;
                        "
                        >
                        <h3>Total Harga</h3>
                        <input
                            type="text"
                            id="total-harga"
                            name="total"
                            style="border: 0 solid black"
                            readonly
                        />
                            <button
                                type="submit"
                                class="btn btn-block my-3"
                                style="
                                    background-color: #288afb;
                                    color: #fff;
                                    margin: auto;
                                "
                            >
                                CheckOut Sekarang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

@endsection
