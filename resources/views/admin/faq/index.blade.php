@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم سوالات متداول</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>سوال اول</th>
                    <th>جواب اول</th>
                    <th>سوال دوم</th>
                    <th>جواب دوم</th>
                    <th>سوال سوم</th>
                    <th>جواب سوم</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                @foreach ($faq as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->desc, 50) }}</td>
                        <td>{{ $item->faq_one }}</td>
                        <td>{{ Str::limit($item->faq_desc_one, 50) }}</td>
                        <td>{{ $item->faq_two }}</td>
                        <td>{{ Str::limit($item->faq_desc_two, 50) }}</td>
                        <td>{{ $item->faq_three }}</td>
                        <td>{{ Str::limit($item->faq_desc_three, 50) }}</td>
                        <td><a href="{{ route('faq.edit', $item->id) }}" class="text-warning"> <i class="fa fa-edit"></i></a>
                        </td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('faq.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('faq.create') }}" class="btn btn-info">تنظیم سوالات متداول</a>

        {{-- <div dir="ltr" style="margin-left: 45%">
            {{ $blogs->links() }}
        </div> --}}

    </div>
@endsection


@section('js')
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ویرایش سوالات متداول',
                text: 'سوالات متداول با موفقیت ویرایش شد',
            });
        </script>
    @endif
@endsection
ز
