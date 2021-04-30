<?php

if (! function_exists('NotificationHelper')) {
    /**
     * @param string $message
     *
     * @return void
     */
    function sendMessage(string $message): void
    {
        try {
            $client = new \GuzzleHttp\Client();
            $client->request('POST', env('DISCORD_HOOK'), [
                'headers' => [
                    'Content-type' => 'application/json',
                ],
                'content' => $message,
            ]);
        } catch (\Exception $exception) {
            dump($exception->getMessage());
        }
    }
}
