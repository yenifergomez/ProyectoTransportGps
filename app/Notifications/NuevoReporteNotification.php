<?php

namespace App\Notifications;

use App\Models\Report;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NuevoReporteNotification extends Notification
{
    use Queueable;

    protected $reporte;

    public function __construct(Report $reporte)
    {
        $this->reporte = $reporte;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Se ha recibido un nuevo reporte.')
            ->line('Nombre: ' . $this->reporte->nombre)
            ->line('Reporte: ' . $this->reporte->reporte)
            ->action('Ver Reporte', url('/ruta/para/ver/reporte'))
            ->line('Gracias por usar nuestra aplicación.');
    }

    public function toArray($notifiable)
    {
        return [
        ];
    }
}
