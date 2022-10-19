@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>نظرات کاربران</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>پیام</th>
                    <th>نام</th>
                    <th>نام بلاگ</th>
                    <th>تایید</th>
                    <th>حذف</th>
                </tr>
                @foreach ($comment as $item)
                    <tr>
                        <td>{{ $item->comment }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->blog->title }}</td>
                        <td>
                            <a href="{{ route('comment.edit', $item->id) }}" class="text-decoration-none">
                                @if ($item->status === 0)
                                    <span class="text-warning">تایید نشده</span>
                                @else
                                    <span class="text-white">تایید شده</span>
                                @endif
                            </a>
                        </td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('comment.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('comment.destroy', $item->id) }}"></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <div dir="ltr" style="margin-left: 45%">
            {{ $comment->links() }}
        </div>

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
