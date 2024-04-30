<?php

namespace App\Http\Controllers;
use App\Models\TimeRecord;
use Illuminate\Http\Request;

class TimeRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hello');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $validatedData = $request->validate([
                'selectedProject' => 'required|string',
                'client' => 'required|string',
                'timeIn' => 'required|string',
                'timeOut' => 'required|string',
                'break' => 'nullable|integer',
                'workingHours' => 'required|string',
                'hourlyRate' => 'required|string',
                'description' => 'nullable|string',
                'notes' => 'nullable|string',
                'status' => 'required|boolean',
                'billable' => 'required|boolean',
            ]);
    
            $timeRecord = TimeRecord::create($validatedData);
    
            return response()->json(['message' => 'Time record created successfully', 'data' => $timeRecord], 201);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
