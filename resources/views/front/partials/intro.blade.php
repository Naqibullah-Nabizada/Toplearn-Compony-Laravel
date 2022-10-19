<section class="intro py-5" style="background-image: url('{{ asset('back/images/intro/'.$intro->image) }}');">
    <div class="overlay"></div>
    <div class="container-lg py-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 mb-4 mb-md-0">
                        <div class="intro-text">
                            <h6 class="text-white">{{ $intro->description }}</h6>
                            <h1 class="mt-3">{{ $intro->title }}</h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="intro-btn">
                            <a href="{{ $intro->meetting }}" class="btn btn-primary text-dark px-5 py-3 w-75" target="_blank">قرار گذاشتن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
