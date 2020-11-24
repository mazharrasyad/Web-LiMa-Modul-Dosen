@extends('layouts.master')
@section('title', 'Update Jumlah Sprint Project')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/fullcalendar/fullcalendar.min.css') }}">
@endpush
@push('js')
    <script src="{{ asset('assets/modules/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
    <script>
      var cleaveC = new Cleave('.currency', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
      });
    </script>    
    <script>
      $("#myEvent").fullCalendar({
        height: 'auto',
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month',
        },
        editable: true,
        defaultDate: {!! str_replace("'", "\'", json_encode($project->tanggal_mulai)) !!},
        events: [          
          {
            title: {!! str_replace("'", "\'", json_encode($project->nama)) !!},
            start: {!! str_replace("'", "\'", json_encode($project->tanggal_mulai)) !!},
            end: {!! str_replace("'", "\'", json_encode($project->tanggal_akhir)) !!},
            backgroundColor: "#007bff",
            borderColor: "#007bff",
            textColor: '#fff'
          },
        ]        
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
            <h1>Update Project : {{ $project->nama }}</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title"></h2>
            <p class="section-lead">
              Silahkan update jumlah sprint pada project
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <form action="{{ route('project.update', $project->id) }}" method="POST">
                  @csrf
                  @method('patch')
                  <div class="card-body">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Sprint</label>                      
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <input type="text" class="form-control currency" name="jumlah_sprint" value="{{ $project->jumlah_sprint }}">             
                        </div>
                        <label @error('jumlah_sprint') class="text-danger" @enderror>
                          @error('jumlah_sprint') *{{ $message }} @enderror
                        </label>
                      </div>                                              
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Submit</button>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4>Tanggal Pengerjaan : {{ \Carbon\Carbon::parse($project->tanggal_mulai)->translatedformat('l, d F Y') }} s.d. {{ \Carbon\Carbon::parse($project->tanggal_akhir)->translatedformat('l, d F Y') }}</h4>
                          </div>
                          <div class="card-body">
                            <div class="fc-overflow">                            
                              <div id="myEvent"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection