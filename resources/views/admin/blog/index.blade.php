@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم بلاگ ها</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>نویسنده</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                @foreach ($blogs as $blog)
                    <tr>
                        <td><img src="{{ asset('back/images/blog/' . $blog->image) }}" width="80"></td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ Str::limit($blog->description, 50) }}</td>
                        <td>{{ $blog->user->name }}</td>
                        <td><a href="{{ route('blog.edit', $blog->id) }}" class="text-warning"> <i class="fa fa-edit"></i></a>
                        </td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('blog.create') }}" class="btn btn-info">تنظیم بلاگ ها</a>

        {{-- <div dir="ltr" style="margin-left: 45%">
            {{ $blogs->links() }}
        </div> --}}

    </div>
@endsection


@section('js')
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ویرایش بلاگ',
                text: 'بلاگ با موفقیت ویرایش شد',
            });
        </script>
    @endif
@endsection
ز
