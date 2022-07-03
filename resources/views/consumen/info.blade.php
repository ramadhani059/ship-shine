@extends('layouts.customer')

@section('content')
      <div class="pt-8 px-6" style="background-color: #288afb">
        <div class="row">
          <div
            class="col-md-6 d-flex justify-content-center align-items-center mb-5"
            style="background-color: #6daffc; border-radius: 30px 0 0 30px"
          >
            <img src="{{ asset('img/brand/DashbordShipshine.png') }}" width="50%" />
          </div>
          <div
            class="col-md-6 py-6 px-5 mb-5"
            style="background-color: white; border-radius: 0 30px 30px 0"
          >
            <h4>
              Travel App sendiri merupakan usaha yang bergerak di bidang jasa
              yang dikembangkan melalui Mobile Application yang menyediakan
              akses transportasi laut beserta paket wisata, reservasi tiket,
              destinasi tempat tujuan dan lain-lain yang akan disediakan ke
              wilayah pulau terpencil dan terluar Indonesia. <br />
              <br />
              Tujuan diciptakan Travel App sendiri guna memberi kemudahan
              pengguna dalam memesan tiket wisata dimanapun dan kapanpun,
              memberikan informasi yang akurat tentang destinasi dan biaya
              akomodasi yang ditawarkan kepada wisatawan serta memberi keamanan
              pembayaran dan kode booking pada pengguna.
            </h4>
          </div>
        </div>
      </div>
@endsection
