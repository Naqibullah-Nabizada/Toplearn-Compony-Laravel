@extends('admin.layout.master')

@section('content')
    <div class="dynamic">
        <h2>تنظیم پروژه ها</h2>
        <table class="mb-3">
            <tbody>
                <tr>
                    <th>تصویر</td>
                    <th>عنوان</td>
                    <th>توضیحات</td>
                    <th>ویرایش</td>
                    <th>حذف</td>
                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td><img src="{{ asset('back/images/project/'.$project->image) }}" alt="Hero" width="80"></td>
                        <td>{{ $project->title }}</td>
                        <td>{{ Str::limit($project->description, 50) }}</td>
                        <td><a href="{{ route('project.edit', $project->id) }}" class="text-warning"> <i
                                    class="fa fa-edit"></i></a></td>
                        <td style="cursor: pointer">
                            <i class="fa fa-trash text-danger"></i>
                            <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('project.create') }}" class="btn btn-info">تنظیم پروژه ها</a>

        <div dir="ltr" style="margin-left: 45%">
            {{ $projects->links() }}
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
ز
