<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyAccountNotification extends Notification
{
    use Queueable;

    public $fields;

    /**
     * Create a new notification instance.
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Demande de vérification')
            ->line('Nouvelle demande de vérification de ' . $this->fields['nom'] . ' ' . $this->fields['prenom'])
            ->line('Connectez-vous pour procéder à sa vérification de compte')
            ->action('Se Connecter', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
