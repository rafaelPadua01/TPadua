<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\NewsletterMail;
use App\NewsLetter;
use Mail;


class SendNewsLetterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	protected $emails;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emails)
    {
        //
		$this->emails = $emails;
		#dd($this->emails);
		
		
	
    }
	

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
		$email = new NewsletterMail($this->emails);
		foreach($this->emails as $e)
		{
			for($i=0; $i <= count($e); $i++)
			{
				
				if($i > 0)
				{
					Mail::to($e)->send($email);
					$i++;
				}
				
				
			}
		}
		
		
		
    }
}
