<section id="services" class="section-service-2 pt-5">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1 p-lg-5 p-1 p-md-4">
                <div class="position-relative z-1">
                    <div class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6"
                                viewBox="0 0 5 6" fill="none">
                                <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                            </svg>
                            <span class="text-linear-4 d-flex align-items-center"> Cooperation </span>
                        </div>
                        <h3>
                            Designing solutions
                            <span class="text-300">
                                customized<br />
                                to meet your requirements
                            </span>
                        </h3>
                    </div>
                    <div class="container mt-5">
                        <div class="row g-4">
                            @foreach($services as $service)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-servies-2 rounded-2 h-100 hover-up">
                                        {!! $service->icon !!}
                                        <h6 class="my-3 fw-medium">{{ $service->title }}</h6>
                                        <p class="fs-7 text-300 fw-regular">{!! $service->description !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center pt-60">
                            <p class="text-300">
                                Excited to take on <span class="text-dark">new projects</span> and collaborate. <br />
                                Let's chat about your ideas. <a href="#" class="text-primary-2">Reach out!</a>
                            </p>
                        </div>
                    </div>
                </div>
                <img class="position-absolute top-0 start-0 z-0"
                    src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="zelio" />
            </div>
        </div>
    </div>
</section>
