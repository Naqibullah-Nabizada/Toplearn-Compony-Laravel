<section class="counter-section py-5" style="background-image: url('{{ asset('/front/images/counter.png') }}');">
    <div class="overlay"></div>
    <div class="container-lg py-5">
        <div class="row">
            @foreach ($counter as $item)
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="counter-item d-flex align-items-center justify-content-sm-center">
                        <div class="counter-img w-25 ps-3">
                            <img src="{{ asset('/back/images/counter', $item->image) }}" class="w-100" alt="">
                        </div>
                        <div class="counter-text">
                            <span class="counter text-primary fs-1 fw-bold">{{ $item->title }}</span>
                            <div class="counter-text-name fs-6 text-white">{{ $item->description }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
