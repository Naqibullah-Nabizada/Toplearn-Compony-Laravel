@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم سئو سایت</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>عنوان سایت</td>
                    <th>نام سایت</td>
                    <th>کلمات کلیدی</td>
                    <th>آدرس سایت</td>
                    <th>نام توییتر</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($seos as $seo)
                    <tr>
                        <td>{{ $seo->title }}</td>
                        <td>{{ $seo->site_name }}</td>
                        <td>{{ $seo->keywords }}</td>
                        <td>{{ $seo->site_url }}</td>
                        <td>{{ $seo->twitter_name }}</td>
                        <td><a href="{{ route('seo.edit', $seo->id) }}" class="text-warning"> <i class="fa fa-edit"></i></a>
                        </td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('seo.destroy', $seo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('seo.create') }}" class="btn btn-info">تنظیم سئو</a>

        {{-- <div dir="ltr" style="margin-left: 45%">
            {{ $users->links() }}
        </div> --}}

    </div>
@endsection


@section('js')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تنظیم سئو',
                text: 'سئو با موفقیت تنظیم شد'
            })
        </script>
    @endif

    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ویرایش سئو',
                text: 'سئو با موفقیت ویرایش شد'
            })
        </script>
    @endif
@endsection
