<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DadJoke extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:dadjoke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for fetching a dadjoke.';

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
     * @return int
     */
    public function handle()
    {
        // We call dadjokes api
        $joke = Http::withHeaders([
            'Accept' => 'application/json'
        ])
        ->get('https://icanhazdadjoke.com/');

        echo  $joke['joke'] . "\n" ;

    }
}
