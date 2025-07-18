@extends('layouts.frontend')

@section('title', 'Find Your Dream Property')

@section('content')
<!--============== Slider Area Start ==============-->
<div class="full-row p-0 overflow-hidden">
    <div id="slider" class="overflow-hidden" style="width:1200px; height:720px; margin:0 auto; margin-bottom: 0px;">
        <!-- Slide 1-->
        <div class="ls-layer" data-ls="kenburnsscale:1.2; duration:12000;">
            <img width="1920" height="1080" src="{{ asset('assets/images/slider/11.png') }}" class="ls-bg" alt="">

            <div style="top:-100px; left:-7%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; height:140%; width:100%; opacity:1; border-radius: 50px; transform: rotate(20deg)" class="ls-l bg-primary ls-hide-phone" data-ls="showinfo:1; delayin:0; fadein:false; offsetxin:-100lw; offsetxout:left; easingout:easeInQuint; skewxout:-10;"></div>

            <p style="top:240px; left:20px; text-align:initial; text-decoration:none; mix-blend-mode:normal; padding-right:20px; font-size: 16px; font-weight: 500" class="ls-l color-white font-primary text-uppercase ls-2 ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Find Your Dream Home</p>

            <h2 style="top:280px; left:20px; text-align:initial; white-space: normal; width: 500px; text-decoration:none; mix-blend-mode:normal; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone fw-medium" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:1000; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Discover Amazing Properties in Your City</h2>

            <p style="top:400px; left:20px; width:500px; text-align:initial; text-decoration:none; font-size: 16px; white-space:normal; mix-blend-mode:normal; line-height:28px; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:2000; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">We help you find the perfect property with our extensive listings and expert guidance. Your dream home is just a click away.</p>

            <div style="top:480px; left:20px; width:400px; text-align:initial; text-decoration:none; mix-blend-mode:normal;" class="ls-l ls-hide-phone" data-ls="offsetxin:100lw; durationin:1500; delayin:2500; transformoriginin:0% 50% 0; offsetxout:left;">
                <form action="{{ route('properties.index') }}" class="slider-signup d-flex position-relative" method="get">
                    <input type="text" class="form-control" name="search" placeholder="Enter location or property type">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>

            <p style="top:580px; left:20px; width:500px; text-align:initial; text-decoration:none; font-size: 17px; white-space:normal; mix-blend-mode:normal; line-height:28px; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:2700; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Ready to find your dream home? <b><a href="{{ route('properties.index') }}" class="text-white">Browse Properties</a></b></p>

            <div style="font-size:15px; top:250px; left:600px;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:1000; easingin:easeOutQuint; offsetyout:-300; durationin:1500; durationout:400; parallax:false; parallaxlevel:1;">
                <div class="simple-video-play d-flex">
                    <div class="position-relative d-inline-block">
                        <a data-fancybox href="https://www.youtube.com/watch?v=bh-klGboIg8" class="rounded-circle position-relative bg-white" style="z-index: 10">
                            <i class="fa-solid fa-play color-primary position-relative top-50 start-50 translate-middle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2-->
        <div class="ls-layer" data-ls="kenburnsscale:1.2; duration:12000;">
            <img width="1920" height="1080" src="{{ asset('assets/images/slider/12.png') }}" class="ls-bg" alt="">

            <div style="top:-100px; left:-7%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; height:140%; width:100%; opacity:1; border-radius: 50px; transform: rotate(20deg)" class="ls-l bg-secondary ls-hide-phone" data-ls="showinfo:1; delayin:0; fadein:false; offsetxin:-100lw; offsetxout:left; easingout:easeInQuint; skewxout:-10;"></div>

            <p style="top:240px; left:20px; text-align:initial; text-decoration:none; mix-blend-mode:normal; padding-right:20px; font-size: 16px; font-weight: 500" class="ls-l color-white font-primary text-uppercase ls-2 ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:500; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Professional Service</p>

            <h2 style="top:280px; left:20px; text-align:initial; white-space: normal; width: 500px; text-decoration:none; mix-blend-mode:normal; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone fw-medium" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:1000; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Expert Real Estate Agents at Your Service</h2>

            <p style="top:400px; left:20px; width:500px; text-align:initial; text-decoration:none; font-size: 16px; white-space:normal; mix-blend-mode:normal; line-height:28px; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:2000; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Our experienced agents provide personalized service to help you buy, sell, or rent the perfect property. Professional guidance every step of the way.</p>

            <div style="top:480px; left:20px; width:400px; text-align:initial; text-decoration:none; mix-blend-mode:normal;" class="ls-l ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:2500; transformoriginin:0% 50% 0; offsetxout:left;">
                <div class="d-flex gap-3">
                    <a href="{{ route('agents.index') }}" class="btn btn-primary">Meet Our Agents</a>
                    <a href="{{ route('properties.index') }}" class="btn btn-outline-light">View Properties</a>
                </div>
            </div>

            <p style="top:580px; left:20px; width:500px; text-align:initial; text-decoration:none; font-size: 15px; white-space:normal; mix-blend-mode:normal; line-height:28px; color:#fff; padding-right:20px;" class="ls-l ls-hide-phone" data-ls="showinfo:1; offsetxin:100lw; durationin:1500; delayin:2700; transformoriginin:0% 50% 0; clipin:0 100% 0 0; offsetxout:left;">Need expert advice? <b><a href="{{ route('agents.index') }}" class="text-white">Contact an Agent</a></b></p>
        </div>
    </div>
</div>
<!--============== Slider Area End ==============-->

<!--============== Property Search Form Start ==============-->
<div class="full-row p-0 property-search-form" style="margin-top: -50px; z-index: 100; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="bg-white shadow-sm quick-search form-icon-right position-relative" action="{{ route('properties.index') }}" method="get">
                    <div class="d-flex gap-1">
                        <div class="field-search">
                            <select class="form-select" name="type" aria-label="Property Type">
                                <option value="">All Types</option>
                                @foreach(\App\Models\PropertyType::all() as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field-search">
                            <select class="form-select" name="status" aria-label="Status">
                                <option value="">Any Status</option>
                                <option value="for_sale">For Sale</option>
                                <option value="for_rent">For Rent</option>
                            </select>
                        </div>
                        <div class="field-search flex-grow-1">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" placeholder="Enter location, property name...">
                            </div>
                        </div>
                        <div class="field-search">
                            <div class="position-relative">
                                <input type="text" class="form-control" name="price" placeholder="Price Range" readonly>
                            </div>
                        </div>
                        <div class="field-search">
                            <button class="btn btn-primary hover-flash-move w-100">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--============== Property Search Form End ==============-->

<!--============== Recent Property Start ==============-->
<div class="full-row bg-white">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h3 class="color-dark text-uppercase fs-5 ls-2">Featured Properties</h3>
             </div>
             <div class="col-md-6">
                <a href="{{ route('properties.index') }}" class="ms-auto d-table fw-bold btn-link">View All Properties</a>
             </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="4block-carusel nav-disable owl-carousel">
                    @foreach(\App\Models\Property::featured()->with(['propertyType', 'agent'])->take(6)->get() as $property)
                        <div class="item">
                            <!-- Property Grid -->
                            <div class="property-grid-2 property-block">
                                <div class="entry-wrapper">
                                    <div class="entry-thumbnail">
                                        <div class="type">
                                            <span class="{{ $property->status == 'for_sale' ? 'sale' : 'rent' }} text-white">
                                                {{ ucfirst(str_replace('_', ' ', $property->status)) }}
                                            </span>
                                            @if($property->featured)
                                                <span class="featured text-white">Featured</span>
                                            @endif
                                        </div>
                                        <div class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <span>{{ $property->created_at->diffForHumans() }}</span>
                                        </div>
                                        <ul class="quick-meta">
                                            <li><a href="#" title="Add Compare"><i class="fa-solid fa-shuffle"></i></a></li>
                                            <li><a href="#" title="Add Favourite"><i class="fa-regular fa-heart"></i></a></li>
                                            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                                        </ul>
                                        <a href="#" class="entry-thumbnail-image">
                                            <div class="bg-light d-flex align-items-center justify-content-center" style="height: 250px;">
                                                <i class="fas fa-home fs-1 text-muted"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="entry-content-wrapper">
                                        <div class="entry-header">
                                            <div class="post-meta">
                                                <div class="property-type"><a href="#">{{ $property->propertyType->name }}</a></div>
                                            </div>
                                            <h5 class="listing-title"><a href="#">{{ $property->title }}</a></h5>
                                            <span class="listing-location">
                                                <i class="fas fa-map-marker-alt"></i> 
                                                {{ $property->address }}, {{ $property->city }}, {{ $property->state }}
                                            </span>
                                        </div>
                                        <div class="entry-content">
                                            <ul class="property-info">
                                                <li title="Beds">
                                                    <span><i class="fa-solid fa-bed"></i></span>{{ $property->bedrooms }}
                                                </li>
                                                <li title="Baths">
                                                    <span><i class="fa-solid fa-shower"></i></span>{{ $property->bathrooms }}
                                                </li>
                                                <li title="Area">
                                                    <span><i class="fa-solid fa-vector-square"></i></span>{{ number_format($property->area) }} Sqft
                                                </li>
                                                <li title="Garage">
                                                    <span><i class="fa-solid fa-warehouse"></i></span>{{ $property->garage ? 'Yes' : 'No' }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-footer">
                                            <span class="listing-price">
                                                {{ $property->formatted_price }}
                                                <small>{{ $property->status == 'for_rent' ? ' / mo' : '' }}</small>
                                            </span>
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
<!--============== Recent Property End ==============-->

<!--============== About Us Section Start ==============-->
<div class="full-row">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-1 align-items-center g-4">
            <div class="col">
                <span class="color-primary font-primary mb-2 d-table text-uppercase ls-1 fw-semibold">About Us</span>
                <h2 class="color-dark ls-1 mb-4">Your Trusted Real Estate Partner</h2>
                <p>With years of experience in the real estate industry, we've helped thousands of families find their perfect homes. Our expert team combines local market knowledge with cutting-edge technology to provide you with the best property search experience.</p>
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/property/10.png') }}" alt="Real Estate" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!--============== About Us Section End ==============-->
@endsection

@push('scripts')
<!-- LayerSlider Scripts -->
<script src="{{ asset('assets/js/greensock.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script>
    $('#slider').layerSlider({
        sliderVersion: '6.0.0',
        autoStart: true,
        type: 'fullwidth',
        responsive: true,
        sublayerContainer: 0,
        touchNav: true,
        imgPreload: true,
        responsiveUnder: 0,
        maxRatio: 1,
        slideBGSize: 'auto',
        hideUnder: 0,
        hideOver: 100000,
        skin: 'numbers',
        fitScreenWidth: true,
        thumbnailNavigation: 'disabled',
        height: 860,
        skinsPath: '{{ asset("assets/skins/") }}'
    });
</script>
@endpush