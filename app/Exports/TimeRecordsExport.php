<?php

namespace App\Exports;

use App\Models\TimeRecord;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TimeRecordsExport implements FromCollection, WithHeadings
{
    protected $timeRecords;

    public function __construct($timeRecords)
    {
        $this->timeRecords = $timeRecords;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->timeRecords;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id',
            'Selected Project',
            'Client',
            'Time In',
            'Time Out',
            'Time Break',
            'Working Hours',
            'Hourly Rate',
            'Description',
            'Notes',
            'Status',
            'Tags',
            'Billable',
        ];
    }
}
