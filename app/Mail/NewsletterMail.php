<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Imagens;
use App\Noticia;
use App\User;


class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;
	public $emails;
	
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
		$imagens = Imagens::all();
		$noticias = Noticia::orderBy('id', 'desc')->limit(4,5)->get();
		$n_users = Newsletter::all();
		#$pathFile = public_path('app/public/imagem_noticias/');
		
		
		return $this->markdown('newsletter.mail', compact('imagens', 'noticias', 'n_users'))
				->from('tpadua7@gmail.com','NewsLetter')
				->subject('Newsletter AliasTPadua');
				
				
		
	}
}
