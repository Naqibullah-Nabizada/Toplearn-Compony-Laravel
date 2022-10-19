@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-8 mx-auto text-white">
        <h2>تنظیم خدمات ما</h2>

        {!! Form::model($service, ['route' => ['service.update', $service->id], 'method' => 'PUT', 'files' => true]) !!}

        <div class="form-group mb-3">
            {!! Form::label('image', 'تصویر') !!}
            <br>
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
            @error('image')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <img src="{{ asset('back/images/service/' . $service->image) }}" alt="Service" width="100">
        </div>

        <div class="form-group mb-3">
            {!! Form::label('title_one', 'عنوان اول') !!}
            {!! Form::text('title_one', null, ['class' => 'form-control', 'placeholder' => 'عنوان اول']) !!}
            @error('title_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('desc_one', 'توضیحات اول') !!}
            {!! Form::text('desc_one', null, ['class' => 'form-control', 'placeholder' => 'توضیحات اول']) !!}
            @error('desc_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('link_one', 'لینک اول') !!}
            {!! Form::text('link_one', null, ['class' => 'form-control', 'placeholder' => 'لینک اول']) !!}
            @error('link_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('title_two', 'عنوان دوم') !!}
            {!! Form::text('title_two', null, ['class' => 'form-control', 'placeholder' => 'عنوان دوم']) !!}
            @error('title_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('desc_two', 'توضیحات دوم') !!}
            {!! Form::text('desc_two', null, ['class' => 'form-control', 'placeholder' => 'توضیحات دوم']) !!}
            @error('desc_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('link_two', 'لینک دوم') !!}
            {!! Form::text('link_two', null, ['class' => 'form-control', 'placeholder' => 'لینک دوم']) !!}
            @error('link_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('title_three', 'عنوان سوم') !!}
            {!! Form::text('title_three', null, ['class' => 'form-control', 'placeholder' => 'عنوان سوم']) !!}
            @error('title_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('desc_three', 'توضیحات سوم') !!}
            {!! Form::text('desc_three', null, ['class' => 'form-control', 'placeholder' => 'توضیحات سوم']) !!}
            @error('desc_three')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('link_three', 'لینک سوم') !!}
            {!! Form::text('link_three', null, ['class' => 'form-control', 'placeholder' => 'لینک سوم']) !!}
            @error('link_three')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="تنظیم خدمات ما" class="btn btn-success mb-5">



    </div>


    {!! Form::close() !!}


    </div>
@endsection
