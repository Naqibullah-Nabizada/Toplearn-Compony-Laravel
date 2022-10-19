@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-8 mx-auto text-white">
        <h2>ساخت صفحه اصلی سایت</h2>

        {!! Form::open(['route' => 'hero.store', 'method' => 'POST', 'files'=>true]) !!}

        <div class="form-group mb-3">
            {!! Form::label('image', 'تصویر') !!}
            <br>
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
            @error('image')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('established', 'سال تاسیس') !!}
            {!! Form::text('established', null, ['class' => 'form-control', 'placeholder' => 'سال تاسیس']) !!}
            @error('established')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('description', 'توضیحات') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'توضیحات']) !!}
            @error('description')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('contact', 'تماس با ما') !!}
            {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'تماس با ما']) !!}
            @error('contact')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('question', 'سوالات متداول') !!}
            {!! Form::text('question', null, ['class' => 'form-control', 'placeholder' => 'سوالات متداول']) !!}
            @error('question')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="ساخت صفحه اصلی سایت" class="btn btn-success mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
