<section id="about" class="section-hero-2 position-relative pt-130 pb-3">
    <div class="container hero-2">
        <div class="border border-1 rounded-3">
            <div class="box-linear-animation position-relative z-1">
                <div class="row align-items-end py-60">
                    <div class="col-lg-5 ps-lg-5 text-lg-start text-center">
                        <div class="position-relative mb-lg-0 mb-5">
                            <img src="{{ Storage::url($about->image) }}" alt="{{ $about->name }}" class="img-fluid" />
                            <!-- <img src="{{ asset('assets/imgs/home-page-2/hero-1/people.png') }}" alt="zelio" /> -->
                            <div class="position-absolute end-0 top-100 translate-middle-y icon-decorate">
                                <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon.svg') }}" alt="zelio" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-lg-auto col-md-12">
                        <div class="p-lg-0 p-md-8 p-3">
                            <div class="text-secondary-2 d-flex align-items-center">
                                &lt;span&gt;
                                <div class="text-dark">
                                    <div class="typewriter">
                                        <h1 class="fs-6 fw-medium">Hey, I’m {{ $about->name }}</h1>
                                    </div>
                                </div>
                                &lt;/span&gt;
                            </div>
                            <h1 class="fs-50 my-3">{!! $about->title !!}</h1>
                            <p class="mb-6 text-secondary-2">&lt;p&gt;<span class="text-dark">{!! $about->description !!}</span>&lt;/p&gt;</p>
                            <div class="row">
                                <div class="col-7">
                                    <!-- Carausel Scroll -->
                                    <div class="carouselTicker carouselTicker-left position-relative z-1 mt-lg-0 mt-8">
                                        <ul class="carouselTicker__list">
                                            @if($about->thumbnail && is_array($about->thumbnail))
                                                @foreach($about->thumbnail as $thumb)
                                                    <li class="carouselTicker__item">
                                                        <a href="#" class="brand-logo icon_60 icon-shape rounded-3">
                                                            <img src="{{ Storage::url($thumb['image']) }}" alt="thumbnail" />
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-5 d-flex align-items-end">
                                    <span class="fs-6 text-300 mb-2">...and more</span>
                                </div>
                            </div>
                            <a href="{{ $about->resume ? Storage::url($about->resume) : '#' }}" class="btn me-2 text-300 ps-0 mt-4"
                                target="_blank">
                                <i class="ri-download-line text-primary-2"></i>
                                [ Download my CV ]
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background position-absolute top-0 start-0 w-100 h-100">
        <img class="bg-w" src="{{ asset('assets/imgs/home-page-2/hero-1/bg.png') }}" alt="zelio" />
        <img class="bg-d" src="{{ asset('assets/imgs/home-page-2/hero-1/bg-dark.png') }}" alt="zelio" />
    </div>
</section>
