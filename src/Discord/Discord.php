<?php

namespace Frf\DiscordNotification\Discord;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Discord extends DiscordMessage
{
    public function send()
    {
        (new Client())->post(env('DISCORD_HOOK'), [
            RequestOptions::JSON => $this->toArray(),
        ]);
    }
}
