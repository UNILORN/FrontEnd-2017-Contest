<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Console\Scheduling\Event;

class RfidPusher extends Event implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $message;

    /**
     * コンストラクタ
     * public権限のプロパティーが送信される
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }


    /**
     * 送信先のチャンネル
     * @return array
     */
    public function broadcastOn()
    {
        return ['test_channel'];
    }


}