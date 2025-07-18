@extends('layouts.frontend')

@section('title', 'Properties')

@section('content')
<!--============== Page Header Start ==============-->
<div class="full-row bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h2 mb-3">Properties</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Properties</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--============== Page Header End ==============-->

<!--============== Property Search Results Start ==============-->
<div class="full-row">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h3 class="mb-0">
                    @if(request()->has('search') || request()->has('type') || request()->has('status'))
                        Search Results
                    @else
                        All Properties
                    @endif
                </h3>
                <p class="text-muted">{{ $properties->total() }} properties found</p>
            </div>
            <div class="col-md-6">
                <!-- Sort Options -->
                <div class="d-flex justify-content-end">
                    <select class="form-select w-auto" onchange="location = this.value;">
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'latest']) }}" 
                                {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_low']) }}" 
                                {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_high']) }}" 
                                {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
            @forelse($properties as $property)
                <div class="col">
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
                                    <li><a href="#" title="Quick View"><i class="fa-solid fa-magnifying-glass"></i></a></li>
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
                                        <div class="property-type">
                                            <a href="#">{{ $property->propertyType->name }}</a>
                                        </div>
                                    </div>
                                    <h5 class="listing-title">
                                        <a href="#">{{ $property->title }}</a>
                                    </h5>
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
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="fas fa-home fs-1 text-muted mb-3"></i>
                        <h4>No Properties Found</h4>
                        <p class="text-muted">Try adjusting your search criteria or <a href="{{ route('properties.index') }}">browse all properties</a>.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($properties->hasPages())
            <div class="row mt-5">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        {{ $properties->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<!--============== Property Search Results End ==============-->
@endsection