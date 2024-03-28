@extends('layouts.app')

@push('extra_css')
<style>
    .pcoded[theme-layout=vertical][vertical-placement=left][vertical-nav-type=expanded][vertical-effect=shrink] .pcoded-content {
        margin-left:250px
    }
    select[readonly]{
        background: #eee;
    }

    select[readonly] option{
        display:none;
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
                        <span>Display contact information</span>
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
                            <h5>Contact Information</h5>
                        </div>
                        <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $contact->name }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Company</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="company" id="company" value="{{ $contact->company }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" id="email" value="{{ $contact->email }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $contact->phone }}" readonly>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Created At</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="created_at" id="created_at" value="{{ $contact->created_at }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Updated At</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="updated_at" id="updated_at" value="{{ $contact->updated_at }}" readonly>
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
@push('extra_scripts')
<script>
    $('#selection').css('pointer-events','none');
</script>

@endpush
