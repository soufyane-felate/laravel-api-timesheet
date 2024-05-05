<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'project' => 'required|string',
            'client' => 'required|string',
            'timeIn' => 'required|date',
            'timeOut' => 'required|date',
            'hourlyRate' => 'required|numeric',
            'workingHours' => 'required|string',
            'amount' => 'required|numeric',
            'formattedDateTime' => 'required|string',
            'uniqueCode' => 'required|string',
        ]);

        $invoice = Invoice::create($data);

        return response()->json(['message' => 'Invoice created successfully', 'invoice' => $invoice], 201);
    }
}
