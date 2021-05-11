<?php

namespace Frf\DiscordNotification\Discord;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Discord extends DiscordMessage
{
    public function send($discordHook)
    {
        $uri = ($discordHook) ?: env('DISCORD_HOOK');

        (new Client())->post($uri, [
            RequestOptions::JSON => $this->toArray(),
        ]);
    }
}
