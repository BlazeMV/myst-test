<?php

namespace App\Telegram\Conversations;

use Blaze\Myst\Controllers\ConversationController;

class ScheduleConversation extends ConversationController
{
    protected $name = 'schedule';
    
    
    public function handle($arguments)
    {
        dd($arguments);
    }
}