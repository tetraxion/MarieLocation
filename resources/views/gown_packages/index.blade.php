@extends('layouts.frontend')

@section('content')
 {{-- <!--==================== HOME ====================--> --}}
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="{{ Vite::asset('resources/images/pg3.png') }}" alt="" class="islands__bg" />
            </section>
          </div>
        </div>
      </section><br>

      {{-- <div class="islands__container container">
        <div class="islands__data" style="text-align: center">
          <h2 class="islands__subtitle">Explore</h2>
          <h1 class="islands__title">Gown Packages</h1>
        </div>
      </div> --}}

      {{-- <!--==================== POPULAR ====================--> --}}
      <section class="section" id="popular" style="padding:4%">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">All</span>
          <h2 class="section__title" style="text-align: center">
            Gown Package
          </h2>

          <div class="popular__all">
            @foreach($gown_packages as $gown_package)
                <article class="popular__card">
                <a href="{{ route('gown_package.show', $gown_package->slug) }}">
                    @if($gown_package->galleries->count() > 0)
                    <img
                    src="{{ Storage::url($gown_package->galleries->first()->images) }}"
                    alt=""
                    class="popular__img"
                    />@endif
                    <div class="popular__data">
                    <h2 class="popular__price"><span>Rp.</span>{{ number_format($gown_package->price,2) }}</h2>
                    <h3 class="popular__title">{{ $gown_package->size }}</h3>
                    <p class="popular__description">{{ $gown_package->type }}</p>
                    </div>
                </a>
                </article>
            @endforeach
          </div>
        </div>
      </section>
@endsection
