<?php

namespace App\Http\Controllers\Api;

use App\Models\CorporateService;

class CorporateServiceController extends Controller
{
    /**
     * Get all corporate services
     */
    public function index()
    {
        return CorporateService::all();
    }

    /**
     * Get featured corporate services
     */
    public function featured()
    {
        return CorporateService::where('is_featured', true)->get();
    }

    /**
     * Get a single service by slug
     */
    public function show($slug)
    {
        return CorporateService::where('slug', $slug)->firstOrFail();
    }
}