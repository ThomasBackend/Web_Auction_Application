<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Product;

class Kernel extends ConsoleKernel
{
     /**
     * Define the application's command schedule.
     */
   
    protected function schedule(Schedule $schedule)
{
    $schedule->call(function () {
        Product::where('start_date', '<=', now())
               ->where('end_date', '>=', now())
               ->update(['active' => 1]);

        Product::where('end_date', '<', now())
               ->update(['active' => 0]);
    })->everyMinute();
}
   
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
