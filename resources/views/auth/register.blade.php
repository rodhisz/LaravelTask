@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">

        <div class="card">
            <div class="card-body">
                <h2>Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    {{-- 1 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    {{-- 2 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id=""
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    {{-- 3 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id=""
                            value="{{ old('password') }}">
                        @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    {{-- 4 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control">
                    </div>
                    {{-- 3 --}}
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
