<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IntroductionController extends Controller
{
    /**
     * Display the introduction section data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $introduction = Introduction::first();
            
            if (!$introduction) {
                return response()->json([
                    'success' => false,
                    'message' => 'No introduction data found',
                ], 404);
            }

            // Transform the data for the frontend
            $data = [
                'intro_header' => $introduction->intro_header,
                'intro_description' => $introduction->intro_description,
                'intro_investment_insurance' => $introduction->intro_investment_insurance,
                'intro_image_url' => $introduction->intro_image 
                    ? Storage::url($introduction->intro_image)
                    : null,
            ];

            return response()->json([
                'success' => true,
                'data' => $data,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch introduction data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Only needed if you want to create through API
        // Implement as needed
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Only needed if you want to update through API
        // Implement as needed
    }
}