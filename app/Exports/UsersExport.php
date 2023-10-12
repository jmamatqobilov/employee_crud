<?php

namespace App\Exports;

use App\Models\Application;
use GuzzleHttp\Psr7\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $users;
    public function __construct($users)
    {
        $this->users = $users;
    }


    public function collection()
    {
        return collect($this->users);
    }

    
}
