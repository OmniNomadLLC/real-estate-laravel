@extends('layouts.admin')

@section('title', 'Add New Property')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Add New Property</h1>
                <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Back to Properties
                </a>
            </div>
        </div>
    </div>
    
    <form action="{{ route('admin.properties.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-lg-8">
                <!-- Property Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Property Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title" class="form-label">Property Title *</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                       id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12">
                                <label for="description" class="form-label">Description *</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="property_type_id" class="form-label">Property Type *</label>
                                <select class="form-select @error('property_type_id') is-invalid @enderror" 
                                        id="property_type_id" name="property_type_id" required>
                                    <option value="">Select Property Type</option>
                                    @foreach($propertyTypes as $type)
                                        <option value="{{ $type->id }}" {{ old('property_type_id') == $type->id ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('property_type_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status *</label>
                                <select class="form-select @error('status') is-invalid @enderror" 
                                        id="status" name="status" required>
                                    <option value="">Select Status</option>
                                    <option value="for_sale" {{ old('status') == 'for_sale' ? 'selected' : '' }}>For Sale</option>
                                    <option value="for_rent" {{ old('status') == 'for_rent' ? 'selected' : '' }}>For Rent</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price ($) *</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                       id="price" name="price" value="{{ old('price') }}" min="0" step="0.01" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="area" class="form-label">Area (sq ft)</label>
                                <input type="number" class="form-control @error('area') is-invalid @enderror" 
                                       id="area" name="area" value="{{ old('area') }}" min="0" step="0.01">
                                @error('area')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Property Features -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Property Features</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="bedrooms" class="form-label">Bedrooms *</label>
                                <input type="number" class="form-control @error('bedrooms') is-invalid @enderror" 
                                       id="bedrooms" name="bedrooms" value="{{ old('bedrooms') }}" min="0" required>
                                @error('bedrooms')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="bathrooms" class="form-label">Bathrooms *</label>
                                <input type="number" class="form-control @error('bathrooms') is-invalid @enderror" 
                                       id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}" min="0" required>
                                @error('bathrooms')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label class="form-label">&nbsp;</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="garage" name="garage" value="1" {{ old('garage') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="garage">
                                        Has Garage
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Location -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Location</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="address" class="form-label">Address *</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                       id="address" name="address" value="{{ old('address') }}" required>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="city" class="form-label">City *</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" 
                                       id="city" name="city" value="{{ old('city') }}" required>
                                @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="state" class="form-label">State *</label>
                                <input type="text" class="form-control @error('state') is-invalid @enderror" 
                                       id="state" name="state" value="{{ old('state') }}" required>
                                @error('state')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-4">
                                <label for="zip_code" class="form-label">ZIP Code *</label>
                                <input type="text" class="form-control @error('zip_code') is-invalid @enderror" 
                                       id="zip_code" name="zip_code" value="{{ old('zip_code') }}" required>
                                @error('zip_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="latitude" class="form-label">Latitude</label>
                                <input type="number" class="form-control @error('latitude') is-invalid @enderror" 
                                       id="latitude" name="latitude" value="{{ old('latitude') }}" step="any">
                                @error('latitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="longitude" class="form-label">Longitude</label>
                                <input type="number" class="form-control @error('longitude') is-invalid @enderror" 
                                       id="longitude" name="longitude" value="{{ old('longitude') }}" step="any">
                                @error('longitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Property Options -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Property Options</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="featured" name="featured" value="1" {{ old('featured') ? 'checked' : '' }}>
                            <label class="form-check-label" for="featured">
                                <strong>Featured Property</strong>
                            </label>
                            <small class="form-text text-muted d-block">Featured properties appear prominently on the website.</small>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-save me-2"></i>Create Property
                            </button>
                            <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection