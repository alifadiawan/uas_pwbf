@extends('layout.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Edit data <strong>{{ $current->username }}</strong></h1>

            <div class="row mt-5">
                <div class="col">
                    <form action="{{ route('users.update', $current->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $current->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Username</label>
                            <input type="text" name="name" class="form-control" value="{{ $current->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Fullname</label>
                            <input type="text" name="nama_user" class="form-control" value="{{ $current->nama_user }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomer WA</label>
                            <input type="text" name="no_hp" class="form-control" value="{{ $current->no_wa }}">
                        </div>
                        <div class="mb-3">
                            <label for="profilePhotoInput" class="form-label">Profile Photo</label>
                            <input type="file" id="profilePhotoInput" name="userPP" class="form-control"
                                accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <div class="col">
                    <div class="mb-3">
                        @if (empty($userProfilePath))
                        <img id="profilePicturePreview"
                            src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                            alt="User Profile Default Image Png Clipart , Png Download - Default User Profile"
                            class="img-fluid rounded-3" alt="Profile Picture Preview"
                            style="max-width: 600px; max-height: 400px;">
                        @else
                            <img id="profilePicturePreview" 
                                src="{{ asset('usersProfile/' . $userProfilePath) }}"
                                alt="{{ $current->username }} profile picture"
                                class="img-fluid rounded-3" alt="Profile Picture Preview"
                                style="max-width: 600px; max-height: 400px;">
                        @endif
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <script>
            const profilePhotoInput = document.getElementById('profilePhotoInput');
            const profilePicturePreview = document.getElementById('profilePicturePreview');
            const submitButton = document.querySelector('button[type="submit"]'); // Get the submit button

            // Initially disable the submit button (different from previous approach)
            submitButton.disabled = true;

            profilePhotoInput.addEventListener('click', function() {
                // Button enabled on click of the file input (alternative)
                submitButton.disabled = false;
            });

            profilePhotoInput.addEventListener('change', function(event) {
                const file = event.target.files[0];

                if (file) {
                    // Update preview image (existing code from previous response)
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profilePicturePreview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                } else {
                    // No file selected, clear preview image (optional)
                    profilePicturePreview.src =
                        "https://placehold.co/600x400"; // Replace with a default image if desired
                }
            });
        </script>
    @endsection
