@extends('front.layouts.master')

@section('content')
    @include('front.partials.topHeader')

    @include('front.partials.header')

    <div class="auth">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center mb-5 fw-bold">ورود به حساب کاربری</h3>
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="ایمیل"
                            class="form-control mt-3 @error('email') is-invalid @enderror">
                        @error('email')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" placeholder="رمز عبور"
                            class="form-control mt-3 @error('password') is-invalid @enderror">
                        @error('password')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                        <input type="checkbox" name="remember" class="form-checkbox mt-3">
                        <label class="form-check-label">مرا به خاطر بسپار</label>
                        <button type="submit" class="btn btn-primary w-100 mt-3 text-dark border-0">ورود</button>
                        <a href="{{ route('register') }}" class="w-100 btn btn-success mt-3 border-0">صفحه ثبت نام</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('front.partials.footer')
@endsection
