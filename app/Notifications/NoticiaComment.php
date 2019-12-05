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
        return ['mail'];
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
					->subject("Novo Comentário")
					->line("Novo comentário de: {$this->comentario->nome}")
					->line("Ele disse: {$this->comentario->comentario}")
                    ->action('Ir para a notícia', url("noticias/{$this->comentario->id_noticia}/show"))
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
        return [
            //
        ];
    }
}
