<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MarriageCertificateRequest;
use App\Models\MarriageCertificate;
use Illuminate\Http\Request;

class MarriageCertificateController extends Controller
{
    //
    public function storeMarriage(MarriageCertificateRequest $request)
    {

        try {
            $validated = $request->validated();
            // Assuming you have a MarriageCertificate model to handle the data
            $certificate = MarriageCertificate::create($validated);
            return response()->json($certificate, 200);
        } catch (\Exception $e) {
            // Handle the exception, log it, or return an error response
            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }
}