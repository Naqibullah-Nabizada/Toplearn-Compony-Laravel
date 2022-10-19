<section class="about">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6  mt-5 mt-md-0">
                <div class="about-content">
                    <h5 class="text-primary">{{ $about->title }}</h5>
                    <h1 class="fs-2 py-2 text-dark">{{ $about->subtitle }}</h1>
                    <p class="text-muted py-4">{{ $about->description }}</p>
                    <h2 class="fs-3 mb-5 text-dark">{{ $about->helper }}</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services d-flex">
                                <div class="services-img w-25 p-1">
                                    <img src="{{ asset('/front/images/about/building.png') }}" class="w-100"
                                        alt="">
                                </div>
                                <div class="services-text w-75 px-3 py-2">
                                    <h3 class="fs-5 mb-4">{{ $about->service_title_one }}</h3>
                                    <p class="text-muted">{{ $about->service_desc_one }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex">
                                <div class="services-img w-25 p-1">
                                    <img src="{{ asset('/front/images/about/floor-plan.png') }}" class="w-100"
                                        alt="">
                                </div>
                                <div class="services-text w-75 px-3 py-2">
                                    <h3 class="fs-5 mb-4">{{ $about->service_title_two }}</h3>
                                    <p class="text-muted">{{ $about->service_desc_two }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex">
                                <div class="services-img w-25 p-1">
                                    <img src="{{ asset('/front/images/about/consult.png') }}" class="w-100"
                                        alt="">
                                </div>
                                <div class="services-text w-75 px-3 py-2">
                                    <h3 class="fs-5 mb-4">{{ $about->service_title_three }}</h3>
                                    <p class="text-muted">{{ $about->service_desc_three }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex">
                                <div class="services-img w-25 p-1">
                                    <img src="{{ asset('/front/images/about/reverse-engineering.png') }}"
                                        class="w-100" alt="">
                                </div>
                                <div class="services-text w-75 px-3 py-2">
                                    <h3 class="fs-5 mb-4">{{ $about->service_title_four }}</h3>
                                    <p class="text-muted">{{ $about->service_desc_four }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-5 mt-md-0">
                <div class="about-img w-100" style="background-image: url('{{ asset('/back/images/about/'.$about->image) }}');">
                    <div class="counter-wrap d-flex py-3 px-3 align-items-center">
                        <div class="icon">
                            <img src="{{ asset('/front/images/about/engineer.png') }}" alt="">
                        </div>
                        <div class="text d-flex flex-column px-3">
                            <span class="number text-primary fw-bold fs-3">{{ $about->experience_title_one }}</span>
                            <span class="caption fw-bold fs-5 text-white">{{ $about->experience_desc_one }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
