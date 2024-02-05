@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center">Welcome to Your Profile {{ $user->name }} {{ $user->last_name }}</h1>

    @include('profile.blocks.nav')




    <form action="{{ route('profile.passwordUpdate', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="mb-3">
                <label for="oldPasswordInput" class="form-label">Old Password</label>
                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                    placeholder="Old Password">
                @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="newPasswordInput" class="form-label">New Password</label>
                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                    placeholder="New Password">
                @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                    placeholder="Confirm New Password">
                @error('new_password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-main float-end">Submit</button>
        </div>

    </form>
</div>

@endsection
