@extends('layouts.customer')

@section('content')
    <!-- Header -->
      <div class="header pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h2 style="color: white; font-size: 20">Dashboard</h2>
      </div>
      <div class="container-fluid mt--7">
        <div class="row d-flex justify-content-around">
          <div class="col-4 shadow">
            <img src="{{ asset('img/brand/gambarDashboard1.png') }}" alt="gambarDashboard1" style="width: 100%; height: auto; border-radius: 10px" />
          </div>
          <div class="col-4 shadow">
            <img src="{{ asset('img/brand/gambarDashboard2.png') }}" alt="gambarDashboard2" style="width: 100%; height: auto; border-radius: 10px" />
          </div>
          <div class="col-4 shadow">
            <img src="{{ asset('img/brand/gambarDashboard3.png') }}" alt="gambarDashboard3" style="width: 100%; height: auto; border-radius: 10px" />
          </div>
        </div>
      </div>

      <div class="container-fluid mt-5">
        <h1>Best Tour Deals</h1>
        <div class="container mt-3 py-3 px-4 rounded" style="background-color: #fff">
          <div class="shadow rounded row mt-2" style="width: 45%; background-color: #fff">
            <div class="col-sm-4 px-0">
              <img src="{{ asset('img/brand/Rectangle 19.png') }}" alt="gambar" style="width: 100%" />
            </div>
            <div class="col-sm-5 align-items-center pt-4">
              <p style="font-size: 16px; font-weight: bold">Nusa Dua Tour</p>
              <p style="font-size: 12px">Rp. 1.216.000</p>
            </div>
            <div class="col-sm-3 d-flex align-items-center">
              <button type="button" class="btn" style="background-color: #288afb; color: #fff">3D/2N</button>
            </div>
          </div>
          <div class="shadow rounded row mt-2" style="width: 45%; background-color: #fff">
            <div class="col-sm-4 px-0">
              <img src="{{ asset('img/brand/Rectangle 19.png') }}" alt="gambar" style="width: 100%" />
            </div>
            <div class="col-sm-5 align-items-center pt-4">
              <p style="font-size: 16px; font-weight: bold">Nusa Dua Tour</p>
              <p style="font-size: 12px">Rp. 1.216.000</p>
            </div>
            <div class="col-sm-3 d-flex align-items-center">
              <button type="button" class="btn" style="background-color: #288afb; color: #fff">3D/2N</button>
            </div>
          </div>
          <div class="shadow rounded row mt-2" style="width: 45%; background-color: #fff">
            <div class="col-sm-4 px-0">
              <img src="{{ asset('img/brand/Rectangle 19.png') }}" alt="gambar" style="width: 100%" />
            </div>
            <div class="col-sm-5 align-items-center pt-4">
              <p style="font-size: 16px; font-weight: bold">Nusa Dua Tour</p>
              <p style="font-size: 12px">Rp. 1.216.000</p>
            </div>
            <div class="col-sm-3 d-flex align-items-center">
              <button type="button" class="btn" style="background-color: #288afb; color: #fff">3D/2N</button>
            </div>
          </div>
        </div>
      </div>
@endsection

