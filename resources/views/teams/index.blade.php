@extends('layouts.master')
@section('title', 'Team')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">    
@endpush
@push('js')
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/features-posts.js') }}"></script>
    <script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
    <script> 
        $(".swal-confirm").click(function(e) {
        id = e.target.dataset.id;
        swal({
            title: 'Apakah Anda Yakin?',
            text: 'Data yang sudah dihapus tidak bisa dikembalikan',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $(`#delete${id}`).submit();
                }
            });
        });
    </script>
@endpush
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Team</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title"></h2>
            <p class="section-lead">
              Berikut list dari team yang telah terdaftar
            </p>
        <div class="row mt-4">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-left">
                        <div class="section-header-button">
                            {{-- <a href="{{ route('project.create') }}" class="btn btn-primary">Request Project Baru</a> --}}
                            <a href="#" class="btn btn-primary">Team Baru</a>
                        </div>
                      </div>
                <div class="clearfix mb-3"></div>

                @include('layouts.message')

                <div class="table-responsive">
                    <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Anggota</th>
                        <th>Nilai</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kelompok 1</td>
                        <td>
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                            <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                            <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                        </td>
                        <td>80</td>
                        <td>
                            <a href="#">Detail</a>
                            <div class="bullet"></div>
                            <a href="#">Update</a>
                            <div class="bullet"></div>
                            <a href="#" data-id="#" class="text-danger swal-confirm" style="position: absolute;">
                                Delete
                            </a>
                        </td> 
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kelompok 2</td>
                        <td>
                            <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                        </td>
                        <td>90</td>
                        <td>
                            <a href="#">Detail</a>
                            <div class="bullet"></div>
                            <a href="#">Update</a>
                            <div class="bullet"></div>
                            <a href="#" data-id="#" class="text-danger swal-confirm" style="position: absolute;">
                                Delete
                            </a>
                        </td> 
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kelompok 3</td>
                        <td>
                            <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                            <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                        </td>
                        <td>80</td>
                        <td>
                            <a href="#">Detail</a>
                            <div class="bullet"></div>
                            <a href="#">Update</a>
                            <div class="bullet"></div>
                            <a href="#" data-id="#" class="text-danger swal-confirm" style="position: absolute;">
                                Delete
                            </a>
                        </td> 
                    </tr>
                    </table>
                    <div class="card-footer text-right">
                    <nav class="d-inline-block">
                    </nav>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</div>
@endsection