@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-6 mx-auto text-white">
        <h2>تنظیم تیم ما</h2>

        {!! Form::open(['route' => 'team.store', 'method' => 'POST', 'files'=>true]) !!}

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
            {!! Form::label('instagram', 'اینستاگرام') !!}
            {!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'اینستاگرام']) !!}
            @error('instagram')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('facebook', 'فیسبوک') !!}
            {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'فیسبوک']) !!}
            @error('facebook')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('twitter', 'توییتر') !!}
            {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'توییتر']) !!}
            @error('twitter')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('linkedin', 'لینکین') !!}
            {!! Form::text('linkedin', null, ['class' => 'form-control', 'placeholder' => 'لینکین']) !!}
            @error('linkedin')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="تنظیم تیم ما" class="btn btn-success mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
