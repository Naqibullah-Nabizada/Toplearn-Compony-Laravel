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
                            <div class="col-md-12 mt-5 mt-md-4">
                                <div class="blog-item p-2">
                                    <div class="blog-item-title d-flex align-items-center justify-content-between">
                                        <h4 class="my-4 fw-bold">{{ $blogDetail->title }}</h4>
                                        <h5 class="fs-6 text-primary"><i
                                                class="fas fa-user mx-2"></i>{{ $blogDetail->user->name }}</h5>
                                    </div>
                                    <img src="{{ asset('/back/images/blog/' . $blogDetail->image) }}" class="w-100">
                                    <div class="blog-item-date border-bottom pb-2">
                                        <h5 class="mt-3 fs-6 text-primary">{{ $blogDetail->Jalali() }}</h5>
                                    </div>
                                    <p class="text-muted fs-6 pt-5 mb-4">{{ $blogDetail->desc }}</p>

                                    <p class="bg-primary p-4 rounded text-white">نظرات کاربران</p>

                                    <div class="comment-section pb-5">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="comment-item">
                                                    @foreach ($comment as $item)

                                                    <div class="row my-5">
                                                        <div class="col-2">
                                                            <div class="comment-item-img">
                                                                <img src="{{ asset('back/images/team/1662811495.webp') }}"
                                                                    class="rounded-circle img-thumbnail" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-10">
                                                            <div class="comment-item-text">
                                                                <div
                                                                    class="comment-item-text-title d-flex align-items-center justify-content-between">
                                                                    <h4 class="text-primary fs-6">{{ $item->user->name }}</h4>
                                                                    <a class="text-primary fs-6" href="">پاسخ</a>
                                                                </div>
                                                                <p class="mt-3 text-muted">{{ $item->comment }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    <div class="comment-replay bg-dark py-4 pe-4">
                                                        <div class="row">
                                                            <div class="col-sm-2">
                                                                <div class="comment-item-img">
                                                                    <img src="images/testimonial/2.webp"
                                                                        class="rounded-circle img-thumbnail" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-10">
                                                                <div class="comment-item-text">
                                                                    <div
                                                                        class="comment-item-text-title d-flex align-items-center justify-content-between">
                                                                        <h4 class="text-primary fs-6">مدیر</h4>

                                                                    </div>
                                                                    <p class="mt-3 text-white"> ایپسوم متن ساختگی با تولید
                                                                        سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                                        گرافیک استلورم ایپسوم متن ساختگی ب</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment">
                                        <form action="{{ route('comment.ajax') }}" method="POST" id="form">
                                            @csrf
                                            <div class="input-group mt-3">
                                                <div class="row w-100">
                                                    <div class="col-lg-12">
                                                        <textarea name="comment" class="form-control w-100 p-3" placeholder="پیام شما" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="blog_id" value="{{ $blogDetail->id }}">
                                            <button class="btn btn-primary px-5 mt-3">ارسال</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
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
                                            <img src="{{ asset('/back/images/project/' . $item->image) }}"
                                                class="img-thumbnail">
                                            <p class="px-3"><a href=""
                                                    class="fs-6 text-muted">{{ $item->title }}</a></p>
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

@section('js')
    <script>

        $('#form').submit(function(event) {
            event.preventDefault();

            let comment = $('textarea[name=comment]').val();
            let blog_id = $('input[name=blog_id]').val();
            let token = $('input[name=_token]').val();

            let action = $('#form').attr('action');

            $.ajax({
                url: action,
                type: 'post',
                data: {
                    comment: comment,
                    blog_id: blog_id,
                    _token: token
                },

                success: function(data) {
                    if (data == 200) {
                        $.toast({
                            heading: 'ارسال پیام',
                            text: 'پیام شما با موفقیت ارسال شد.',
                            icon: 'success',
                            position: 'top-right',
                        });
                        $('textarea[name=comment]').val('');
                    }
                }
            });
        });
    </script>
@endsection
