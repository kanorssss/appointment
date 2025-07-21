<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BirthCertificateRequest;
use App\Models\BirthCertificate;
use Illuminate\Http\Request;

class BirthCertificateController extends Controller
{
    //
    public function store(BirthCertificateRequest $request)
    {
        try {
            $validated = $request->validated();
            $certificate = BirthCertificate::create($validated);
            return response()->json($certificate, 201);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
