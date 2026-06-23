<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    // Show the quote form
    public function create()
    {
        return view('quote');
    }

    // Save the quote to database
    public function store(Request $request)
    {
        // 1. Validate with your specific file types and size (25MB = 25600KB)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'freight_type' => 'nullable|string',
            'message' => 'nullable|string',
            'project_file' => 'nullable|file|mimes:jpg,jpeg,png,gif,mp4,mov,avi|max:25600', 
        ]);

        // 2. Handle the file upload
        if ($request->hasFile('project_file')) {
            // Store file in 'storage/app/public/project_files'
            $validated['project_file'] = $request->file('project_file')->store('project_files', 'public');
        }

        // 3. Save to database
        Quote::create($validated);

        // 4. Redirect back with success message
        // CORRECTED: Changed 'quote.create' to 'quote'
        return redirect()->route('quote')->with('success', 'Your quote request has been submitted successfully!');
    }

    // Show all quotes to the admin
    public function index()
    {
        $quotes = Quote::latest()->get(); // Get all quotes, newest first
        return view('quotes-index', compact('quotes'));
    }
}