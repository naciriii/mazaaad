<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\product;


class BidExpiredForAll implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $product;
    public $has_bids;
    public $text;
    public $datetime;

    public function __construct(Product $product,$text,$has_bids)
    {
        //
        $this->product = $product;
        $this->has_bids = $has_bids;
        $this->text = $text;
        $this->datetime = date('Y-m-d H:i');
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastAs() {

        return 'bidExpiredForAllHandler';

    }
    public function broadcastOn()
    {
        return ['globalChannel'];
        
    }
     public function broadcastWith() {
        
        $this->product->picture = $this->product->mainPicture->first()->path;

        return ['product' => $this->product,'text'=>$this->text,'has_bids' => $this->has_bids,
         'datetime'=>$this->datetime];
        }

}
