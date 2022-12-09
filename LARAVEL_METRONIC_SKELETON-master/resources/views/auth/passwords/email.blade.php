@extends('layouts.auth')
@section('content')
    <div class="d-flex flex-row-fluid flex-center">
        <!--begin::Forgot-->
        <div class="login-form">
            <!--begin::Form-->
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form"  method="POST" action="{{ route('password.email') }}">
            @csrf
                <!--begin::Title-->
                <div class="pb-5 pb-lg-15">
                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Forgotten Password ?</h3>
                    <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                </div>
                <!--end::Title-->

                <!--begin::Form group-->
                <div class="form-group">
                    <input class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off"/>
                </div>
                <!--end::Form group-->

                <!--begin::Form group-->
                <div class="form-group d-flex flex-wrap">
                    <button type="submit" id="kt_login_forgot_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                    <a href="{{route('login')}}"  id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
                </div>
                <!--end::Form group-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Forgot-->
    </div>
@endsection
