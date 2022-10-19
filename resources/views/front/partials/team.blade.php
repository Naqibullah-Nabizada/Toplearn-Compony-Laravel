<section class="team py-5">
    <div class="container py-5">
        <div class="team-title">
            <h6 class="fs-6 fw-bold text-center text-primary">تیم و کارکنان</h6>
            <h1 class="text-center fw-bold mt-4">مهندسین و کارکنان ما</h1>
        </div>

        <div class="row mt-5">
            @foreach ($teams as $team)
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="team-item">
                        <div class="team-item-img"
                            style="background-image: url('{{ asset('/back/images/team/'. $team->image) }}');">
                            <ul>
                                <li><a href="{{ $team->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $team->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="{{ $team->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $team->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-item-text py-3 px-3">
                            <h4 class="text-center fs-5 fw-bold">{{ $team->name }}</h4>
                            <h6 class="text-muted text-center fs-6 fw-bold">{{ $team->job }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
