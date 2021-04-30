<?php

namespace Frf\DiscordNotification\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class DiscordMessageHelper extends DiscordMessage
{
    public function send()
    {
        (new Client())->post(env('DISCORD_HOOK'), [
            RequestOptions::JSON => $this->toArray(),
        ]);
    }
}
