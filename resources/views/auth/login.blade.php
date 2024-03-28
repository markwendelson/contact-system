@extends('layouts.app')

@section('content')
<section class="login-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form id="login" class="md-float-material form-material" method="POST" action="{{ route('login') }}" novalidate>
                    @csrf
                    <div class="text-center">
                        <a href="{{ route('index') }}">
                            <h4 class="">{{ config('app.name', 'Laravel') }}</h4>
                        </a>
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>
                            @error('email')
                            <div class="alert alert-danger icons-alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                                </button>
                                <p>{{ $message }}</p>
                            </div>
                            @enderror

                                <div class="form-group form-primary">
                                    <div>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"/>
                                        <span class="form-bar"></span>
                                        <span class="messages"></span>
                                        <label class="float-label">Email Address</label>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <div>
                                        <input type="password" name="password" id="password" class="form-control" autocomplete="off"/>
                                        <span class="form-bar"></span>
                                        <span class="messages"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                </div>
                                
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 btn-login">LOGIN</button>
                                    </div>
                                </div>
                                
                                <p class="text-inverse text-left">Don't have an account?<a href="/register">
                                    <b>Register</b></a>
                                </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('extra_scripts')
<script>
    var constraints = {
        email: {
            presence: {
                message: 'is required.'
            },
            email: true
        },
        password: {
            presence: {
                message: 'is required.'
            }
        }
    }

    var form = document.querySelector("form#login");

    form.addEventListener("submit", function(ev) {
        ev.preventDefault();
        var success = handleFormSubmit(form);

        if(success) {
            $(this).submit()
        }
    });
</script>
@endpush
