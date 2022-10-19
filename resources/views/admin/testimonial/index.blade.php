@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>نظرات کاربران</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر مشتری</td>
                    <th>نام مشتری</td>
                    <th>شغل مشتری</td>
                    <th>نظر مشتری</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($testimonial as $item)
                    <tr>
                        <td><img src="{{ asset('back/images/testimonial/' . $item->image) }}" width="60"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->job }}</td>
                        <td>{{ Str::limit($item->comment, 30) }}</td>
                        <td><a href="{{ route('testimonial.edit', $item->id) }}" class="text-warning"> <i
                                    class="fa fa-edit"></i></a></td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('testimonial.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('testimonial.create') }}" class="btn btn-info">نظرات مشتریان</a>

        <div dir="ltr" style="margin-left: 45%">
            {{ $testimonial->links() }}
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
ز
