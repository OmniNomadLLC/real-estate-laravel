<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::where('agent_id', Auth::id())
            ->with(['propertyType'])
            ->latest()
            ->paginate(10);

        return view('admin.properties.index', compact('properties'));
    }

    public function create()
    {
        $propertyTypes = PropertyType::all();
        return view('admin.properties.create', compact('propertyTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:for_sale,for_rent',
            'property_type_id' => 'required|exists:property_types,id',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'area' => 'nullable|numeric|min:0',
            'garage' => 'boolean',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'featured' => 'boolean',
        ]);

        $validated['agent_id'] = Auth::id();
        $validated['garage'] = $request->has('garage');
        $validated['featured'] = $request->has('featured');

        $property = Property::create($validated);

        return redirect()->route('admin.properties.index')
            ->with('success', 'Property created successfully!');
    }

    public function show(Property $property)
    {
        // Check if user owns this property
        if ($property->agent_id !== Auth::id()) {
            abort(403, 'Unauthorized access to this property.');
        }

        $property->load(['propertyType', 'images']);
        return view('admin.properties.show', compact('property'));
    }

    public function edit(Property $property)
    {
        // Check if user owns this property
        if ($property->agent_id !== Auth::id()) {
            abort(403, 'Unauthorized access to this property.');
        }

        $propertyTypes = PropertyType::all();
        return view('admin.properties.edit', compact('property', 'propertyTypes'));
    }

    public function update(Request $request, Property $property)
    {
        // Check if user owns this property
        if ($property->agent_id !== Auth::id()) {
            abort(403, 'Unauthorized access to this property.');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:for_sale,for_rent',
            'property_type_id' => 'required|exists:property_types,id',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'area' => 'nullable|numeric|min:0',
            'garage' => 'boolean',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'featured' => 'boolean',
        ]);

        $validated['garage'] = $request->has('garage');
        $validated['featured'] = $request->has('featured');

        $property->update($validated);

        return redirect()->route('admin.properties.index')
            ->with('success', 'Property updated successfully!');
    }

    public function destroy(Property $property)
    {
        // Check if user owns this property
        if ($property->agent_id !== Auth::id()) {
            abort(403, 'Unauthorized access to this property.');
        }

        $property->delete();

        return redirect()->route('admin.properties.index')
            ->with('success', 'Property deleted successfully!');
    }
}