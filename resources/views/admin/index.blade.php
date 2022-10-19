@extends('admin.layout.master')

@section('content')

    <div class="old-project">
        <h2>آخرین پروژه های انجام شده</h2>
        <table>
            <tbody>
                <tr>
                    <th>کارفرما</th>
                    <th>نوع پروژه</td>
                    <th>کشور</td>
                </tr>
                <tr>
                    <td>شرکت جهان گستر</td>
                    <td>شرکتی</td>
                    <td>ایران</td>
                </tr>
                <tr>
                    <td>پناه جویان</td>
                    <td>شرکتی</td>
                    <td>ایران</td>
                </tr>
                <tr>
                    <td>طلافروشی</td>
                    <td>فروشگاهی</td>
                    <td>ایران</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
