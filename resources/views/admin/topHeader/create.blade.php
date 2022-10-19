@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-8 mx-auto text-white">
        <h2>ساخت منوی بالایی سایت</h2>

        {!! Form::open(['route' => 'topheader.store', 'method' => 'POST']) !!}

        <div class="form-group mb-3">
            {!! Form::label('email', 'ایمیل') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'ایمیل']) !!}
            @error('email')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('mobile', 'موبایل') !!}
            {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'موبایل']) !!}
            @error('mobile')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('instagram', 'آدرس اینستاگرام') !!}
            {!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'آدرس اینستاگرام']) !!}
            @error('instagram')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('facebook', 'آدرس فیسبوک') !!}
            {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'آدرس فیسبوک']) !!}
            @error('facebook')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('twitter', 'آدرس توییتر') !!}
            {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'آدرس توییتر']) !!}
            @error('twitter')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="ساخت منوی بالایی سایت" class="btn btn-success mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
