<?php

namespace App\Console\Commands;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;

class DatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all tables in database and run seeder';

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
        return [
            $this->call("migrate:fresh"),
            $this->call(DatabaseSeeder::class),
            $this->info("successfully man ;)"),
        ];
    }
}
