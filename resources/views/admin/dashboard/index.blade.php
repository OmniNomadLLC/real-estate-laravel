@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="full-row p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-3 color-dark">Dashboard</h5>
            </div>
            @if(session('success'))
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span><strong>Great!</strong> {{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>
        
        <!-- Statistics Cards -->
        <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-1 g-3 mb-4">
            <div class="col">
                <div class="counter-style-2" style="background-color: #55e3b0;">
                    <div class="entry-wrapper">
                        <div class="entry-thumbnail-wrapper">
                            <div class="entry-thumbnail"><span class="unicode-house-1"></span></div>
                        </div>
                        <div class="entry-content-wrapper">
                            <div class="entry-header">
                                <span class="counter-num">{{ $stats['total_properties'] }}</span>
                                <h5 class="counter-title">Total Properties</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="counter-style-2" style="background-color: #dc69f1;">
                    <div class="entry-wrapper">
                        <div class="entry-thumbnail-wrapper">
                            <div class="entry-thumbnail"><span class="unicode-house-1"></span></div>
                        </div>
                        <div class="entry-content-wrapper">
                            <div class="entry-header">
                                <span class="counter-num">{{ $stats['for_rent'] }}</span>
                                <h5 class="counter-title">Property For Rent</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="counter-style-2" style="background-color: #f1c643;">
                    <div class="entry-wrapper">
                        <div class="entry-thumbnail-wrapper">
                            <div class="entry-thumbnail"><span class="unicode-house-1"></span></div>
                        </div>
                        <div class="entry-content-wrapper">
                            <div class="entry-header">
                                <span class="counter-num">{{ $stats['for_sale'] }}</span>
                                <h5 class="counter-title">Property For Sale</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="counter-style-2" style="background-color: #ee6565;">
                    <div class="entry-wrapper">
                        <div class="entry-thumbnail-wrapper">
                            <div class="entry-thumbnail"><span class="unicode-house-1"></span></div>
                        </div>
                        <div class="entry-content-wrapper">
                            <div class="entry-header">
                                <span class="counter-num">{{ $stats['featured'] }}</span>
                                <h5 class="counter-title">Featured Properties</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dashboard Content -->
        <div class="row row-cols-xl-2 row-cols-1 g-3 mb-4">
            <!-- Profile Overview -->
            <div class="col-lg-6">
                <div class="bg-white p-4 clearfix mb-3">
                    <h5 class="mb-4">Profile Overview</h5>
                    <div class="row row-cols-lg-2 row-cols-1 g-4">
                        <div class="col">
                            <div class="entry-wrapper flex-row gap-4">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail"><span class="unicode-house-1 color-primary fs-1"></span></div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <span class="counter-num fs-3 color-dark">{{ auth()->user()->properties->count() }}</span>
                                        <h5 class="counter-title fs-6 color-default ls-1">My Properties</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="entry-wrapper flex-row gap-4">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail"><span class="unicode-strategy color-primary fs-1"></span></div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <span class="counter-num fs-3 color-dark">{{ auth()->user()->properties()->where('featured', true)->count() }}</span>
                                        <h5 class="counter-title fs-6 color-default ls-1">Featured Properties</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="entry-wrapper flex-row gap-4">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail"><span class="unicode-search color-primary fs-1"></span></div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <span class="counter-num fs-3 color-dark">{{ auth()->user()->properties()->where('status', 'for_sale')->count() }}</span>
                                        <h5 class="counter-title fs-6 color-default ls-1">For Sale</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="entry-wrapper flex-row gap-4">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail"><span class="unicode-alarm color-primary fs-1"></span></div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <span class="counter-num fs-3 color-dark">{{ auth()->user()->properties()->where('status', 'for_rent')->count() }}</span>
                                        <h5 class="counter-title fs-6 color-default ls-1">For Rent</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="bg-white p-4 mb-3 clearfix">
                    <h5 class="mb-4">Recent Properties</h5>
                    <ul class="dashboard-activity">
                        @forelse($userProperties as $property)
                            <li>
                                {{ $property->created_at->format('M jS, g:ia') }} 
                                <span class="color-secondary">- Added "{{ $property->title }}" for {{ ucfirst(str_replace('_', ' ', $property->status)) }}</span>
                            </li>
                        @empty
                            <li><span class="color-secondary">No properties added yet.</span></li>
                        @endforelse
                    </ul>
                    <div class="mt-3">
                        <a href="{{ route('admin.properties.create') }}" class="btn btn-primary btn-sm">Add New Property</a>
                        <a href="{{ route('admin.properties.index') }}" class="btn btn-outline-primary btn-sm">View All</a>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="col-lg-6">
                <div class="property-overview bg-white p-4 mb-3">
                    <h5 class="mb-4">Quick Actions</h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <a href="{{ route('admin.properties.create') }}" class="btn btn-primary w-100">
                                <i class="fa-solid fa-plus"></i><br>Add Property
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin.properties.index') }}" class="btn btn-outline-primary w-100">
                                <i class="fa-solid fa-list"></i><br>My Properties
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('properties.index') }}" class="btn btn-outline-secondary w-100">
                                <i class="fa-solid fa-eye"></i><br>View Website
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-outline-secondary w-100">
                                <i class="fa-solid fa-cog"></i><br>Settings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/piechart/chart.min.js') }}"></script>
@endpush