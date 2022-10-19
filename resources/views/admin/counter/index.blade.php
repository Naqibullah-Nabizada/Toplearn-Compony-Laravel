@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم شمارنده</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</td>
                    <th>عنوان</td>
                    <th>توضیحات</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($counter as $item)
                    <tr>
                        <td><img src="{{ asset('back/images/counter/'.$item->image) }}" alt="Hero" width="60"></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->description, 50) }}</td>
                        <td><a href="{{ route('counter.edit', $item->id) }}" class="text-warning"> <i
                                    class="fa fa-edit"></i></a></td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('counter.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('counter.create') }}" class="btn btn-info">تنظیم شمارنده</a>

        <div dir="ltr" style="margin-left: 45%">
            {{ $counter->links() }}
        </div>

    </div>
@endsection


@section('js')
    @if (Session::has('update'))
        <script>
            alert('کاربر با موفقیت ویرایش شد');
        </script>
    @endif
@endsection
