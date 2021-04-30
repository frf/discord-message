<?php

namespace frf\DiscordNotification\Console\Commands;

use Carbon\Carbon;
use Frf\DiscordNotification\Services\DiscordService;
use Illuminate\Console\Command;

class DiscordNotificationCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = "discord:send_message {message} {type?}";

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
        $type = $this->argument('type') ?: 'success';

        $discordService
            ->title('Alert')
            ->description($message)
            ->timestamp(Carbon::now());

        if ($type == 'success') {
            $discordService->success();
        }
        if ($type == 'warning') {
            $discordService->warning();
        }
        if ($type == 'error') {
            $discordService->error();
        }

        $discordService->send();
    }
}
