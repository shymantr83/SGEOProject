<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class sendMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $message;
    public $sender;
    public function __construct($message,$sender_id=null,$sender_name=null,$sender_image=null)
    {
        $this->message = $message;
        $this->sender=[
            'sender_id'=>$sender_id,
            'sender_name'=>$sender_name,
            'sender_image'=>$sender_image];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
        'chat-App',
        ];
    }
    // public function broadcastAs()
    // {
    //     return  'message';
    // }
}
