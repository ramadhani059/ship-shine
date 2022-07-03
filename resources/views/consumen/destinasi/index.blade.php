@extends('layouts.customer')

@section('content')

      <div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="text-center mt-5" style="color: black; font-size: 20">
          Plan Your Travel Now !
        </h1>
      </div>
      <!-- Card Box -->
      <div class="px-4">
        <div
          class="shadow container mt--6 px-5 py-5 mb-5"
          style="background-color: white; border-radius: 10px"
        >
          <ul class="row d-flex justify-content-start">
            @foreach ( $destinasi as $tempat )
            <li class="col-md-4 mb-2" style="list-style-type: none">
              <div class="card" style="width: 18rem">
                <img
                  src="{{ asset('storage/destination/'.$tempat->img_destination_encrypted) }}"
                  class="card-img-top"
                  alt="gambar card"
                  style="height: 180px"
                />
                <div class="card-body" style="margin: auto">
                  <h3 class="card-title text-center">{{ $tempat->name }}</h3>
                  <p class="text-center">
                    <span class="mr-1"></span><span>Rp. {{ $tempat->prize }}</span>
                  </p>
                  <a
                    href={{ route('destinasi-consumen.show', ['destinasi_consuman' => $tempat->id]) }}
                    class="btn"
                    type="submit"
                    style="background-color: #288afb; color: white"
                    >BOOK NOW</a
                  >
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>

@endsection
