<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\RespostaComentario;

class RespostaComment extends Notification
{
    use Queueable;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */

    protected $resposta;
    public function __construct(RespostaComentario $resposta)
    {
        $this->resposta = $resposta;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','mail'];
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
                    ->subject('@Aliatpadua.com.br possui uma Nova Resspota em um Comentário')
                    ->line('Novo comentário de: {$this->resposta->nome}')
                    ->line("Comentário: {$this->resposta->resposta}")
                    ->action('Ir para a notícia', url("/../noticias/{$this->resposta->id_noticia}/show"))
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
            'resposta' => $this->resposta,
        ];
    }

    public function toDatabase($notifiable)
    {
        return [
            'resposta' => $this->resposta,
        ];
    }
}
