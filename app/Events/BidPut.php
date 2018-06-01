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

class BidPut implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $notification;
  
    
    public $datetime;
    private $channels;
    public function __construct(Notification $notification, $channels)
    {
        //
        $this->datetime = date('Y-m-d H:i');
        $this->notification = $notification;

        $this->channels = $channels;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        
       return $this->channels;
    }
      public function broadcastAs() {

        return 'bidPutHandler';

    }
    public function broadcastWith() {
 $this->notification->product_id = $this->notification->bid->product->id;
 $this->notification->product_picture = $this->notification->bid->product->mainPicture->first()->path;
 $this->notification->bidPrice = $this->notification->bid->price;
        return ['notification' => $this->notification, 'datetime'=>$this->datetime];
        }
}
