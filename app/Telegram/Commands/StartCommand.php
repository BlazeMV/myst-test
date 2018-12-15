<?php

namespace App\Telegram\Commands;

use App\Telegram\Conversations\ScheduleConversation;
use Blaze\Myst\Api\Requests\GetChat;
use Blaze\Myst\Api\Requests\LeaveChat;
use Blaze\Myst\Api\Requests\Markup\Button;
use Blaze\Myst\Api\Requests\Markup\Keyboard;
use Blaze\Myst\Api\Requests\SendMessage;
use Blaze\Myst\Controllers\CommandController;

class StartCommand extends CommandController
{

    protected $name = "start";
    
    protected $description = "";
    
    protected $aliases = ['help'];
    
    protected $position = '0';
    
    protected $standalone = true;
    
    protected $case_sensitive = true;
    
    protected $engages_in = [
        'private'       => true,
        'group'         => true,
        'supergroup'    => true,
        'channel'       => true
    ];

    public function handle()
    {
        $result = $this->replyWith(
            SendMessage::make()
                ->text('hellosdfasef')
                ->parseHTML()
                ->markup(
                    Keyboard::make(true)
                        ->addRow(
                            Button::make(true)
                                ->setText("yes")
                                ->callbackData("yes"),
                            Button::make(true)
                                ->setText("no")
                                ->callbackData('no')
                        )
                        ->addRow(
                            Button::make(true)
                                ->setText("maybe")
                                ->callbackData("maybe")
                        )
                )
        );
//        ScheduleConversation::init($this->getUpdate());
    }
}