@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-6 mx-auto text-white">
        <h2>نظرات کاربران</h2>

        {!! Form::open(['route' => 'testimonial.store', 'method' => 'POST', 'files'=>true]) !!}

        <div class="form-group mb-3">
            {!! Form::label('image', 'تصویر') !!}
            <br>
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
            @error('image')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('name', 'نام') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'نام']) !!}
            @error('name')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('job', 'شغل') !!}
            {!! Form::text('job', null, ['class' => 'form-control', 'placeholder' => 'شغل']) !!}
            @error('job')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('comment', 'نظر') !!}
            {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'نظر']) !!}
            @error('comment')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="نظرات کاربران" class="btn btn-success mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
