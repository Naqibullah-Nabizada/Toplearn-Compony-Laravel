@extends('front.layouts.master')

@section('content')
    @include('front.partials.topHeader')
    @include('front.partials.header')

    <main class="detail-website py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main-detail">
                        <div class="row">

                            @foreach ($blog as $item)
                                <div class="col-md-6 mt-5 mt-md-4">
                                    <div class="blog-item p-2 bg-white">
                                        <img src="{{ asset('/back/images/blog/' . $item->image) }}" class="w-100 mb-2 img-fluid"
                                            alt="">
                                        <a href="{{ route('blogDetail', $item->id) }}" class="fw-bold text-dark">{{ $item->title }}</a>
                                        <p class="fs-6 text-muted my-3 px-2" style="text-align: justify !important">
                                            {{ Str::limit($item->description, 245, '...') }}</p>
                                        <a href="{{ route('blogDetail', $item->id) }}">ادامه ...</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </main>
                </div>
                <div class="col-lg-4 mt-5 mt-md-4">
                    <aside class="sidebar p-4 bg-white">
                        <div class="row">

                            <div class="col-12">

                                <div class="sidebar-item-title">
                                    <h6 class="mb-4">آخرین پروژه ها</h6>
                                </div>

                                @foreach ($project as $item)
                                    <div class="sidebar-item pt-3">
                                        <div class="sidebar-item-text d-flex align-items-center">
                                            <img src="{{ asset('/back/images/project/'.$item->image) }}" class="img-thumbnail"
                                                alt="">
                                            <p class="px-3"><a href="" class="fs-6 text-muted">{{ $item->title }}</a></p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>

    @include('front.partials.footer')
@endsection
