<?php

namespace App\Telegram\Conversations;

use Blaze\Myst\Api\Requests\SendMessage;
use Blaze\Myst\Controllers\ConversationController;

class ScheduleConversation extends ConversationController
{
    protected $name = 'schedule';
    
    
    public function handle($step)
    {
        switch ($step) {
            case 2:
                $res = $this->replyWith(SendMessage::make()->text("ghusdjfg"));
                $this->nextStep($res->getResponseObject()->getId());
            case 3:
                $res = $this->replyWith(SendMessage::make()->text("ghusdjsdvgsdffg"));
                $this->terminate();
        }
    }
}