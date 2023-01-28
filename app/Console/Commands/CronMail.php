<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CronMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = array('data'=>'Cron Testing');
        Mail::send('mail',$data,function($message){
            $message->to('amrutavandkar1@gmail.com')
            ->subject('Cron Testing Mail Example');
        });
    }
}
