@extends('layouts.master')
@section('title', 'Detail Project')
@push('css')
  {{-- <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
@endpush
@push('js')
  <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script>
    $("#users-carousel").owlCarousel({
      items: 4,
      margin: 60,
      autoplay: true,
      autoplayTimeout: 5000,
      loop: true,
      responsive: {
        0: {
          items: 2
        },
        578: {
          items: 4
        },
        768: {
          items: 4
        }
      }
    });
  </script>
@endpush
@section('content')
    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <div class="section-header-back">
            <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
          </div>
          <h1>Detail Project : {{ $project->nama }}</h1>
        </div>
        <div class="section-body">

          <h2 class="section-title">Deskripsi</h2>
          <p class="section-lead">by {{ $project->user['nama'] }}</p>
          <div class="row">
            <div class="col-12">
              <div class="hero bg-primary text-white">
                <div class="hero-inner">
                  <p class="lead">{!! $project->deskripsi !!}</p>
                </div>
              </div>
            </div>
          </div>

          <h2 class="section-title">Rincian</h2>
          <div class="row">

            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <div class="list-unstyled list-unstyled-border">

                    <div class="media">
                      <div class="media-icon"><i class="far fa-calendar"></i></div>
                      <div class="media-body">
                        <h6>Tanggal Pengerjaan</h6>
                        <p>{{ \Carbon\Carbon::parse($project->tanggal_mulai)->translatedformat('d F Y') }} s.d. {{ \Carbon\Carbon::parse($project->tanggal_akhir)->translatedformat('d F Y') }}</p>
                      </div>
                    </div>

                    <div class="media">
                      <div class="media-icon"><i class="fas fa-dollar-sign"></i></div>
                      <div class="media-body">
                        <h6>Budget</h6>
                        <p>Rp{{ number_format($project->budget,0,'.','.') }}</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <div class="list-unstyled list-unstyled-border">

                    <div class="media">
                      <div class="media-icon"><i class="fas fa-tasks"></i></div>
                      <div class="media-body">
                        <h6>Jumlah Sprint</h6>
                        @if ($project->jumlah_sprint != 0)
                            <p>{{ $project->jumlah_sprint }} Sprint</p>
                        @else
                            <a href="{{ route('project.edit', $project->id) }}">
                                <p>{{ $project->jumlah_sprint }} Sprint</p>
                            </a>
                        @endif
                      </div>
                    </div>

                    <div class="media">
                      <div class="media-icon"><i class="fas fa-shield-alt"></i></div>
                      <div class="media-body">
                        <h6>Status</h6>
                        <p>{{ $project->status }}</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>

          <h2 class="section-title">Tim :
            @if (1 == 2)
              Nama Tim
            @else
              <a href="#" data-toggle="tooltip" title="Klik, untuk memilih tim">
                Belum Ada
              </a>
            @endif
          </h2>
          <div class="row">

            <div class="col-12">
              <div class="card">
                {{-- <div class="card-header">
                  <h4>Users</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div> --}}
                <div class="card-body">
                  <div class="owl-carousel owl-theme" id="users-carousel">

                    {{-- @foreach ($tims as $tim) --}}
                      <div>
                        <div class="user-item">
                          <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="img-fluid" width="10">
                          <div class="user-details">
                            <div class="user-name">Hasan Basri</div>
                            <div class="text-job text-muted">Web Developer</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn">Detail</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="user-item">
                          <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="img-fluid" width="10">
                          <div class="user-details">
                            <div class="user-name">Hasan Basri 22</div>
                            <div class="text-job text-muted">Web Developer</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn">Detail</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    {{-- @endforeach --}}

                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

          <h2 class="section-title">Proses Pengerjaan</h2>
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <div class="progress mb-3">
                    <div class="progress-bar @if (0 <= $project->persen and $project->persen < 33)
                      bg-danger
                  @elseif (33 <= $project->persen and $project->persen < 66)
                      bg-warning
                  @else
                      bg-success
                  @endif"
                  data-width="{{ $project->persen }}%" >{{ $project->persen }}%</div>
                  </div>
                </div>
              </div>

              <div class="activities">

                @foreach ($sprints as $sprint)
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      @if ($sprint->status == 'Selesai')
                        <i class="fas fa-check"></i>
                      @elseif ($sprint->status == 'Proses')
                        <i class="fas fa-redo-alt"></i>
                      @else
                        <i class="fas fa-flag"></i>
                      @endif
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">{{ $sprint->nama }}</span>
                        <span class="bullet"></span>
                        @if ($sprint->status == 'Selesai')
                          <span class="badge badge-success">Selesai</span>
                        @elseif ($sprint->status == 'Proses')
                          <span class="badge badge-warning">Proses</span>
                        @else
                          <span class="badge badge-danger">Belum</span>
                        @endif
                        <div class="float-right">
                          <a href="" data-toggle="tooltip" title="Proses Modul Mahasiswa"><i class="far fa-edit"></i></a>
                        </div>
                      </div>
                      <p>{{ \Carbon\Carbon::parse($sprint->tanggal_mulai)->translatedformat('l, d F Y') }} s.d. {{ \Carbon\Carbon::parse($sprint->tanggal_akhir)->translatedformat('l, d F Y') }}</p>
                    </div>
                  </div>
                @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
