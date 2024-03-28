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
            
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">

                    <div class="row">
                        <p>Thank You for Registering</p>
                    </div>

                    <div class="row">
                        <p>
                          <a href="/home" class="btn btn-primary btn-sm rounded-0">Continue</a>
                        </p>
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
