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
        $timeRecords = TimeRecord::all();
        return response()->json(['data' => $timeRecords], 200);
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
                'timebreak' => 'nullable|integer',
                'workingHours' => 'required|string',
                'hourlyRate' => 'required|string',
                'description' => 'nullable|string',
                'notes' => 'nullable|string',
                'tags' => 'nullable|string',
                'status' => 'nullable|string',
                'billable' => 'required|boolean',
            ]);
    
            $timeRecord = TimeRecord::create($validatedData);
    
            return response()->json(['message' => 'Time record created successfully', 'data' => $timeRecord], 201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Fetch all time records
        $timeRecords = TimeRecord::all();
    
        // Check if any records were found
        if ($timeRecords->isEmpty()) {
            // If no records found, return a JSON response with an empty array
            return response()->json(['data' => []], 200);
        }
    
        // If records found, return them as JSON
        return response()->json(['data' => $timeRecords], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $timeRecord = TimeRecord::findOrFail($id);

        $validatedData = $request->validate([
            'selectedProject' => 'required|string',
            'client' => 'required|string',
            'timeIn' => 'required|string',
            'timeOut' => 'required|string',
            'timebreak' => 'nullable|integer',
            'workingHours' => 'required|string',
            'hourlyRate' => 'required|string',
            'description' => 'nullable|string',
            'notes' => 'nullable|string',
            'status' => 'nullable|string',
            'tags' => 'nullable|string',
            'billable' => 'required|boolean',
        ]);

        $timeRecord->update($validatedData);

        return response()->json(['message' => 'Time record updated successfully', 'data' => $timeRecord], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $timeRecord = TimeRecord::findOrFail($id);
        $timeRecord->delete();
        return response()->json(['message' => 'Time record deleted successfully'], 200);
    }
}
