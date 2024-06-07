<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRequest;

class CustomerRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'destination' => 'required|string|max:255',
            'budget_range' => 'required|string|max:100',
            'language' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'transport_needed' => 'required|in:yes,no',
        ]);

        // Store the customer request in the database
        CustomerRequest::create([
            'destination' => $request->destination,
            'budget_range' => $request->budget_range,
            'language' => $request->language,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'transport_needed' => $request->transport_needed,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Request submitted successfully.');
    }
}