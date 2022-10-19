@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-6 mx-auto text-white">
        <h2>ویرایش نظرات کاربران</h2>

        {!! Form::model($testimonial, [
            'route' => ['testimonial.update', $testimonial->id],
            'method' => 'PUT',
            'files' => true,
        ]) !!}

        <div class="form-group mb-3">
            {!! Form::label('image', 'تصویر') !!}
            <br>
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
            @error('image')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <img src="{{ asset('back/images/testimonial/' . $testimonial->image) }}" width="100">
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

        <input type="submit" value="ویرایش نظرات" class="btn btn-warning mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
