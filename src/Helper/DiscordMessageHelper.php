<?php

namespace Frf\DiscordNotification\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Carbon\Carbon;

class DiscordMessageHelper
{
    public static function send(string $title, array $descriptions, string $footer = "Footer")
    {
        $discordMessage =  (new DiscordMessage())
            ->error()
            ->title($title)
            ->description($descriptions)
            ->footer($footer)
            ->timestamp(Carbon::now());

        (new Client())->post(env('DISCORD_HOOK'), [
            RequestOptions::JSON => $discordMessage->toArray(),
        ]);
    }
}
