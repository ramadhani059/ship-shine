@extends('layouts.admin')

@section('content')

      <!-- Header -->
      <div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="mt-4" style="color: white; font-size: 20">Catalog Paket Tour</h1>
      </div>
      <!-- Card Box -->
      <div class="px-4 mt--7">
        <div
          class="col shadow container px-2 py-2"
          style="background-color: white; border-radius: 10px"
        >
          <div class="d-flex justify-content-end mr-5 mt-3 mb-4">
            <a href="{{ route('catalog-admin.create') }}"
              ><button type="button" class="btn btn-success">
                <i class="bi bi-file-earmark-plus fa-lg mr-2"></i>
                Create Destination
              </button></a
            >
          </div>
          <div class="table-responsive">
            <table class="table table-borderless table-hover">
              <thead>
                <tr>
                  <th scope="col"><h5>No</h5></th>
                  <th scope="col"><h5>Name</h5></th>
                  <th scope="col"><h5>Location</h5></th>
                  <th scope="col"><h5>Duration</h5></th>
                  <th scope="col"><h5>Facilities</h5></th>
                  <th scope="col"><h5>Description</h5></th>
                  <th scope="col"><h5>Images</h5></th>
                  <th scope="col"><h5>Prices</h5></th>
                  <th scope="col"><h5>Action</h5></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($destination as $destination )
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td><h5><?php echo \Illuminate\Support\Str::limit(strip_tags($destination->name), 10, $end='...') ?></h5></td>
                  <td><h5>{{ $destination->location }}</h5></td>
                  <td>
                    <h5>
                      {{ $destination->duration }}
                    </h5>
                  </td>
                  <td><h5><?php echo \Illuminate\Support\Str::limit(strip_tags($destination->facilities), 15, $end='...') ?></h5></td>
                  <td><h5><?php echo \Illuminate\Support\Str::limit(strip_tags($destination->description), 15, $end='...') ?></h5></td>
                  <td>
                    <img
                      src="{{ asset('storage/destination/'.$destination->img_destination_encrypted) }}"
                      width="50px"
                      height="50px"
                      style="margin: auto"
                    />
                  </td>
                  <td><h5>{{ $destination->prize }}</h5></td>
                  <td>
                    <div class="d-flex">
                        <a class="btn btn-sm btn-icon-only text-green" style="background-color: rgba(255, 255, 255, 0)" data-toggle="tooltip" href="{{ route('catalog-admin.edit', ['catalog_admin' => $destination->id]) }}" role="button" data-toggle="tooltip" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('catalog-admin.destroy', ['catalog_admin' => $destination->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" data-toggle="tooltip" class="btn btn-sm btn-icon-only text-danger btn-delete" style="background-color: rgba(255, 255, 255, 0)"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection
