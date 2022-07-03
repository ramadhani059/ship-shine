@extends('layouts.admin')

@section('content')

      <!-- Header -->
      <div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="mt-4" style="color: white; font-size: 20">Edit Catalog Paket Tour</h1>
      </div>
      <!-- Card Box -->
      <div class="px-4 mt--7 mb-5">
        <div
          class="col shadow container px-3 py-3"
          style="background-color: white; border-radius: 10px"
        >
          <div class="align-items-center d-flex justify-content-start">
            <i class="bi bi-plus fa-2x"></i>
            <h3 class="mb-0">Destination</h3>
          </div>
          <div class="dropdown-divider"></div>
          <form action="{{ route('catalog-admin.update', ['catalog_admin' => $destination->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group row mb-3 mt-3">
              <label for="inputNama" class="col-sm-2 col-form-label"
                >Name</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $destination->name }}" placeholder="Enter Destination Name" />
                @error('name')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3 mt-3">
              <label for="inputKeyword" class="col-sm-2 col-form-label"
                >Keywords</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $destination->slug }}" placeholder="Enter Destination Keywords" />
                @error('slug')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputLocation" class="col-sm-2 col-form-label"
                >Location</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ $destination->location }}" placeholder="Enter Destination Location" />
                @error('location')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputDuration" class="col-sm-2 col-form-label"
                >Duration</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ $destination->duration }}" placeholder="Enter Duration" />
                @error('duration')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputFacilities" class="col-sm-2 col-form-label"
                >Facilities</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('facilities') is-invalid @enderror" id="facilities" name="facilities" value="{{ $destination->facilities }}" placeholder="Enter Destination Facilities" />
                @error('facilities')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputDescription" class="col-sm-2 col-form-label"
                >Description</label
              >
              <div class="col-sm-8">
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ $destination->description }}" placeholder="Enter Destination Description" />
                @error('description')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label
                for="exampleFormControlFile1"
                class="col-sm-2 col-form-label"
                >Change Images
              </label>
              <div class="col-sm-4 py-2">
                <input
                  type="file"
                  class="form-control-file"
                  name="destinationphoto"
                  id="destinationphoto"
                />
                @error('destinationphoto')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputPrice" class="col-sm-2 col-form-label"
                >Price</label
              >
              <div class="col-sm-4">
                <input type="text" class="form-control @error('prize') is-invalid @enderror" id="prize" name="prize" value="{{ $destination->prize }}" placeholder="Enter Destination Prize" />
                @error('prize')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="row d-flex justify-content-center mt-5 mb-5">
              <div class="col-md-2">
                <button type="submit" class="btn btn-success btn-block">
                  <i class="fa-lg bi bi-check2 mr-1"></i>Simpan
                </button>
              </div>
              <div class="col-md-2">
                <a href="{{ route('catalog-admin.index') }}">
                    <button type="button" class="btn btn-danger btn-block">
                        <i class="fa-md bi bi-x-lg mr-1"></i>Batal
                    </button>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>

@endsection

