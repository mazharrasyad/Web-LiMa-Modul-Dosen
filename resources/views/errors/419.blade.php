@extends('errors.error')
@section('title', '419 Error')
@section('content')
<div id="app">
<section class="section">
    <div class="container mt-5">
    <div class="page-error">
        <div class="page-inner">
        <h1>419</h1>
        <div class="page-description">
            Halaman tidak berlaku
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