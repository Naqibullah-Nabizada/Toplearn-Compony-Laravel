@extends('front.layouts.master')

@section('content')
    @include('front.partials.topHeader')
    @include('front.partials.header')
    <div class="auth">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center mb-5 fw-bold">ثبت نام کنید</h3>
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="نام ونام خانوادگی"
                            class="form-control mt-3 @error('name') is-invalid @enderror">
                        @error('name')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                        <input type="text" name="mobile" placeholder="شماره موبایل"
                            class="form-control mt-3 @error('mobile') is-invalid @enderror">
                        @error('mobile')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
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
                        <input type="password" name="password_confirmation" placeholder="تکرار رمز عبور"
                            class="form-control mt-3">
                        <button type="submit" class="btn btn-primary w-100 mt-3 text-dark border-0">ثبت نام</button>
                        <a href="{{ route('login') }}" class="w-100 btn btn-success mt-3 border-0">صفحه ورود</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('front.partials.footer')
@endsection
