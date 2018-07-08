<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Product;

class BidExpire implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $product;
    public $channels;
    public $has_bids;
    public $text;
    public $datetime;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Product $product,$text,$has_bids, $channels)
    {
        //
        $this->product = $product;
        $this->datetime = date('Y-m-d H:i');
        $this->channels = $channels;
        $this->text = $text;
        $this->has_bids = $has_bids;
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

        return 'bidExpireHandler';

    }

      public function broadcastWith() {
         $this->product->picture = $this->product->mainPicture->first()->path;


        return ['product' => $this->product,'text'=>$this->text,'has_bids'=>$this->has_bids, 'datetime'=>$this->datetime];
        }

}
