@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>ساخت صفحه اصلی سایت</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</td>
                    <th>عنوان</td>
                    <th>توضیحات</td>
                    <th>قرار گذاشتن</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($intro as $item)
                    <tr>
                        <td><img src="{{ asset('back/images/intro/'.$item->image) }}" alt="Intro" width="100"></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->description, 50) }}</td>
                        <td>{{ $item->meetting }}</td>
                        <td><a href="{{ route('intro.edit', $item->id) }}" class="text-warning"> <i
                                    class="fa fa-edit"></i></a></td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('seo.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('intro.create') }}" class="btn btn-info">تنظیم مقدمه</a>

        {{-- <div dir="ltr" style="margin-left: 45%">
            {{ $users->links() }}
        </div> --}}

    </div>
@endsection


@section('js')
    @if (Session::has('update'))
        <script>
            alert('کاربر با موفقیت ویرایش شد');
        </script>
    @endif
@endsection
