@extends('layouts.auth')

@section('content')
    <div class="d-flex flex-row-fluid flex-center">
        <!--begin::Signin-->

        <div class="login-form login-form-signup">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="pb-10 pb-lg-15">
                            <h3 class="font-weight-bolder text-dark display5">Reset Password</h3>
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Enter Email</label>
                            <input id="email" type="email" class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Password</label>
                            <input id="password" type="password" class="form-control h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control h-auto py-7 px-6 rounded-lg border-0" name="password_confirmation" required autocomplete="new-password">

                        </div>



                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                    class=" btn btn-success btn-sm mr-3  font-size-h6 px-8 py-4 my-3 mr-4">

                                Reset Password
                            </button>

                        </div>
                    </form>
        </div>
        <!--end::Signin-->
    </div>
@endsection
