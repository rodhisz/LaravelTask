@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">
                <h2>Add Data</h2>
                <form action="{{ url('/tasks') }}" method="POST">
                    @csrf
                    {{-- 1 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Time</label>
                        <input placeholder="Tambahkan Waktu" name="time" type="text" class="form-control">
                    </div>
                    {{-- 2 --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Task</label>
                        <input placeholder="Tambahkan Task" name="tasks" class="form-control" id="" rows="3">
                    </div>
                    {{-- 3 --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
