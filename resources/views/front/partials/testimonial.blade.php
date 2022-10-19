<section class="testimonial py-5">
    <div class="testimonial-title">
        <h6 class="fs-6 fw-bold text-center text-primary">نظرات مشتریان</h6>
        <h1 class="text-center fw-bold mt-4">مشتریان خوشحال</h1>
    </div>
    <div class="container-lg">
        <div class="row py-5 justify-content-center">
            <div class="col-lg-8 col-md-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="bg-primary active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-primary"
                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-primary"
                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner pb-5">

                        @foreach ($testimonial as $item)
                            <div class="slider-item bg-white p-4 carousel-item @if ($loop->first) active @endif">
                                <div class="slider-item-info d-flex align-items-center">
                                    <img src="{{ asset('back/images/testimonial/' . $item->image) }}"
                                        class="img-fluid rounded-circle px-3">
                                    <div class="information">
                                        <h3 class="fs-5 fw-bold">{{ $item->name }}</h3>
                                        <h4 class="fs-6 text-primary mt-2">{{ $item->job }}</h4>
                                    </div>
                                </div>
                                <div class="slider-item-descritpion">
                                    <p class="text-muted mt-5  fs-6">{{ $item->comment }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
