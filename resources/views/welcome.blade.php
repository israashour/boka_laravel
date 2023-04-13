@extends('layout')

@section('content')

@if(isset($services))
    <div class="slider-container overflow-auto">
        <div class="pre-btn"><img src="img/Vector 4.png" alt="" /></div>

        <div class="slider-content">
            <div class="card-box">
                @foreach ($services as $service)
                <div class="services-card">
                    <div class="card-box-content">
                        <img src="{{ Storage::url('services/'. $service->image) }}" alt="" />
                        <p class="service-name">{{$service->name}}</p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>

        <div class="nxt-btn"><img src="img/Vector 2 2.png" alt="" /></div>
    </div>
@endif

@isset($services)
    <div class="offers slide container-fluid">
    <div class="offer-img">
        <img src="{{asset('assets/img/Frame 10348.png')}}" alt="" />
    </div>

    <div class="card-heading">
        <h2 id="title">Special offer</h2>
        <p id="view-all">View all</p>
        <div class="btn-control">
            <div class="swiper-button-prev swiper-navBtn carousel-control-prev"></div>
            <div class="swiper-button-next swiper-navBtn carousel-control-next"></div>
        </div>
    </div>
    <div class="slide-container swiper ">
        <div class="slide-content overflow-auto">
            <div class="card-wrapper swiper-wrapper">
                
                @foreach ($services as $service)
                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="{{ Storage::url('services/'. $service->image) }}" alt="" class="card-img" />
                        </div>
                    </div>

                    <div class="card-content ">
                        <h2 class="name">{{$service->name}}</h2>
                        {{-- <img id="rating-stars" src="{{asset('assets/img/Group 20.png')}}" alt="" /> --}}
                        <div class="description">
                            <div class="location">
                                <h2>{{$service->description}}</h2>
                                <p>{{$service->description}}</p>
                            </div>
                            <div class="location-img">
                                <img src="{{asset('assets/img/Vector 2.png')}}" alt="" />
                            </div>
                        </div>
                        <div class="service-btns">
                            <div class="type">
                                <button class="button active" id="btn-wide">
                                    Haircut
                                </button>
                                <button class="button" id="btn-wide">Manicure</button>
                                <button class="button">Infra</button>
                            </div>
                            <div class="time">
                                <button class="button">8:00 am</button>
                                <button class="button">8:30 am</button>
                                <button class="button">8:30 am</button>
                                <button class="button">+5</button>
                            </div>
                        </div>
                        <div class="price-status">
                            <div class="status">
                                <p>Booked x today</p>
                            </div>
                            <div class="price">
                                <div class="price-before">
                                    <p class="before">{{$service->price}}</p>
                                </div>
                                <div class="price-after">
                                    <p class="after">{{$service->price}}</p>
                                    <span class="discount-tag">20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endisset

@isset($business)
    <div class="business container-fluid">
    <div class="popular">
        <div class="card-heading">
            <h2 id="title">Popular Businesses</h2>
            <p id="view-all">View all</p>
            <div class="btn-control">
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-button-next swiper-navBtn"></div>
            </div>
        </div>
        <div class="slide-container swiper ">
            <div class="slide-content overflow-auto">
                <div class="card-wrapper swiper-wrapper">
                    
                    @foreach ($offers as $offer)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="{{ Storage::url('offers/'. $offer->image) }}" alt="" class="card-img" />
                            </div>
                        </div>
    
                        <div class="card-content ">
                            <h2 class="name">{{$offer->name}}</h2>
                            {{-- <img id="rating-stars" src="{{asset('assets/img/Group 20.png')}}" alt="" /> --}}
                            <div class="description">
                                <div class="location">
                                    <h2>{{$offer->description}}</h2>
                                    <p>{{$offer->description}}</p>
                                </div>
                                <div class="location-img">
                                    <img src="{{asset('assets/img/Vector 2.png')}}" alt="" />
                                </div>
                            </div>
                            <div class="service-btns">
                                <div class="type">
                                    <button class="button active" id="btn-wide">
                                        Haircut
                                    </button>
                                    <button class="button" id="btn-wide">Manicure</button>
                                    <button class="button">Infra</button>
                                </div>
                                <div class="time">
                                    <button class="button">8:00 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">+5</button>
                                </div>
                            </div>
                            <div class="price-status">
                                <div class="status">
                                    <p>Booked x today</p>
                                </div>
                                <div class="price">
                                    <div class="price-before">
                                        <p class="before">{{$offer->price}}</p>
                                    </div>
                                    <div class="price-after">
                                        <p class="after">{{$offer->price}}</p>
                                        <span class="discount-tag">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="featured">
        <div class="card-heading">
            <h2 id="title">Featured Businesses</h2>
            <p id="view-all">View all</p>
            <div class="btn-control">
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-button-next swiper-navBtn"></div>
            </div>
        </div>
        <div class="slide-container swiper ">
            <div class="slide-content overflow-auto">
                <div class="card-wrapper swiper-wrapper">
                    
                    @foreach ($offers as $offer)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="{{ Storage::url('offers/'. $offer->image) }}" alt="" class="card-img" />
                            </div>
                        </div>
    
                        <div class="card-content ">
                            <h2 class="name">{{$offer->name}}</h2>
                            {{-- <img id="rating-stars" src="{{asset('assets/img/Group 20.png')}}" alt="" /> --}}
                            <div class="description">
                                <div class="location">
                                    <h2>{{$offer->description}}</h2>
                                    <p>{{$offer->description}}</p>
                                </div>
                                <div class="location-img">
                                    <img src="{{asset('assets/img/Vector 2.png')}}" alt="" />
                                </div>
                            </div>
                            <div class="service-btns">
                                <div class="type">
                                    <button class="button active" id="btn-wide">
                                        Haircut
                                    </button>
                                    <button class="button" id="btn-wide">Manicure</button>
                                    <button class="button">Infra</button>
                                </div>
                                <div class="time">
                                    <button class="button">8:00 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">+5</button>
                                </div>
                            </div>
                            <div class="price-status">
                                <div class="status">
                                    <p>Booked x today</p>
                                </div>
                                <div class="price">
                                    <div class="price-before">
                                        <p class="before">{{$offer->price}}</p>
                                    </div>
                                    <div class="price-after">
                                        <p class="after">{{$offer->price}}</p>
                                        <span class="discount-tag">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="hair">
        <div class="card-heading">
            <h2 id="title">Hair Salon’s</h2>
            <p id="view-all">View all</p>
            <div class="btn-control">
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-button-next swiper-navBtn"></div>
            </div>
        </div>
        <div class="slide-container swiper ">
            <div class="slide-content overflow-auto">
                <div class="card-wrapper swiper-wrapper">
                    
                    @foreach ($offers as $offer)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="{{ Storage::url('offers/'. $offer->image) }}" alt="" class="card-img" />
                            </div>
                        </div>
    
                        <div class="card-content ">
                            <h2 class="name">{{$offer->name}}</h2>
                            {{-- <img id="rating-stars" src="{{asset('assets/img/Group 20.png')}}" alt="" /> --}}
                            <div class="description">
                                <div class="location">
                                    <h2>{{$offer->description}}</h2>
                                    <p>{{$offer->description}}</p>
                                </div>
                                <div class="location-img">
                                    <img src="{{asset('assets/img/Vector 2.png')}}" alt="" />
                                </div>
                            </div>
                            <div class="service-btns">
                                <div class="type">
                                    <button class="button active" id="btn-wide">
                                        Haircut
                                    </button>
                                    <button class="button" id="btn-wide">Manicure</button>
                                    <button class="button">Infra</button>
                                </div>
                                <div class="time">
                                    <button class="button">8:00 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">+5</button>
                                </div>
                            </div>
                            <div class="price-status">
                                <div class="status">
                                    <p>Booked x today</p>
                                </div>
                                <div class="price">
                                    <div class="price-before">
                                        <p class="before">{{$offer->price}}</p>
                                    </div>
                                    <div class="price-after">
                                        <p class="after">{{$offer->price}}</p>
                                        <span class="discount-tag">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endisset

@isset($tranformation)
    <div class="transformation">
    <div class="trans-heading">
        <h2 id="title">Boka Transformation</h2>
        <div class="btn-book-now">
            <button class="book-now">Book Now</button>
        </div>
    </div>
    <div class="comparison-slider">
        <div class="img-slider img-fluid">
            <img src="{{ asset('assets/img/Group 20748 (2).png') }}" alt="" />
        </div>
        <div class="comp-content">
            <div class="para">
                <p>
                    Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do
                    eius mod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam...”
                </p>
            </div>
            <div class="per-details">
                <div class="img-details">
                    <img src="img/Ellipse 9.png" alt="" />
                </div>
                <div class="per-contact">
                    <h2>Shoukri Kattan</h2>
                    <p>Hair Specialist @boka</p>
                </div>
            </div>
            <div class="shourki">
                <p>Book Shoukri for $49</p>
            </div>
        </div>
    </div>
    </div>
@endisset

@isset($categories)
    <div class="category">
    <div class="category-heading">
        <h2 id="title">Popular Category</h2>
        <div class="view-all">
            <button class="view-category">View all Category</button>
        </div>
    </div>
    <div class="category-content">
        <div class="category-1">
            <img src="img/Rectangle 14.png" alt="" />
            <!-- <div class="bottom-left">
                      <h2>Manicure</h2>
                      <p>243+ Business</p>
                  </div>
                  <div class="bottom-right">
                      <button><img src="img/Group 10324.png" alt=""></button>
                  </div> -->
        </div>
        <div id="category1">
            <div class="category-2">
                <img src="img/Rectangle 15.png" alt="" />
                <img src="img/Rectangle 16.png" alt="" />
            </div>
            <div class="category-3">
                <img src="img/Rectangle 17.png" alt="" />
                <img src="img/Rectangle 18.png" alt="" />
            </div>
        </div>

    </div>
    </div>
@endisset


@isset($feedbacks)
    <div class="feedback">
    <div class="feedback-heading">
        <h2>Our happy customers say about us</h2>
    </div>
    <div class="feedback-content overflow-auto">
        <button class="fe-pre-btn">
            {{-- <img src="{{assert('asserts/img/Right arrow.png')}}" alt="" /> --}}
        </button>
        @foreach ($feedbacks as $feedback)
        <div class="feedback-card">
            <div class="feedback-info par1">
                <p>
                    {{$feedback->comment}}
                </p>
            </div>
            <div class="feedback-info par2">
                <img src="{{ Storage::url('feedbacks/'. $feedback->image) }}" alt="" />
                <p>{{$feedback->name}} </p>
            </div>
            <div class="feedback-info contactin">
                <div class="contact-info">
                    <img src="{{assert('asserts/img/Ellipse 9 (1).png')}}" alt="" />
                </div>
                <div class="contact-info">
                    <h2>{{$feedback->name}}</h2>
                    <p>Sylhet, Bangladesh</p>
                </div>
            </div>
        </div>
        @endforeach
        <button class="fe-nxt-btn">
            {{-- <img src="{{assert('asserts/img/Vector 9.png')}} " alt="" /> --}}
        </button>
    </div>
    </div>
@endisset

@isset($brands)
    <div class="brands">
    <img id="union" src="{{ asset('assets/img/Frame 10326 (2).png') }}" alt="" />
    </div>
@endisset

@isset($services)
    <div class="business">
    <div class="popular">
        <div class="card-heading">
            <h2 id="title">Exploring Businesses</h2>
            <p id="view-all">View all</p>
            <div class="btn-control">
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-button-next swiper-navBtn"></div>
            </div>
        </div>
        <div class="slide-container swiper ">
            <div class="slide-content overflow-auto">
                <div class="card-wrapper swiper-wrapper">
                    
                    @foreach ($offers as $offer)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="{{ Storage::url('offers/'. $offer->image) }}" alt="" class="card-img" />
                            </div>
                        </div>
    
                        <div class="card-content ">
                            <h2 class="name">{{$offer->name}}</h2>
                            {{-- <img id="rating-stars" src="{{asset('assets/img/Group 20.png')}}" alt="" /> --}}
                            <div class="description">
                                <div class="location">
                                    <h2>5 mile away</h2>
                                    <p>{{$offer->description}}</p>
                                </div>
                                <div class="location-img">
                                    <img src="{{asset('assets/img/Vector 2.png')}}" alt="" />
                                </div>
                            </div>
                            <div class="service-btns">
                                <div class="type">
                                    <button class="button active" id="btn-wide">
                                        Haircut
                                    </button>
                                    <button class="button" id="btn-wide">Manicure</button>
                                    <button class="button">Infra</button>
                                </div>
                                <div class="time">
                                    <button class="button">8:00 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">8:30 am</button>
                                    <button class="button">+5</button>
                                </div>
                            </div>
                            <div class="price-status">
                                <div class="status">
                                    <p>Booked x today</p>
                                </div>
                                <div class="price">
                                    <div class="price-before">
                                        <p class="before">{{$offer->price}}</p>
                                    </div>
                                    <div class="price-after">
                                        <p class="after">{{$offer->price}}</p>
                                        <span class="discount-tag">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="hair">
            <div class="card-heading">
                <h2 id="title">More Business</h2>
                <p id="view-all">View all</p>
                <div class="btn-control">
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                </div>
            </div>
            <div class="slide-container swiper ">
                <div class="slide-content overflow-auto">
                    <div class="card-wrapper swiper-wrapper">
                        
                        @foreach ($services as $service)
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image">
                                    <img src="{{ Storage::url('offers/'. $service->image) }}" alt="" class="card-img" />
                                </div>
                            </div>
        
                            <div class="card-content ">
                                <h2 class="name">{{$service->name}}</h2>
                                {{-- <img id="rating-stars" src="{{asset('assets/img/Group 20.png')}}" alt="" /> --}}
                                <div class="description">
                                    <div class="location">
                                        <h2>{{$service->description}}</h2>
                                        <p>{{$service->description}}</p>
                                    </div>
                                    <div class="location-img">
                                        <img src="{{asset('assets/img/Vector 2.png')}}" alt="" />
                                    </div>
                                </div>
                                <div class="service-btns">
                                    <div class="type">
                                        <button class="button active" id="btn-wide">
                                            Haircut
                                        </button>
                                        <button class="button" id="btn-wide">Manicure</button>
                                        <button class="button">Infra</button>
                                    </div>
                                    <div class="time">
                                        
                                        <button class="button">{{$service->name}}</button>
                                        
                                    </div>
                                </div>
                                <div class="price-status">
                                    <div class="status">
                                        <p>Booked x today</p>
                                    </div>
                                    <div class="price">
                                        <div class="price-before">
                                            <p class="before">{{$service->price}}</p>
                                        </div>
                                        <div class="price-after">
                                            <p class="after">{{$service->price}}</p>
                                            <span class="discount-tag">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endisset

@endsection
