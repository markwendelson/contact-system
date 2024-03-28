@extends('layouts.app')

@section('content')
<section class="login-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form id="register" class="md-float-material form-material" method="POST" action="{{ route('register') }}" novalidate>
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
                                    <h3 class="text-center txt-primary">Register</h3>
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
                                        <input type="name" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
                                        <span class="form-bar"></span>
                                        <span class="messages"></span>
                                        <label class="float-label">Name</label>
                                    </div>
                                </div>

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

                                <div class="form-group form-primary">
                                    <div>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" autocomplete="off"/>
                                        <span class="form-bar"></span>
                                        <span class="messages"></span>
                                        <label class="float-label">Confirm Password</label>
                                    </div>
                                </div>
                                
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 btn-login">REGISTER</button>
                                    </div>
                                </div>
                                
                                <p class="text-inverse text-left">Already have an account?<a href="/login">
                                    <b>Login</b></a>
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
        name: {
            presence: {
                message: 'is required.'
            }
        },
        email: {
            presence: {
                message: 'is required.'
            },
            email: true
        },
        password: {
            presence: {
                message: 'is required.'
            },
            length: { minimum: 8 }
        },
        password_confirmation: {
            equality: "password",
            presence: {
                message: 'is required.'
            },
            length: { minimum: 8 }
        }
    }

    var form = document.querySelector("form#register");

    form.addEventListener("submit", function(ev) {
        ev.preventDefault();
        var success = handleFormSubmit(form);

        if(success) {
            $(this).submit()
        }
    });
</script>
@endpush
