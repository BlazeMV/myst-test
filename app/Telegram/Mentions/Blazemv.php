<?php

namespace App\Telegram\Mentions;

use Blaze\Myst\Api\Requests\SendMessage;
use Blaze\Myst\Controllers\MentionController;

class Blazemv extends MentionController
{
    protected $name = 'blazemv';
    
    protected function handle()
    {
        $this->replyWith(SendMessage::make()->text("responding to @blazemv mention"));
    }
}