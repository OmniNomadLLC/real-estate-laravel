<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Simple role check without Spatie (we'll fix roles later)
        $user = Auth::user();
        
        $stats = [
            'total_properties' => Property::count(),
            'for_rent' => Property::where('status', 'for_rent')->count(),
            'for_sale' => Property::where('status', 'for_sale')->count(),
            'featured' => Property::where('featured', true)->count(),
        ];

        $recentProperties = Property::with(['propertyType'])
            ->latest()
            ->take(5)
            ->get();

        // Get current user's properties
        $userProperties = Property::where('agent_id', Auth::id())
            ->with('propertyType')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard.index', compact('stats', 'recentProperties', 'userProperties'));
    }
}