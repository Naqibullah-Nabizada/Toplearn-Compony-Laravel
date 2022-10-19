@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-6 mx-auto text-white">
        <h2>ویرایش سوالات متداول</h2>

        {!! Form::model($faq,['route' => ['faq.update', $faq->id], 'method' => 'PUT']) !!}

        <div class="form-group mb-3">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'عنوان']) !!}
            @error('title')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('desc', 'توضیحات') !!}
            {!! Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'توضیحات']) !!}
            @error('desc')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('faq_one', 'سوال اول') !!}
            {!! Form::text('faq_one', null, ['class' => 'form-control', 'placeholder' => 'سوال اول']) !!}
            @error('faq_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('faq_desc_one', 'توضیحات سوال اول') !!}
            {!! Form::textarea('faq_desc_one', null, ['class' => 'form-control', 'placeholder' => 'توضیحات سوال اول']) !!}
            @error('faq_desc_one')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('faq_two', 'سوال دوم') !!}
            {!! Form::text('faq_two', null, ['class' => 'form-control', 'placeholder' => 'سوال دوم']) !!}
            @error('faq_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('faq_desc_two', 'توضیحات سوال دوم') !!}
            {!! Form::textarea('faq_desc_two', null, ['class' => 'form-control', 'placeholder' => 'توضیحات سوال دوم']) !!}
            @error('faq_desc_two')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('faq_three', 'سوال سوم') !!}
            {!! Form::text('faq_three', null, ['class' => 'form-control', 'placeholder' => 'سوال سوم']) !!}
            @error('faq_three')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            {!! Form::label('faq_desc_three', 'توضیحات سوال سوم') !!}
            {!! Form::textarea('faq_desc_three', null, ['class' => 'form-control', 'placeholder' => 'توضیحات سوال سوم']) !!}
            @error('faq_desc_three')
                <p class="text-danger my-2">{{ $message }}</p>
            @enderror
        </div>


        <input type="submit" value="ویرایش سوالات متداول" class="btn btn-warning mb-5">


    </div>


    {!! Form::close() !!}


    </div>
@endsection
