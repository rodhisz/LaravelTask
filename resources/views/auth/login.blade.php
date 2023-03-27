@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">

        <div class="card">
            <div class="card-body">
                <h2>Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    {{-- 1 --}}
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
                    {{-- 2 --}}
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
                    {{-- 3 --}}
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{route("password.request")}}" class="btn btn-link">Forgot your password?</a>
                </form>
            </div>
        </div>
    </div>
@endsection
