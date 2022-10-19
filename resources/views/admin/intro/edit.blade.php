@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-8 mx-auto text-white">
        <h2>ویرایش مقدمه</h2>

        {!! Form::model($intro, ['route' => ['intro.update', $intro->id], 'method' => 'PUT', 'files' => true]) !!}

        <div class="form-group mb-3">
            {!! Form::label('image', 'تصویر') !!}
            <br>
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
            @error('image')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <img src="{{ asset('back/images/intro/' . $intro->image) }}" alt="Intro" width="100">
        </div>

        <div class="form-group mb-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'عنوان']) !!}
            @error('title')
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
            {!! Form::label('meetting', 'تماس با ما') !!}
            {!! Form::text('meetting', null, ['class' => 'form-control', 'placeholder' => 'تماس با ما']) !!}
            @error('meetting')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="ویرایش مقدمه" class="btn btn-warning mb-5">



    </div>


    {!! Form::close() !!}


    </div>
@endsection
