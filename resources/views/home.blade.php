@extends('layouts.app')

@push('extra_css')
<style>
    .pcoded[theme-layout=vertical][vertical-placement=left][vertical-nav-type=expanded][vertical-effect=shrink] .pcoded-content {
        margin-left:250px
    }
</style>
@endpush

@section('content')
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('partials.nav')

        <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

            @include('partials.sidebar')

          <div class="pcoded-content">
            <div class="page-header card">
              <div class="row align-items-end">
                <div class="col-lg-8">
                  <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                      <h5>Dashboard</h5>
                      <span>Overall Data</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">

                    <div class="row">

                        <div class="col-xl-4 col-md-12">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Contacts</h6>
                                            <h3 class="f-w-700 text-c-blue">{{ $contacts }}</h3>
                                            <p class="m-b-0">Total Contacts</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
