# Laravel Discord Message
## _Send messsage to discord hook_

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Project created to decouple the sending of messages to disagree, and in this way keep the project without fixed dependency.
Sending messages through the discord hook can facilitate the communication of errors, warn when a tariff ends, among many benefits.


## Features

- Send message to channel discord with hook

## Future Features

- Send message to multiple channel discord with hook
- Integration Notification Laravel

## Installation

Laravel Discord Message requires [PHP Laravel](https://laravel.com) v8+ to run.

Install the package

```sh
composer require frf/discord-notification
```

After install - Create Discord Hook
## Open your channel config and create integration
![App Screenshot](https://github.com/frf/images-apps/blob/main/discord-message/integration.png?raw=true)
## Add name your hook and choose your channel
![App Screenshot](https://github.com/frf/images-apps/blob/main/discord-message/generate.png?raw=true)
## Put end of file ```.env``` configuration link hook in your ```.env```
```enverioment
DISCORD_HOOK=https://discord.com/api/webhooks/4334343/XaFx43434343lGHYvQHoQO0ykhGRibx3w
```

### Exemple to use command line
```sh
php artisan discord:send_message Teste
```
### Exemple to use injection service,
``Remembering that there is no better place on the controller 😅, I put it just as a practical example``

```php
<?php

use Frf\DiscordNotification\Services\DiscordService;
use Illuminate\Support\Facades\Route;

Route::get('/', function (DiscordService $discordService) {

    $discordService->sendMessage('Hello People!');

    return view('welcome');
});
```

## License

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

[laravel]: <https://getcomposer.org/>
[laravel]: <https://laravel.com/>
[dill]: <https://github.com/joemccann/dillinger>
[git-repo-url]: <https://github.com/joemccann/dillinger.git>
[john gruber]: <http://daringfireball.net>
[df1]: <http://daringfireball.net/projects/markdown/>
[markdown-it]: <https://github.com/markdown-it/markdown-it>
[Ace Editor]: <http://ace.ajax.org>
[node.js]: <http://nodejs.org>
[Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
[jQuery]: <http://jquery.com>
[@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
[express]: <http://expressjs.com>
[AngularJS]: <http://angularjs.org>
[Gulp]: <http://gulpjs.com>

[PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
[PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
[PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
[PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
[PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
[PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
