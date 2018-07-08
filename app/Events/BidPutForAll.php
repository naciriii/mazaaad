<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Notification;

class BidPutForAll implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
     public $notification;
  
    
    public $datetime;
    public function __construct(Notification $notification)
    {
        //
        $this->datetime = date('Y-m-d H:i');
        $this->notification = $notification;

    }
     public function broadcastAs() {

        return 'bidPutForAllHandler';

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['globalChannel'];
    }

     public function broadcastWith() {
 $this->notification->product_id = $this->notification->bid->product->id;
 $this->notification->product_picture = $this->notification->bid->product->mainPicture->first()->path;
 $this->notification->bidPrice = $this->notification->bid->price;
        return ['notification' => $this->notification, 'datetime'=>$this->datetime];
        }
}
