<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\NewsletterUpdated;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class SendNewsletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $title, $link;

    /**
     * Create a new job instance.
     */
    public function __construct($title, $link)
    {
        $this->title = $title;
        $this->link = $link;
    }


    /**
     * Execute the job.
     */
    public function handle()
    {
        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)
                ->send(new NewsletterUpdated($this->title, $this->link, $subscriber->email));
        }
    }
}
