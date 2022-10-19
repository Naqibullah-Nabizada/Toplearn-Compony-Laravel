@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-6 mx-auto text-white">
        <h2>تنظیم بلاگ</h2>

        {!! Form::model($blog,['route' => ['blog.update', $blog->id], 'method' => 'PUT', 'files'=>true]) !!}

        <div class="form-group mb-3">
            {!! Form::label('image', 'تصویر') !!}
            <br>
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
            @error('image')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <img src="{{ asset('back/images/blog/'.$blog->image) }}" width="100">
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
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'توضیحات']) !!}
            @error('description')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>


        <input type="submit" value="ویرایش بلاگ" class="btn btn-warning mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
