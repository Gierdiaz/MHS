<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Inertia\Inertia;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::with('user')->get();

        return Inertia::render('Patients/Index', [
            'patients' => $patients,
        ]);
    }

    public function show($id)
    {
        $patient = Patient::with('user')->findOrFail($id);

        return Inertia::render('Patients/Show', [
            'patient' => $patient,
        ]);
    }
}
