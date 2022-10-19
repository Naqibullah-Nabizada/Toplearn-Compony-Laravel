@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم درباره ما</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</td>
                    <th>عنوان</td>
                    <th>عنوان فرعی</td>
                    <th>توضیحات</td>
                    <th>خدمات</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($about as $item)
                    <tr>
                        <td><img src="{{ asset('back/images/about/' . $item->image) }}" alt="Hero" width="100"></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->subtitle, 25) }}</td>
                        <td>{{ Str::limit($item->description, 25) }}</td>
                        <td>{{ $item->helper }}</td>
                        <td><a href="{{ route('about.edit', $item->id) }}" class="text-warning"> <i class="fa fa-edit"></i></a>
                        </td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('about.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('about.create') }}" class="btn btn-info">تنظیم درباره ما</a>

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
