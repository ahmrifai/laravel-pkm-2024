@extends('layouts.theme')
@section('content')
    <form class="form w-100" novalidate="novalidate" action="{{ route('authentication') }}">
        <div class="text-center mb-11">
            <h1 class="text-dark fw-bolder mb-3">Masuk</h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="fv-row mb-8">
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
        </div>
        <div class="fv-row mb-3">
            <input type="password" placeholder="Password" name="password" autocomplete="off"
                class="form-control bg-transparent" />
        </div>
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <a href="{{ route('forgot-password') }}" class="link-primary">Forgot Password ?</a>
        </div>
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <span class="indicator-label">Sign In</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
@endsection
