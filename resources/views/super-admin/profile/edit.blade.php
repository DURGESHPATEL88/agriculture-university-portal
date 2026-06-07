@extends('layouts/layoutMaster')

@section('title', 'Super Admin Profile')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Account Settings /</span> Profile
</h4>

@if (session('status') === 'profile-updated')
    <div class="alert alert-success alert-dismissible" role="alert">
        Profile details updated successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('status') === 'password-updated')
    <div class="alert alert-success alert-dismissible" role="alert">
        Password updated successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row">
  <div class="col-md-12">
    <!-- Profile Details Card -->
    <div class="card mb-4">
      <h4 class="card-header">Profile Details</h4>
      <div class="card-body">
        <form id="formAccountSettings" method="POST" action="{{ route('super-admin.profile.update') }}">
          @csrf
          @method('patch')
          <div class="row mt-2 gy-4">
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name', $user->name) }}" autofocus required />
                <label for="name">Name</label>
              </div>
              @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required />
                <label for="email">Email</label>
              </div>
              @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="mt-4">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Change Password Card -->
    <div class="card mb-4">
      <h4 class="card-header">Change Password</h4>
      <div class="card-body">
        <form id="formChangePassword" method="POST" action="{{ route('super-admin.password.update') }}">
          @csrf
          @method('put')
          <div class="row gy-4">
            <div class="col-md-4">
              <div class="form-floating form-floating-outline">
                <input class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" type="password" name="current_password" id="current_password" required />
                <label for="current_password">Current Password</label>
              </div>
              @error('current_password', 'updatePassword')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-4">
              <div class="form-floating form-floating-outline">
                <input class="form-control @error('password', 'updatePassword') is-invalid @enderror" type="password" name="password" id="password" required />
                <label for="password">New Password</label>
              </div>
              @error('password', 'updatePassword')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-4">
              <div class="form-floating form-floating-outline">
                <input class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation" required />
                <label for="password_confirmation">Confirm Password</label>
              </div>
              @error('password_confirmation', 'updatePassword')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="mt-4">
            <button type="submit" class="btn btn-primary me-2">Update Password</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Delete Account Card -->
    <div class="card">
      <h5 class="card-header fw-normal text-danger">Delete Account</h5>
      <div class="card-body">
        <div class="mb-3 col-12 mb-0">
          <div class="alert alert-warning">
            <h6 class="alert-heading mb-1 text-warning">Are you sure you want to delete your account?</h6>
            <p class="mb-0">Once you delete your account, all data is permanently lost. Please enter your password to confirm.</p>
          </div>
        </div>
        <form id="formAccountDeactivation" method="POST" action="{{ route('super-admin.profile.destroy') }}">
          @csrf
          @method('delete')
          <div class="row gy-4">
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control @error('password', 'userDeletion') is-invalid @enderror" type="password" name="password" id="delete_password" placeholder="Enter password to confirm" required />
                <label for="delete_password">Password</label>
              </div>
              @error('password', 'userDeletion')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-check my-3 ms-1">
            <input class="form-check-input" type="checkbox" name="confirm_deactivate" id="confirm_deactivate" required />
            <label class="form-check-label" for="confirm_deactivate">I confirm my account deactivation</label>
          </div>
          <button type="submit" class="btn btn-danger deactivate-account">Delete Account</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
