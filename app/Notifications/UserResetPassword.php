<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserResetPassword extends Notification
{
    use Queueable;

    protected $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
                    ->subject('[Portalwebunimar] Aviso para restablecer contraseña.')
                    ->greeting('¡Hola, usuario unimarista!')
                    ->line('Hemos recibido una solicitud para reiniciar tu contraseña de usuario para ingresar a nuestro portal web. A continuación haz clic en el botón de abajo para restablecer tu contraseña.')
                    ->action('Reiniciar Contraseña', url('/password/reset/'.$this->token))
                    ->line('Si no has solicitado un cambio de contraseña, puedes ignorar o eliminar este e-mail.')
                    ->salutation("Saludos, Departamento Portal Web Unimar");
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
