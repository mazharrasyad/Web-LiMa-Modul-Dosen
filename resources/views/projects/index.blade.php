@extends('layouts.master')
@section('title', 'Project')
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
            <h1>Project</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title"></h2>
            <p class="section-lead">
              Berikut list dari project yang telah direquest
            </p>
        <div class="row mt-4">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-left">
                        <div class="section-header-button">
                            @can('isProductOwner')
                                <a href="{{ route('project.create') }}" class="btn btn-primary">Request Project Baru</a>
                            @endcan
                        </div>
                      </div>
                <div class="clearfix mb-3"></div>

                @include('layouts.message')

                <div class="table-responsive">
                    <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Persentase</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($projects as $no => $project)
                    <tr>
                        <td>{{ $projects->firstItem()+$no }}</td>
                        <td>{{ $project->nama }}</td>
                        <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="{{ $project->persen }}%">
                                <div class="progress-bar
                                    @if (0 <= $project->persen and $project->persen < 33)
                                        bg-danger
                                    @elseif (33 <= $project->persen and $project->persen < 66)
                                        bg-warning
                                    @else
                                        bg-success
                                    @endif"
                                    data-width="{{ $project->persen }}%"></div>
                            </div>
                        </td>
                        <td>
                            <div class="badge
                                @if ($project->status == 'Belum')
                                    badge-danger
                                @elseif ($project->status == 'Proses')
                                    badge-warning
                                @else
                                    badge-success
                                @endif">
                            {{ $project->status }}</div>
                        </td>
                        <td>
                            <a href="{{ route('project.show', $project->id) }}">Detail</a>

                            @can('isAdministrator')
                                <div class="bullet"></div>
                                <a href="{{ route('project.edit', $project->id) }}">Update</a>

                                <div class="bullet"></div>
                                <a href="#" data-id="{{ $project->id }}" class="text-danger swal-confirm" style="position: absolute;">
                                    <form action="{{ route('project.destroy', $project->id) }}" id="delete{{ $project->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    </form>
                                    Delete
                                </a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                    </table>
                    <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        {{ $projects->links() }}
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
