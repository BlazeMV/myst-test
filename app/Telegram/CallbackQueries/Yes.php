<?php

namespace App\Telegram\CallbackQueries;

use Blaze\Myst\Api\Requests\AnswerCallbackQuery;
use Blaze\Myst\Controllers\CallbackQueryController;

class Yes extends CallbackQueryController
{
    protected $name = 'yes';
    
    protected function handle()
    {
        $this->replyWith(AnswerCallbackQuery::make()->text("Your Answer Was recorded"));
    }
}