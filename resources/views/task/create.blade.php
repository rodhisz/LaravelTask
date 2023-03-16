@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">
                <h2>Add Data</h2>
                <form action="#">
                    <div class="mb-3">
                        <label for="" class="form-label">Time</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Task</label>
                        <textarea class="form-control" id="" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
