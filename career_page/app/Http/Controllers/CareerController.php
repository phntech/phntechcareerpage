<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Applicant;

class CareerController extends Controller
{
    public function submitApplication(Request $request)
    {
        // return "formsubmitted";

        Applicant::create(array_merge(
            $request->all(),
        )
        );

        return "form submittrd";
    }
}
