<?php

namespace frf\DiscordNotification\Console\Commands;

use Frf\DiscordNotification\Services\DiscordService;
use Illuminate\Console\Command;

class DiscordNotificationCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = "discord:send_message {message} ";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Send notifications to slack, discord....";


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(DiscordService $discordService)
    {
        $message = $this->argument('message');

        $discordService->sendMessage($message);
    }
}
