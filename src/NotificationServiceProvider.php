<?php
namespace Frf\DiscordNotification;

use Frf\DiscordNotification\Console\Commands\DiscordNotificationCommand;
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
