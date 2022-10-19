@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>ساخت صفحه اصلی سایت</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</td>
                    <th>سال تاسیس</td>
                    <th>توضیحات</td>
                    <th>تماس با ما</td>
                    <th>سوالات متداول</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($hero as $item)
                    <tr>
                        <td><img src="{{ asset('back/images/hero/'.$item->image) }}" alt="Hero" width="100"></td>
                        <td>{{ $item->established }}</td>
                        <td>{{ Str::limit($item->description, 50) }}</td>
                        <td>{{ $item->contact }}</td>
                        <td>{{ $item->question }}</td>
                        <td><a href="{{ route('hero.edit', $item->id) }}" class="text-warning"> <i
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

        <a href="{{ route('hero.create') }}" class="btn btn-info">ساخت صفحه اصلی سایت</a>

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
