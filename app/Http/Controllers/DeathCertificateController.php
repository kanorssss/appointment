<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeathCertificateRequest;
use App\Models\DeathCertificate;
use Illuminate\Http\Request;

class DeathCertificateController extends Controller
{
    //

    public function storeDeath(DeathCertificateRequest $request)
    {
        $data = $request->validated();
        DeathCertificate::create($data);
        return response()->json(['message' => 'Appointment scheduled successfully.'], 200);
    }
}