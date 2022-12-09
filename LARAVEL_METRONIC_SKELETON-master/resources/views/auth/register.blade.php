@extends('layouts.auth')
@section('content')
    <div class="d-flex flex-row-fluid flex-center">
        <!--begin::Signin-->
        <div class="login-form login-form-signup">
            <!--begin::Form-->
            <form class="form"  method="POST" action="{{ route('register') }}">
            @csrf
            <!--begin: Wizard Step 1-->
                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                    <!--begin::Title-->
                    <div class="pb-10 pb-lg-15">
                        <h3 class="font-weight-bolder text-dark display5">Create Account</h3>
                        <div class="text-muted font-weight-bold font-size-h4">
                            Already have an Account ?
                            <a href="{{route('login')}}" class="text-primary font-weight-bolder">Sign In</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark">Enter Name</label>
                        <input
                            class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('name') is-invalid @enderror"
                            type="text" name="name" autocomplete="off" autofocus tabindex="1"
                            value="{{ old('name') }}"/>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark">Enter Email</label>
                        <input
                            class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror"
                            type="email" name="email" autocomplete="off" autofocus tabindex="1"
                            value="{{ old('email') }}"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-between mt-n5">
                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Enter Password</label>

                        </div>
                        <input
                            class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror"
                            type="password" name="password" autocomplete="off" tabindex="2"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mt-n5">
                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Confirm Password</label>

                        </div>
                        <input
                            class="form-control h-auto py-7 px-6 rounded-lg border-0"
                            type="password"  autocomplete="off" tabindex="2" id="password_confirmation"  name="password_confirmation" required />

                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    &nbsp;
                    <button type="submit"
                            class=" btn btn-success btn-sm mr-3  font-size-h6 px-8 py-4 my-3 mr-4">

                        Register
                    </button>

                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Signin-->
    </div>
@endsection
