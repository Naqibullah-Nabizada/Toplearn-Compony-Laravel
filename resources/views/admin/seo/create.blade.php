@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-8 mx-auto text-white">
        <h2>ساخت سئو سایت</h2>

        {!! Form::open(['route' => 'seo.store', 'method' => 'POST']) !!}

        <div class="form-group mb-3">
            {!! Form::label('title', 'عنوان سایت') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'عنوان سایت']) !!}
            @error('title')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>


        <div class="form-group mb-3">
            {!! Form::label('keywords', 'کلمات کلیدی') !!}
            {!! Form::textarea('keywords', null, ['class' => 'form-control', 'placeholder' => 'کلمات کلیدی']) !!}
            @error('keywords')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('description', 'درباره سایت') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'درباره سایت']) !!}
            @error('description')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('site_name', 'نام سایت') !!}
            {!! Form::text('site_name', null, ['class' => 'form-control', 'placeholder' => 'نام سایت']) !!}
            @error('site_name')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('site_url', 'آدرس سایت') !!}
            {!! Form::text('site_url', null, ['class' => 'form-control', 'placeholder' => 'آدرس سایت']) !!}
            @error('site_url')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('twitter_name', 'نام توییتر') !!}
            {!! Form::text('twitter_name', null, ['class' => 'form-control', 'placeholder' => 'نام توییتر']) !!}
            @error('twitter_name')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('twitter_description', 'درباره توییتر شما') !!}
            {!! Form::textarea('twitter_description', null, [
                'class' => 'form-control',
                'placeholder' => 'در باره توییتر شما',
            ]) !!}
            @error('twitter_description')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="ساخت سئو" class="btn btn-success">

        {!! Form::close() !!}


    </div>
@endsection
