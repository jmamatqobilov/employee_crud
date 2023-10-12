<?php

namespace App\Listeners;

use App\Events\EmployeeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class EmployeeLogger
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmployeeEvent $event): void
    {

        // dd($event->app);
        DB::table('employesubcribes')->insert([
            "employe_name"=>$event->app,
            "note"=>"Ushbu xodim admin tomonidan yaratilindi"
        ]);
    }
}
