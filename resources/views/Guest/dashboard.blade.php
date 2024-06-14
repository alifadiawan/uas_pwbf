@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <p><strong>Email</strong></p>
                            <p>{{ $users->email }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <p><strong>Nama User</strong></p>
                            <p>{{ $users->name }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <p><strong>Username</strong></p>
                            <p>{{ $users->nama_user }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <p><strong>No WA</strong></p>
                            <p>{{ $users->no_wa }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <p><strong>Status User</strong></p>
                            <p>{{ $users->status_user }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="" class="btn btn-primary">Ubah Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Profile Picture</h5>
                </div>
                <div class="mb-3 text-center">
                    @if (empty($userProfilePath))
                        <img id="profilePicturePreview"
                            src="usersProfile/vecteezy_user-profile-icon-profile-avatar-user-icon-male-icon_20911740.png"
                            alt="User Profile Default"
                            class="img-fluid rounded-3" alt="Profile Picture Preview"
                            style="max-width: 400px; max-height: 200px;">
                    @else
                        <img id="profilePicturePreview" src="{{ asset('usersProfile/' . $userProfilePath) }}"
                            alt="{{ $current->username }} profile picture" class="img-fluid rounded-3"
                            alt="Profile Picture Preview" style="max-width: 400px; max-height: 200px;">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
