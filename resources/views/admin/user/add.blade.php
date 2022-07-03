@extends('layouts.admin')

@section('content')

      <!-- Header -->
      <div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="mt-4" style="color: white; font-size: 20">Create User</h1>
      </div>
      <!-- Card Box -->
      <div class="px-4 mt--7 mb-5">
        <div
          class="col shadow container px-3 py-3"
          style="background-color: white; border-radius: 10px"
        >
          <div class="align-items-center d-flex justify-content-start">
            <i class="bi bi-plus fa-2x"></i>
            <h3 class="mb-0">User</h3>
          </div>
          <div class="dropdown-divider"></div>
          <form action="{{ route('data-user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row mb-3 mt-3">
              <label for="inputNama" class="col-sm-2 col-form-label"
                >Name</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter User Full Name" />
                @error('name')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3 mt-3">
              <label for="inputEmail" class="col-sm-2 col-form-label"
                >Email</label
              >
              <div class="col-sm-5">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter User Email" />
                @error('email')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label"
                >Location</label
              >
              <div class="col-sm-5">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" placeholder="Enter User Password" />
                @error('password')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputPhone" class="col-sm-2 col-form-label"
                >Phone</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter User Phone" />
                @error('phone')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputAddress" class="col-sm-2 col-form-label"
                >Address</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Enter User Address" />
                @error('address')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
              <label for="inputCity" class="col-sm-2 col-form-label"
                >City</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}" placeholder="Enter User City" />
                @error('city')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-3">
                    <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-5">
                        <select name="roles" class="form-control @error('roles') is-invalid @enderror" id="roles">
                            <option value="" class="options">-- User Roles --</option>
                            @foreach ($roles as $roles)
                                <option value="{{ $roles->id}}" {{ old('roles') == $roles->id ? 'selected' : '' }}>{{ $roles->name }}</option>
                            @endforeach
                        </select>
                        @error('roles')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
            </div>
            <div class="form-group row mb-3">
              <label
                for="exampleFormControlFile1"
                class="col-sm-2 col-form-label"
                >Upload Images
              </label>
              <div class="col-sm-4 py-2">
                <input
                  type="file"
                  class="form-control-file"
                  name="userphoto"
                  id="userphoto"
                />
                @error('userphoto')
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
                <a href="{{ route('data-user.index') }}">
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

