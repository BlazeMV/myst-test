<?php

namespace App\Telegram\Conversations;

use Blaze\Myst\Api\Requests\Markup\ForceReply;
use Blaze\Myst\Api\Requests\SendMessage;
use Blaze\Myst\Controllers\ConversationController;

class ScheduleConversation extends ConversationController
{
    protected $name = 'schedule';
    
    public function step1()
    {
        $res = $this->replyWith(SendMessage::make()->text("hello " . $this->getUpdate()->getFrom()->getFirstName() . ". lets get started.\nWhere will the event be held?")->markup(ForceReply::make()->selective()));
        if ($res->isOk()) $this->nextStep($res->getResponseObject()->getId());
    }
    
    public function step2()
    {
        $res = $this->replyWith(SendMessage::make()->text("Okay. " . $this->getUpdate()->getMessage()->getText() . " it is. Now give me a date and a time for the event.")->markup(ForceReply::make()->selective()));
        $this->nextStep($res->getResponseObject()->getId());
    }
    
    public function step3()
    {
        $res = $this->replyWith(SendMessage::make()->text("Great. Event is scheduled."));
        $this->nextStep($res->getResponseObject()->getId());
        dd($this->getResponses());
        
        $this->terminate();
    }
}