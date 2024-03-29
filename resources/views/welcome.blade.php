@extends('layouts.app')

@section('main')
    <div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
            <span class="fs-5 fw-semibold m-auto">Welcome to Task Management</span>
        </div>
    </div>
    <div class="mt-3 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
        @guest
        @else
        <a href="{{ url('/tasks') }}" class="mt-2 btn btn-primary">Tasks</a>
        @endguest
    </div>
@endsection
