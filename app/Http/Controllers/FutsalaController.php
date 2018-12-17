<?php

namespace App\Http\Controllers;

use Blaze\Myst\Api\Objects\Update;
use Blaze\Myst\Laravel\Facades\Bot;

class FutsalaController extends Controller
{
    public function webhook()
    {
//        return '';
        $update = Bot::handleUpdate(function (Update $update) {
        
        });
        return 'true';
    }
}