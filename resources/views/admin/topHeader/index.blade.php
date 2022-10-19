@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم منوی بالای سایت</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>ایمیل</td>
                    <th>موبایل</td>
                    <th>اینستاگرام</td>
                    <th>فیسبوک</td>
                    <th>توییتر</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($topHeader as $item)
                    <tr>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->instagram }}</td>
                        <td>{{ $item->facebook }}</td>
                        <td>{{ $item->twitter }}</td>
                        <td><a href="{{ route('topheader.edit', $item->id) }}" class="text-warning"> <i
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

        <a href="{{ route('topheader.create') }}" class="btn btn-info">ساخت منوی بالای سایت</a>

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
                title: 'تنظیم منوی بالایی',
                text: 'منوی بالایی با موفقیت تنظیم شد'
            })
        </script>
    @endif

    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ویرایش منوی بالایی',
                text: 'منوی بالای با موفقیت ویرایش شد'
            })
        </script>
    @endif
@endsection
