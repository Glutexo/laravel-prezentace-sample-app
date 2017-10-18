<?php

namespace App\Console\Commands;

use App\Jobs\SendMail;
use App\Mail\HelloWorld;
use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {what} {--sync}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends Hello World e-mail';

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
    public function handle(): void
    {
        $what = $this->argument('what');
        $mail = new HelloWorld($what);

        $job = SendMail::dispatch($mail);
        if ($this->option('sync')) {
            $job->onConnection('sync');
        }
    }
}
