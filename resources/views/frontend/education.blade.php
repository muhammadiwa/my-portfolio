<section id="resume" class="section-education">
    <div class="container">
        <div class="row">
            <!-- Education Section -->
            <div class="col-lg-6 pt-3">
                <div class="rounded-3 border border-1 position-relative h-100 overflow-hidden">
                    <div class="box-linear-animation p-md-6 p-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28"
                                fill="none">
                                <path class="fill-primary-2"
                                    d="M0 22.667V4.66699C0 2.45786 1.79087 0.666992 4 0.666992H22.6667C23.4031 0.666992 24 1.26395 24 2.00033V26.0003C24 26.7367 23.4031 27.3337 22.6667 27.3337H4.66667C2.08933 27.3337 0 25.2443 0 22.667ZM21.3333 24.667V20.667H4.66667C3.56209 20.667 2.66667 21.5625 2.66667 22.667C2.66667 23.7715 3.56209 24.667 4.66667 24.667H21.3333ZM9.33333 3.33366H4C3.26363 3.33366 2.66667 3.93062 2.66667 4.66699V18.4494C3.27284 18.1614 3.95093 18.0003 4.66667 18.0003H21.3333V3.33366H18.6667V14.0003L14 11.3337L9.33333 14.0003V3.33366Z"
                                    fill="#62A92B" />
                            </svg>
                            <h2 class="mb-0 ms-2">Education</h2>
                        </div>
                        <div class="d-flex flex-column h-100 position-relative mt-5">
                            <ul class="ps-3">
                                @foreach($educations as $education)
                                    <li class="position-relative z-1 mb-3">
                                        <div class="d-flex gap-2">
                                            <p class="text-300 text-nowrap fw-regular mb-0">
                                                {{ $education->start_year }} - {{ $education->end_year }}:
                                            </p>
                                            <div>
                                                <span class="text-primary-2">{{ $education->title }}</span>
                                                <p class="text-dark">{{ $education->description }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="line-left position-absolute top-0 border-start z-0"></div>
                        </div>
                        <div class="bg-overlay position-absolute bottom-0 start-0 z-1"></div>
                    </div>
                </div>
            </div>
            <!-- Experience Section -->
            <div class="col-lg-6 pt-3">
                <div class="bg-3 rounded-3 border border-1 p-md-6 p-3 position-relative h-100 overflow-hidden">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                            <!-- Badan koper -->
                            <rect x="2" y="10" width="20" height="11" rx="2" stroke="#62A92B" stroke-width="2" fill="none"/>
                            <!-- Gagang koper -->
                            <rect x="7" y="3" width="10" height="5" rx="1" stroke="#62A92B" stroke-width="2" fill="none"/>
                            <!-- Garis pembatas antara badan dan kantong koper -->
                            <line x1="2" y1="10" x2="22" y2="10" stroke="#62A92B" stroke-width="2"/>
                        </svg>
                        <h2 class="mb-0 ms-2">Experience</h2>
                    </div>
                    <div class="d-flex flex-column h-100 position-relative mt-5">
                        <ul class="ps-3">
                            @foreach($experiences as $experience)
                                <li class="position-relative z-1 mb-3">
                                    <div class="d-flex gap-2">
                                        <p class="text-300 text-nowrap fw-regular mb-0">
                                            {{ $experience->start_year }} - {{ $experience->end_year }}:
                                        </p>
                                        <div>
                                            <span class="text-primary-2">{{ $experience->title }}</span>
                                            <p class="text-dark">{{ $experience->description }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="line-left position-absolute top-0 border-start z-0"></div>
                    </div>
                    <div class="bg-overlay position-absolute bottom-0 start-0 z-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>
