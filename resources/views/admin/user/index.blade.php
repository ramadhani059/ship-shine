@extends('layouts.admin')

@section('content')

      <!-- Header -->
      <div class="pb-8 pt-7 px-5" style="background-color: #6daffc">
        <h1 class="mt-4" style="color: white; font-size: 20">Data User</h1>
      </div>
      <!-- Card Box -->
      <div class="px-4 mt--7">
        <div
          class="col shadow container px-2 py-2"
          style="background-color: white; border-radius: 10px"
        >
          <div class="d-flex justify-content-end mr-5 mt-3 mb-4">
            <a href="{{ route('data-user.create') }}"
              ><button type="button" class="btn btn-success">
                <i class="bi bi-file-earmark-plus fa-lg mr-2"></i>
                Create User
              </button></a
            >
          </div>
          <div class="table-responsive">
            <table class="table table-borderless table-hover">
              <thead>
                <tr>
                  <th scope="col"><h5>Name</h5></th>
                  <th scope="col"><h5>Email</h5></th>
                  <th scope="col"><h5>Phone</h5></th>
                  <th scope="col"><h5>Address</h5></th>
                  <th scope="col"><h5>Roles</h5></th>
                  <th scope="col"><h5>Action</h5></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $user)
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-4">
                                    @if ( $user->img_user_original != null)
                                        <img alt="Image placeholder" src="{{ asset('storage/user/'.$user->img_user_encrypted) }}">
                                    @else
                                        <img alt="Image placeholder" src="{{ asset('img/profile/akun_kosong.png') }}">
                                    @endif
                                </a>
                                <div class="media-body">
                                    <span class="name mb-0 text-sm"><?php echo \Illuminate\Support\Str::limit(strip_tags( $user->name ), 15, $end='...') ?></span>
                                </div>
                            </div>
                        </th>
                        <td><h5><?php echo \Illuminate\Support\Str::limit(strip_tags( $user->email ), 15, $end='...') ?></h5></td>
                        <td><h5>{{ $user->phone }}</h5></td>
                        <td><h5><?php echo \Illuminate\Support\Str::limit(strip_tags( $user->address ), 15, $end='...') ?></h5></td>
                        <td>
                            <h5>{{ $user->role->name }}</h5>
                        </td>
                        <td>
                            <form action="{{ route('data-user.destroy', ['data_user' => $user->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" data-toggle="tooltip" class="btn btn-sm btn-icon-only text-danger btn-delete" style="background-color: rgba(255, 255, 255, 0)"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection

