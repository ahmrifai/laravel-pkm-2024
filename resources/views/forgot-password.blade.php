@extends('layouts.auth')
@section('body')
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form"
                    data-kt-redirect-url="{{ route('login') }}" action="#">
                    <div class="text-center mb-10">
                        <h1 class="text-dark fw-bolder mb-3">Lupa Password ?</h1>
                        <div class="text-gray-500 fw-semibold fs-6">Masukan email anda untuk mereset password !</div>
                    </div>
                    <div class="fv-row mb-8">
                        <input type="text" placeholder="Email" name="email" autocomplete="off"
                            class="form-control bg-transparent" />
                    </div>
                    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                        <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                            <span class="indicator-label">Reset password</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
