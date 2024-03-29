@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">

        {{-- error message --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <div class="card">
            <div class="card-body">
                <h2>Add Data</h2>
                <form action="{{ url('/tasks') }}" method="POST">
                    @csrf
                    {{-- 1 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Time</label>
                        <input placeholder="Tambahkan Waktu" name="time" type="text" class="form-control"
                            value="{{ old('time') }}">
                        @error('time')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    {{-- 2 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Task</label>
                        <input placeholder="Tambahkan Task" name="tasks" class="form-control" id=""
                            rows="3" value="{{ old('tasks') }}">
                        @error('tasks')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    {{-- 3 --}}
                    <button type="submit" class="btn btn-primary berhasil">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
