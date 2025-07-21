@extends('layouts.admin')

@section('title', 'My Properties')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">My Properties</h1>
                <a href="{{ route('admin.properties.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Add New Property
                </a>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Great!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if($properties->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Property</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Location</th>
                                        <th>Features</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($properties as $property)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                                        <i class="fas fa-home text-muted"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">{{ $property->title }}</h6>
                                                        <small class="text-muted">{{ Str::limit($property->description, 50) }}</small>
                                                        @if($property->featured)
                                                            <span class="badge bg-warning text-dark ms-2">Featured</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary">{{ $property->propertyType->name }}</span>
                                            </td>
                                            <td>
                                                <strong class="text-success">${{ number_format($property->price) }}</strong>
                                                @if($property->status == 'for_rent')
                                                    <small class="text-muted">/mo</small>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge bg-{{ $property->status == 'for_sale' ? 'success' : 'info' }}">
                                                    {{ ucfirst(str_replace('_', ' ', $property->status)) }}
                                                </span>
                                            </td>
                                            <td>
                                                <small>{{ $property->city }}, {{ $property->state }}</small>
                                            </td>
                                            <td>
                                                <small>
                                                    <i class="fas fa-bed text-muted"></i> {{ $property->bedrooms }}
                                                    <i class="fas fa-bath text-muted ms-2"></i> {{ $property->bathrooms }}
                                                    @if($property->area)
                                                        <i class="fas fa-arrows-alt text-muted ms-2"></i> {{ number_format($property->area) }} sq ft
                                                    @endif
                                                </small>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <a href="{{ route('admin.properties.show', $property) }}" class="btn btn-outline-primary" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.properties.edit', $property) }}" class="btn btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-outline-danger" title="Delete" onclick="confirmDelete({{ $property->id }})">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                                
                                                <form id="delete-form-{{ $property->id }}" action="{{ route('admin.properties.destroy', $property) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        @if($properties->hasPages())
                            <div class="d-flex justify-content-center mt-4">
                                {{ $properties->links() }}
                            </div>
                        @endif
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-home fa-3x text-muted mb-3"></i>
                            <h4>No Properties Found</h4>
                            <p class="text-muted">You haven't added any properties yet. Start by adding your first property!</p>
                            <a href="{{ route('admin.properties.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Add Your First Property
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function confirmDelete(propertyId) {
    if (confirm('Are you sure you want to delete this property? This action cannot be undone.')) {
        document.getElementById('delete-form-' + propertyId).submit();
    }
}
</script>
@endpush