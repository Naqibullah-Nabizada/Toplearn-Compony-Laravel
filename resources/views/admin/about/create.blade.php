@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-6 mx-auto text-white">
        <h2>تنظیم درباره ما</h2>

        {!! Form::open(['route' => 'about.store', 'method' => 'POST', 'files' => true]) !!}

        <div class="form-group mb-3">
            {!! Form::label('image', 'تصویر') !!}
            <br>
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
            @error('image')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'عنوان']) !!}
            @error('title')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('subtitle', 'عنوان دوم') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'عنوان دوم']) !!}
            @error('subtitle')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('description', 'توضیحات') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'توضیحات']) !!}
            @error('description')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('helper', 'خدمت') !!}
            {!! Form::text('helper', null, ['class' => 'form-control', 'placeholder' => 'خدمت']) !!}
            @error('helper')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_title_one', 'عنوان خدمت اول') !!}
            {!! Form::text('service_title_one', null, ['class' => 'form-control', 'placeholder' => 'عنوان خدمت اول']) !!}
            @error('service_title_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_desc_one', 'توضیحات خدمت اول') !!}
            {!! Form::text('service_desc_one', null, ['class' => 'form-control', 'placeholder' => 'توضیحات خدمت اول']) !!}
            @error('service_desc_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_title_two', 'عنوان خدمت دوم') !!}
            {!! Form::text('service_title_two', null, ['class' => 'form-control', 'placeholder' => 'عنوان خدمت دوم']) !!}
            @error('service_title_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_desc_two', 'توضیحات خدمت دوم') !!}
            {!! Form::text('service_desc_two', null, ['class' => 'form-control', 'placeholder' => 'توضیحات خدمت دوم']) !!}
            @error('service_desc_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_title_three', 'عنوان خدمت سوم') !!}
            {!! Form::text('service_title_three', null, ['class' => 'form-control', 'placeholder' => 'عنوان خدمت سوم']) !!}
            @error('service_title_three')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_desc_three', 'توضیحات خدمت سوم') !!}
            {!! Form::text('service_desc_three', null, ['class' => 'form-control', 'placeholder' => 'توضیحات خدمت سوم']) !!}
            @error('service_desc_three')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_title_four', 'عنوان خدمت چهارم') !!}
            {!! Form::text('service_title_four', null, ['class' => 'form-control', 'placeholder' => 'عنوان خدمت چهارم']) !!}
            @error('service_title_four')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('service_desc_four', 'توضیحات خدمت چهارم') !!}
            {!! Form::text('service_desc_four', null, ['class' => 'form-control', 'placeholder' => 'توضیحات خدمت چهارم']) !!}
            @error('service_desc_four')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('experience_title_one', 'عنوان تجربه') !!}
            {!! Form::text('experience_title_one', null, ['class' => 'form-control', 'placeholder' => 'عنوان تجربه']) !!}
            @error('experience_title_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('experience_desc_one', 'توضیحات تجربه') !!}
            {!! Form::text('experience_desc_one', null, ['class' => 'form-control', 'placeholder' => 'توضیحات تجربه']) !!}
            @error('experience_desc_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="تنظیم درباره سایت" class="btn btn-success mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
