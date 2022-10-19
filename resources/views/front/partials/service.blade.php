<section class="service py-5">
    <div class="container-lg py-5">
        <div class="service-title">
            <h6 class="fs-6 fw-bold text-center text-primary">ما چیکار میکنیم</h6>
            <h1 class="text-center fw-bold mt-4">خدمات ما</h1>
        </div>
        <div class="row py-5">
            <div class="col-md-6">
                <div class="service-item bg-dark d-flex px-4 py-5 shadow-sm">
                    <div class="service-item-img">
                        <img src="{{ asset('/front/images/service/reverse-engineering.png') }}" height="80"
                            width="80" alt="">
                    </div>
                    <div class="service-item-text pe-4">
                        <h2 class="text-white fs-3 mb-3">{{ $service->title_one }}</h2>
                        <p class="text-white fs-6 mb-3">{{ $service->desc_one }}</p>
                        <a href="{{ $service->link_one }}" class="btn btn-light text-primary fs-6 fw-bold" target="_blank">بیشتر بخوانید</a>
                    </div>
                </div>
                <div class="service-item bg-primary d-flex px-4 py-5 shadow-sm mt-4">
                    <div class="service-item-img">
                        <img src="{{ asset('/front/images/service/modern-house (1).png') }}" height="80"
                            width="80" alt="">
                    </div>
                    <div class="service-item-text pe-4">
                        <h2 class="text-white fs-3 mb-3">{{ $service->title_two }}</h2>
                        <p class="text-white fs-6 mb-3">{{ $service->desc_two }}</p>
                        <a href="{{ $service->link_two }}" class="btn btn-light text-primary fs-6 fw-bold" target="_blank">بیشتر بخوانید</a>
                    </div>
                </div>
                <div class="service-item bg-light d-flex px-4 py-5 shadow-sm mt-4">
                    <div class="service-item-img">
                        <img src="{{ asset('/front/images/service/engineer.png') }}" height="80" width="80"
                            alt="">
                    </div>
                    <div class="service-item-text pe-4">
                        <h2 class="text-dark fs-3 mb-3">{{ $service->title_three }}</h2>
                        <p class="text-dark fs-6 mb-3">{{ $service->desc_three }}</p>
                        <a href="{{ $service->link_three }}" class="btn btn-light text-primary fs-6 fw-bold" target="_blank">بیشتر بخوانید</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4 mt-md-0">
                <div class="service-img w-100"
                    style="background-image: url('{{ asset('/back/images/service/'.$service->image) }}');"></div>
            </div>
        </div>
    </div>
</section>
