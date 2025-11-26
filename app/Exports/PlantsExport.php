<?php

namespace App\Exports;

use App\Models\Plant;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlantsExport implements FromCollection
{
    protected $user_id;

    public function __construct($user_id = null)
    {
        $this->user_id = $user_id ?? Session::get('user_id');
    }

    public function collection()
    {
        return Plant::where('user_id', $this->user_id)->get();
    }
}
