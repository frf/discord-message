<?php

namespace Frf\DiscordNotification\Services;

use Illuminate\Support\Facades\Http;

/**
 * Class SyncService
 * @package App\Services
 */
class DiscordService
{
    public function sendMessage(string $message): void
    {
        try {
            Http::withHeaders([
                'Content-type' => 'application/json',
            ])->post(env('DISCORD_HOOK'), [
                'content' => $message
            ]);
        } catch (\Exception $exception) {
            dump($exception->getMessage());
        }
    }

}
