@extends('layouts.admin')

@section('content')
      <!-- Header -->
      <div class="header pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="mt-4" style="color: white; font-size: 20">Dashboard</h1>
      </div>
      <div class="container-fluid mt--7">
        <div class="row d-flex justify-content-around">
          <div class="col-4 shadow">
            <img
              src="{{ asset('img/brand/gambarDashboard1.png') }}"
              alt="gambarDashboard1"
              style="width: 100%; height: auto; border-radius: 10px"
            />
          </div>
          <div class="col-4 shadow">
            <img
              src="{{ asset('img/brand/gambarDashboard2.png') }}"
              alt="gambarDashboard2"
              style="width: 100%; height: auto; border-radius: 10px"
            />
          </div>
          <div class="col-4 shadow">
            <img
              src="{{ asset('img/brand/gambarDashboard3.png') }}"
              alt="gambarDashboard3"
              style="width: 100%; height: auto; border-radius: 10px"
            />
          </div>
        </div>
      </div>
@endsection
