<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderClientStore extends Notification
{
    use Queueable;

    public $order;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // $logo = asset('/logo/logo.png');

        $pdfInvoice = \App\Services\OrderPdf::pdfInvoice($this->order->id);

        return (new MailMessage)
            ->subject('Order number: ' . $this->order->numeric_series)
            ->markdown('emails.newOrderClient', [
                'order' => $this->order,
                // 'logo' => $logo,
            ])->attachData($pdfInvoice->output(), 'Invoice.pdf', [
                'mime' => 'application/pdf',
            ]);
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
            'data' => $this->order
        ];
    }

}
