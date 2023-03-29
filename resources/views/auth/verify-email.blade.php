@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">

        <div class="card">
            @if (session('status'))
                <div class="alert alert-success">
                    Link verifikasi telah dikirim
                </div>
            @endif
            <div class="card-body">
                Sebelum melanjtukan silahkan cek email anda,
                untuk proses verifikasi. Atau <form class="d-inline" method="POST" action="{{ route('verification.send') }}"> 
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ _('Kirim Ulang') }}/</button>
                </form>
            </div>
        </div>
    </div>
@endsection
