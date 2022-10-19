@extends('admin.layout.master')

@section('content')
    <div class="dynamic col-6 mx-auto text-white">
        <h2>تایید نظرات کاربران</h2>


        <form action="{{ route('comment.update', $comment->id) }}" method="post">
            @csrf
            @method('PUT')
            <select name="status" class="form-control">
                <option value="0" @if ($comment->status === 0) selected @endif>تایید نشده</option>
                <option value="1" @if ($comment->status === 1) selected @endif>تایید شده</option>
            </select>

            <input type="submit" value="ذخیره" class="btn btn-primary my-3">

        </form>



    </div>


    </div>
@endsection
