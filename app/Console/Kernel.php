<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */


    // crontab -e
    // * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
    protected function schedule(Schedule $schedule)
    {
         $schedule->command('send:mails')->everyMinute();
         $schedule->command('echo:name Petko')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
