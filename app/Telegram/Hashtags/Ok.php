<?php

namespace App\Telegram\Hashtags;

use Blaze\Myst\Api\Requests\SendMessage;
use Blaze\Myst\Controllers\HashtagController;

class Ok extends HashtagController
{
    protected $name = 'ok';
    
    protected function handle($arguments)
    {
        $this->replyWith(SendMessage::make()->text("responding to #ok hashtag"));
    }
}