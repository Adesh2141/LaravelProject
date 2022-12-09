@extends('layouts.auth')
@section('content')
    <div class="d-flex flex-row-fluid flex-center">
        <!--begin::Signin-->
        <div class="login-form">
            <!--begin::Form-->
            <form class="form"  action="{{route('login')}}" method="POST">
            @csrf
                <!--begin::Title-->
                <div class="pb-5 pb-lg-15">
                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                    <div class="text-muted font-weight-bold font-size-h4">
                        New Here?
                        <a href="{{route('register')}}" class="text-primary font-weight-bolder">Create Account</a>
                    </div>
                </div>
                <!--begin::Title-->

                <!--begin::Form group-->
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
                <!--end::Form group-->

                <!--begin::Form group-->
                <div class="form-group">
                    <div class="d-flex justify-content-between mt-n5">
                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Enter Password</label>
                        &nbsp;
                        <a href="{{route('password.request')}}"
                           class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot
                            Password ?</a>
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
                <!--end::Form group-->

                <!--begin::Action-->
                <div class="pb-lg-0 pb-5">
                    <button type="submit"
                            class=" btn btn-outline-primary btn-sm mr-3  font-size-h6 px-8 py-4 my-3 mr-4">
                        <!--begin::Svg Icon | paParam Softwareth:/var/www/preview.keenthemes.com/metronic/releases/2020-07-29-055858/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Sign-in.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" opacity="0.3"
                                      transform="translate(9.000000, 12.000000) rotate(-270.000000) translate(-9.000000, -12.000000) "
                                      x="8" y="6" width="2" height="12" rx="1"/>
                                <path
                                    d="M20,7.00607258 C19.4477153,7.00607258 19,6.55855153 19,6.00650634 C19,5.45446114 19.4477153,5.00694009 20,5.00694009 L21,5.00694009 C23.209139,5.00694009 25,6.7970243 25,9.00520507 L25,15.001735 C25,17.2099158 23.209139,19 21,19 L9,19 C6.790861,19 5,17.2099158 5,15.001735 L5,8.99826498 C5,6.7900842 6.790861,5 9,5 L10.0000048,5 C10.5522896,5 11.0000048,5.44752105 11.0000048,5.99956624 C11.0000048,6.55161144 10.5522896,6.99913249 10.0000048,6.99913249 L9,6.99913249 C7.8954305,6.99913249 7,7.89417459 7,8.99826498 L7,15.001735 C7,16.1058254 7.8954305,17.0008675 9,17.0008675 L21,17.0008675 C22.1045695,17.0008675 23,16.1058254 23,15.001735 L23,9.00520507 C23,7.90111468 22.1045695,7.00607258 21,7.00607258 L20,7.00607258 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                    transform="translate(15.000000, 12.000000) rotate(-90.000000) translate(-15.000000, -12.000000) "/>
                                <path
                                    d="M16.7928932,9.79289322 C17.1834175,9.40236893 17.8165825,9.40236893 18.2071068,9.79289322 C18.5976311,10.1834175 18.5976311,10.8165825 18.2071068,11.2071068 L15.2071068,14.2071068 C14.8165825,14.5976311 14.1834175,14.5976311 13.7928932,14.2071068 L10.7928932,11.2071068 C10.4023689,10.8165825 10.4023689,10.1834175 10.7928932,9.79289322 C11.1834175,9.40236893 11.8165825,9.40236893 12.2071068,9.79289322 L14.5,12.0857864 L16.7928932,9.79289322 Z"
                                    fill="#000000" fill-rule="nonzero"
                                    transform="translate(14.500000, 12.000000) rotate(-90.000000) translate(-14.500000, -12.000000) "/>
                            </g>
                        </svg><!--end::Svg Icon-->

                        Sign In
                    </button>
                    <!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg-->
                    <!--end::Svg Icon-->
                </div>
                <!--end::Action-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Signin-->
    </div>
@endsection

