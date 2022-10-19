@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>کاربران سایت</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>نام و نام خانوادگی</th>
                    <th>موبایل</td>
                    <th>ایمیل</td>
                    <th>تاریخ عضویت</td>
                    <th>نقش کاربری</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->Jalali() }}</td>
                        <td>{{ $user->change_user_role_to_farsi() }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="text-warning"> <i class="fa fa-edit"></i></a></td>
                        <td><a href="" class="text-danger"> <i class="fa fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div dir="ltr" style="margin-left: 45%">
            {{ $users->links() }}
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
