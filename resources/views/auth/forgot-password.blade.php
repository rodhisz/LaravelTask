@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">

        <div class="card">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <div class="card-body">
                    <h2>Forgot Password?</h2>
                    <form action="{{ route('password.email') }}" method="POST">
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
                        <button type="submit" class="btn btn-primary">Send Reset Link</button>
                    </form>
                </div>
        </div>
    </div>
@endsection
