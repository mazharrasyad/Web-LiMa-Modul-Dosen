@extends('layouts.master')
@section('title', 'Request Project Baru')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
@endpush
@push('js')
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
    <script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <script>
      $('.daterange-cus').daterangepicker({
        locale: {format: 'YYYY-MM-DD'},
        drops: 'down',
        opens: 'right'
      });
      $('.daterange-btn').daterangepicker({
        ranges: {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      }, function (start, end) {
        $('.daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      });

      var cleaveC = new Cleave('.currency', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
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
            <h1>Request Project Baru</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title"></h2>
            <p class="section-lead">
              Silahkan tuliskan project baru yang ingin direquest
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <form action="{{ route('project.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">                       
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        <label @error('nama') class="text-danger" @enderror>
                          @error('nama') *{{ $message }} @enderror
                        </label>                    
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>                      
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" name="deskripsi">{{ old('deskripsi') }}</textarea>                      
                        <label @error('deskripsi') class="text-danger" @enderror>
                          @error('deskripsi') *{{ $message }} @enderror
                        </label>
                      </div>  
                    </div>
                    {{-- <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Mulai</label>                      
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}">                      
                        <label @error('tanggal_mulai') class="text-danger" @enderror>
                          @error('tanggal_mulai') *{{ $message }} @enderror
                        </label>
                      </div>                      
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Akhir</label>                      
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_akhir" value="{{ old('tanggal_akhir') }}">
                        <label @error('tanggal_akhir') class="text-danger" @enderror>
                          @error('tanggal_akhir') *{{ $message }} @enderror
                        </label>
                      </div>                      
                    </div> --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Pengerjaan</label>                      
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control daterange-cus" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}">                          
                        </div>
                        <label @error('tanggal_mulai') class="text-danger" @enderror>
                          @error('tanggal_mulai') *{{ $message }} @enderror
                        </label>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Budget</label>                      
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control currency" name="budget" value="{{ old('budget') }}">             
                      </div>
                      <label @error('budget') class="text-danger" @enderror>
                        @error('budget') *{{ $message }} @enderror
                      </label>
                      </div>                                              
                    </div>  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Request</button>
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