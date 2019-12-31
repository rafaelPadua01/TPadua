<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Newsletter;


class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;
	protected $emails;
    /**
     * cria uma variavel publica 
	 * que recebe os valores vindos do formulário
	 * 
     * @return void
     */
	
	
	 
	 /* cria uma nova instancia da mensagem */
	 
    public function __construct($emails)
    {
		
        $this->emails = $emails;
		
    }

    /**
     * Build the message.
     *
     * @return $this
     */
	 
	 #classe de envio de email
    public function build()
    {
		
		return $this->markdown('newsletter.mail')->from('rafael.f.p.faria@hotmail.com');
		
	}
}
