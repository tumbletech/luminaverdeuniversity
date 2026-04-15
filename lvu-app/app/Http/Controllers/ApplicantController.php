<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function store(Request $request)
    {
        Applicant::create([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'middle_name'       => $request->middle_name,
            'birth_date'        => $request->birth_date,
            'gender'            => $request->gender,
            'email'             => $request->email,
            'phone_number'      => $request->phone_number,
            'address'           => $request->address,
            'program_applied'   => $request->program_applied,
            'academic_level'    => $request->academic_level,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully');
    }
}
