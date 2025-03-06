<section id="contact" class="section-contact-2 position-relative pt-60 pb-60 overflow-hidden">
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-7 pb-5 pb-lg-0">
                <div class="position-relative">
                    <div class="position-relative z-2">
                        <h3 class="text-primary-2 mb-3">Let’s connect</h3>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control bg-3 border border-1 rounded-3 @error('name') is-invalid @enderror" 
                                        id="name" name="name" placeholder="Your name" value="{{ old('name') }}" />
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control bg-3 border border-1 rounded-3" id="phone"
                                        name="phone" placeholder="Phone" aria-label="phone" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control bg-3 border border-1 rounded-3" id="email"
                                        name="email" placeholder="Emaill" aria-label="email" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control bg-3 border border-1 rounded-3" id="subject"
                                        name="subject" placeholder="Subject" aria-label="subject" />
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-3 border border-1 rounded-3" id="message"
                                        name="message" placeholder="Message" aria-label="With textarea"></textarea>
                                </div>
                                <div class="col-12">
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <button type="submit" class="btn btn-primary-2 rounded-2">
                                        Send Message
                                        <i class="ri-arrow-right-up-line"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="z-0 bg-primary-dark rectangle-bg z-1 rounded-3"></div>
                </div>
            </div>
            <div class="col-lg-5 d-flex flex-column ps-lg-8">
                <div class="d-flex align-items-center mb-3 position-relative d-inline-flex">
                    <div class="d-inline-block">
                        <div class="icon-flip flex-nowrap icon-shape icon-xxl border border-1 rounded-3 bg-3">
                            <i class="ri-phone-fill text-primary-2 fs-26"></i>
                        </div>
                    </div>
                    <div class="ps-3 h-100">
                        <span class="text-400 fs-6">Phone Number</span>
                        <h6 class="mb-0">+{{$about->phone}}</h6>
                    </div>
                    <a href="tel:+{{$about->phone}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                </div>
                <div class="d-flex align-items-center mb-3 position-relative d-inline-flex">
                    <div class="d-inline-block">
                        <div class="icon-flip flex-nowrap icon-shape icon-xxl border border-1 rounded-3 bg-3">
                            <i class="ri-mail-fill text-primary-2 fs-26"></i>
                        </div>
                    </div>
                    <div class="ps-3 h-100">
                        <span class="text-400 fs-6">Email</span>
                        <h6 class="mb-0">{{$about->email}}</h6>
                    </div>
                    <a href="mailto:{{$about->email}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                </div>
                <div class="d-flex align-items-center mb-3 position-relative d-inline-flex">
                    <div class="d-inline-block">
                        <div class="icon-flip flex-nowrap icon-shape icon-xxl border border-1 rounded-3 bg-3">
                            <i class="ri-whatsapp-fill text-primary-2 fs-26"></i>
                        </div>
                    </div>
                    <div class="ps-3 h-100">
                        <span class="text-400 fs-6">Whatsapp</span>
                        <h6 class="mb-0">+{{$about->whatsapp}}</h6>
                    </div>
                    <a href="https://wa.me/{{$about->whatsapp}}" target="_blank" class="position-absolute top-0 start-0 w-100 h-100"></a>
                </div>
                <div class="d-flex align-items-center mb-3 position-relative d-inline-flex">
                    <div class="d-inline-block">
                        <div class="icon-flip flex-nowrap icon-shape icon-xxl border border-1 rounded-3 bg-3">
                            <i class="ri-map-2-fill text-primary-2 fs-26"></i>
                        </div>
                    </div>
                    <div class="ps-3 h-100">
                        <span class="text-400 fs-6">Address</span>
                        <h6 class="mb-0">{{$about->address}}</h6>
                    </div>
                    <a href="https://maps.google.com/maps?q=1st+avenue,New+York"
                        class="position-absolute top-0 start-0 w-100 h-100"></a>
                </div>
            </div>
        </div>
    </div>
</section>
