<?php

namespace App\Telegram\Texts;

use Blaze\Myst\Api\Requests\SendMessage;
use Blaze\Myst\Controllers\TextController;

class Hello extends TextController
{
    protected $name = 'hello';
    
    protected $case_sensitive = false;
    
    protected $position = '*';
    
    protected $standalone = false;
    
    protected function handle($arguments)
    {
        $this->replyWith(SendMessage::make()->text("responding to hello message"));
    }
}