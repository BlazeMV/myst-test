<?php

namespace App\Telegram\CallbackQueries;

use Blaze\Myst\Api\Requests\SendMessage;
use Blaze\Myst\Controllers\CallbackQueryController;

class Yes extends CallbackQueryController
{
    protected $name = 'yes';
    
    protected function handle($arguments)
    {
        $this->replyWith(SendMessage::make()->text("Your Answer Was recorded"));
    }
}