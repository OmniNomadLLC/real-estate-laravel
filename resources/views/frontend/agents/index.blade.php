@extends('layouts.frontend')

@section('title', 'Our Agents')

@section('content')
<div class="full-row bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h2 mb-3">Our Expert Agents</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Agents</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="full-row">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
            @foreach(\App\Models\User::whereHas('roles', function($q) { $q->where('name', 'agent'); })->with('agent')->get() as $user)
                <div class="col">
                    <div class="bg-white rounded shadow-sm p-4 text-center">
                        <div class="mb-3">
                            <div class="bg-light rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-user fs-2 text-muted"></i>
                            </div>
                        </div>
                        <h5>{{ $user->name }}</h5>
                        <p class="text-muted">Real Estate Agent</p>
                        @if($user->agent && $user->agent->phone)
                            <p><i class="fas fa-phone"></i> {{ $user->agent->phone }}</p>
                        @endif
                        <p><i class="fas fa-envelope"></i> {{ $user->email }}</p>
                        @if($user->agent && $user->agent->bio)
                            <p class="small">{{ Str::limit($user->agent->bio, 100) }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection