<?php

namespace Frf\DiscordNotification\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Notifications\Notification;

class DiscordChannel
{
    public function send($notifiable, Notification $notification)
    {
        $discordMessage = $notification->toDiscord();

        $discordWebhook = $notifiable->destination['url'];

        (new Client())->post($discordWebhook, [
            RequestOptions::JSON => $discordMessage->toArray(),
        ]);
    }
}
