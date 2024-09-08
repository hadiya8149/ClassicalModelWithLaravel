<?php

namespace App\Jobs;


use App\Mail\Promotion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendBulkEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected array $data;
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $emailContent = $this->data['content'];
        $subject = $this->data['subject'];
        // $emailList = $this->data['emails'];

        // for ($x=0;$x<3;$x++) {/
            Mail::to("hadiya8149@gmail.com")->send(new Promotion($emailContent, $subject));
        // }
    }
}
