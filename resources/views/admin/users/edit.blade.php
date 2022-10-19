@extends('admin.layout.master')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="col-4 mt-4 mx-auto d-grid">
        @csrf
        @method('PUT')

        <label class="form-label text-white">نام و نام خانوادگی</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-2">
        @error('name')
            <p class="text-danger mt-2">{{ $message }}</p>
        @enderror

        <label class="form-label text-white">موبایل</label>
        <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control mb-2">
        @error('mobile')
            <p class="text-danger mt-2">{{ $message }}</p>
        @enderror

        <label class="form-label text-white">ایمیل</label>
        <input type="text" name="email" value="{{ $user->email }}" class="form-control mb-2">
        @error('email')
            <p class="text-danger mt-2">{{ $message }}</p>
        @enderror

        <label class="form-label text-white">سطح دسترسی</label>
        <select name="role" class="form-control">
            <option value="user" @if ($user->role === 'user') selected @endif>کاربر عادی</option>
            <option value="author" @if ($user->role === 'author') selected @endif>نویسنده</option>
            <option value="admin" @if ($user->role === 'admin') selected @endif>مدیر سایت</option>
        </select>
        @error('role')
            <p class="text-danger mt-2">{{ $message }}</p>
        @enderror

        <input type="submit" value="ویرایش" class="btn btn-warning mt-3">
        <a href="{{ route('users.index') }}" class="btn btn-info mt-3">بازگشت</a>
    </form>
@endsection
