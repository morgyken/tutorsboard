<?php

namespace App\Console\Commands;

use App\Http\Controllers\DateTimeController;

use Illuminate\Console\Command;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateDeadline';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Used to update the question deadline';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
            /*
            * Update database after five seconds 
            */

            $app = new DateTimeController();

            /*
            * Update database after five seconds 
            */

            $app->UpdateDeadline();        
                 
    }
}
