<?php

namespace App\Jobs;

use App\Models\{Order,User};
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Notifications\{OrderClientStore,OrderAdminStore};
use Illuminate\Support\Facades\Notification;



class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        public Order $order,
    ) {}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $admins = User::where('admin', 1)->get();
        $this->order->notify(new OrderClientStore($this->order));
        Notification::send($admins, new OrderAdminStore($this->order));

        \Illuminate\Support\Facades\Log::info('Sending email for order ' . $this->order->id);
    }
}
