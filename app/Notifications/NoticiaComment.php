<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Comentarios;
use App\Noticia;

class NoticiaComment extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
	 protected $comentario;
	 
	 
	 
	 
    public function __construct(Comentarios $comentario)
    {
        //
		$this->comentario = $comentario;
		
		
	}

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [ 'database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
			return (new MailMessage)
					->subject("@Aliatpadua.com.br possui um Novo Comentário")
					->line("Novo comentário de: {$this->comentario->nome}")
					->line("Comentário: {$this->comentario->comentario}")
                    ->action('Ir para a notícia', url("/../noticias/{$this->comentario->id_noticia}/show"))
                    ->line('Obrigado !');
			
                    
    }
	
	
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
		/* Notifica usuarios da base de dados que possuem um novo comentario*/
        return [
				//
				'comentario' => $this->comentario,	
        ];
    }	
	
	/* Metodo de envio de notificações para usuario da base dedados
	* Apenas usuarios administradores 
	*/
	public function toDatabase($notifiable)
    {
		/* Notifica usuarios da base de dados que possuem um novo comentario*/
        return [
			'comentario' => $this->comentario,
        ];
    }
	
	
}
