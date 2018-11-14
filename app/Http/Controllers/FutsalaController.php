<?php

namespace App\Http\Controllers;

use Blaze\Myst\Api\Objects\Update;
use Blaze\Myst\Support\Laravel\Facades\Bot;

class FutsalaController extends Controller
{
    public function webhook()
    {
        $update = Bot::handleUpdate(function (Update $update) {
        
        });
        return 'true';
    }
}