<?php
namespace frf\DiscordNotification;

use frf\DiscordNotification\Console\Commands\DiscordNotificationCommand;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DiscordNotificationCommand::class,
            ]);
        }
    }
    public function register()
    {
    }
}
