@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم خدمات ما</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</td>
                    <th>عنوان اول</td>
                    <th>عنوان دوم</td>
                    <th>عنوان سوم</td>
                    <td>لینک اول</td>
                    <td>لینک دوم</td>
                    <td>لینک سوم</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($services as $service)
                    <tr>
                        <td><img src="{{ asset('back/images/service/' . $service->image) }}" alt="Service" width="100">
                        </td>
                        <td>{{ $service->title_one }}</td>
                        <td>{{ $service->title_two }}</td>
                        <td>{{ $service->title_three }}</td>
                        <td>{{ $service->link_one }}</td>
                        <td>{{ $service->link_two }}</td>
                        <td>{{ $service->link_three }}</td>
                        <td><a href="{{ route('service.edit', $service->id) }}" class="text-warning"> <i
                                    class="fa fa-edit"></i></a></td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('service.create') }}" class="btn btn-info">تنظیم خدمات ما</a>

        {{-- <div dir="ltr" style="margin-left: 45%">
            {{ $teams->links() }}
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
