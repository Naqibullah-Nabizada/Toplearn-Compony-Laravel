@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>پیام کاربران</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>عنوان</th>
                    <th>پیام</th>
                    <th>حذف</th>
                </tr>
                @foreach ($contact as $item)
                    <tr>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->description }}</td>
                        </td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('blog.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <div dir="ltr" style="margin-left: 45%">
            {{ $contact->links() }}
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
