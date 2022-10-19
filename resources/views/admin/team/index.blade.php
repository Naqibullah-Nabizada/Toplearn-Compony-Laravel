@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم تیم ما</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</td>
                    <td>نام</td>
                    <td>شغل</td>
                    <td>اینستاگرام</td>
                    <td>فیسبوک</td>
                    <td>توییتر</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($teams as $team)
                    <tr>
                        <td><img src="{{ asset('/back/images/team/' . $team->image) }}" alt="Team" width="70"></td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->job }}</td>
                        <td>{{ $team->instagram }}</td>
                        <td>{{ $team->facebook }}</td>
                        <td>{{ $team->twitter }}</td>
                        <td><a href="{{ route('team.edit', $team->id) }}" class="text-warning"> <i class="fa fa-edit"></i></a>
                        </td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('team.create') }}" class="btn btn-info">تنظیم تیم ما</a>

        <div dir="ltr" style="margin-left: 45%">
            {{ $teams->links() }}
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
