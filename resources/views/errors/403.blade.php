@extends('errors.error')
@section('title', '403 Error')
@section('content')
<div id="app">
<section class="section">
    <div class="container mt-5">
    <div class="page-error">
        <div class="page-inner">
        <h1>403</h1>
        <div class="page-description">
            Maaf, Anda tidak bisa mengakses halaman ini
        </div>
        <div class="page-search">
            <div class="mt-3">
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-primary btn-lg">
                        Kembali
                    </button>
                </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
</div>
@endsection
