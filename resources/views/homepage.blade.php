@extends('layouts.frontend')

@section('content')
    {{-- ==================== HOME ==================== --}}
    <section>
        <div class="swiper-container">
            <div>
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('frontend/assets/img/1.png') }}" class="d-block w-100" alt="...">
                            <div class="bg__overlay">
                                <div class="heros__container container">
                                    <div class="heros__data" style="z-index: 99; position: relative">
                                        <h2 class="heros__subtitle">
                                            Discover
                                        </h2>
                                        <h1 class="heros__title">
                                            The Enchanting World
                                        </h1>
                                        <p class="heros__description">
                                            It's the perfect time to don a gown and immerse yourself
                                            <br />in the beauty of the wedding realm.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset('frontend/assets/img/2.png') }}" class="d-block w-100" alt="...">
                            <div class="bg__overlay">
                                <div class="heros__container container">
                                    <div class="heros__data" style="z-index: 99; position: relative">
                                        <h2 class="heros__subtitle">
                                            Discover
                                        </h2>
                                        <h1 class="heros__title">
                                            The Enchanting World
                                        </h1>
                                        <p class="heros__description">
                                            It's the perfect time to don a gown and immerse yourself
                                            <br />in the beauty of the wedding realm.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="{{ asset('frontend/assets/img/3.png') }}" class="d-block w-100" alt="...">
                            <div class="bg__overlay">
                                <div class="heros__container container">
                                    <div class="heros__data" style="z-index: 99; position: relative">
                                        <h2 class="heros__subtitle">
                                            Discover
                                        </h2>
                                        <h1 class="heros__title">
                                            The Enchanting World
                                        </h1>
                                        <p class="heros__description">
                                            It's the perfect time to don a gown and immerse yourself
                                            <br />in the beauty of the wedding realm.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== LOGOS ==================== --}}
        <span class="section__subtitle" style="text-align: center">Best Choice</span>
        <h2 class="section__title" style="text-align: center">
            Popular Designers
        </h2>
    <section class="logos" style="margin-top: 2rem; padding-bottom: 3rem">
        <div class="logos__container container grid">
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/av.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/ht1.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/yg.jpg') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/sg.png') }}" alt="" />
            </div>
        </div>
    </section>

    {{-- ==================== ABOUT US ==================== --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('frontend/assets/img/au.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to MarieLocation</h1>
                    <p class="mb-4"> The ultimate destination for renting elegant and breathtaking bridal gowns.
                        We are a bridal gown rental service dedicated to helping you fulfill your dream of a perfect wedding
                        by providing an array of stunning gown options. Our vision is to offer the best and most convenient bridal gown
                        rental experience for brides-to-be. We understand that every bride has unique dreams and desires
                        to look stunning on their special day. Therefore, we offer a diverse selection of bridal gowns from top designers
                        that can be chosen to match your style and preferences.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="section-title bg-white text-center text-primary px-3">Our</h2>
                <h1 class="mb-5">TEAMS</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Dwi Lutfi</h5>
                            <small>1204210</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Rahma Putri</h5>
                            <small>120421</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Karina Shafa</h5>
                            <small>120421</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Anisha Trie</h5>
                            <small>120421</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Cutomers Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ==================== POPULAR ==================== --}}
    <section class="section" id="popular">
        <div class="container">
            <span class="section__subtitle" style="text-align: center">Best Choice</span>
            <h2 class="section__title" style="text-align: center">
                Popular Gowns
            </h2>

            <div class="popular__container swiper">
                <div class="swiper-wrapper">
                    @foreach ($Gown_packages as $gown_package)
                        <article class="popular__card swiper-slide">
                            <a href="{{ route('gown_package.show', $gown_package->slug) }}">
                                <img src="{{ Storage::url($gown_package->galleries->first()->images) }}" alt=""
                                    class="popular__img" />
                                <div class="popular__data">
                                    <h2 class="popular__price">
                                        <span>$</span>{{ number_format($gown_package->price, 2) }}
                                    </h2>
                                    <h3 class="popular__title">
                                        {{ $gown_package->size }}
                                    </h3>
                                    <p class="popular__description">{{ $gown_package->type }}</p>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>

                <div class="swiper-button-next">
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="bx bx-chevron-left"></i>
                </div>
            </div>
        </div>
    </section>


    {{-- blog --}}
    <section class="blog section" id="blog">
        <div class="blog__container container">
            <span class="section__subtitle" style="text-align: center">Our Blog</span>
            <h2 class="section__title" style="text-align: center">
                The Best Gowns For You
            </h2>

            <div class="blog__content grid">
                @foreach ($blogs as $blog)
                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ Storage::url($blog->image) }}" alt="" class="blog__img" />
                            <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                                <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>

                        <div class="blog__data">
                            <h2 class="blog__title">
                                {{ $blog->title }}
                            </h2>
                            <p class="blog__description">
                                {{ $blog->excerpt }}
                            </p>

                            <div class="blog__footer">
                                <div class="blog__reaction">
                                    {{ date('d M Y', strtotime($blog->created_at)) }}
                                </div>
                                <div class="blog__reaction">
                                    <i class="bx bx-show"></i>
                                    <span>{{ $blog->reads }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
