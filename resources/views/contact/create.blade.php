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
                      <h5>Contact</h5>
                      <span>Display creating new contact</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>New Contact</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('contact.store') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter name" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="messages text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Company</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" id="company" placeholder="Enter company" value="{{ old('company') }}">
                                        @error('company')
                                        <span class="messages text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="messages text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                                        @error('phone')
                                        <span class="messages text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        <a href="{{ route('contact.index') }}" class="btn btn-secondary m-b-0">Cancel</a>
                                        <button type="submit" class="btn btn-primary m-b-0">Save</button>
                                    </div>
                                </div>

                            </form>

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
