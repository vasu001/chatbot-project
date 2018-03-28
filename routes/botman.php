<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hello', BotManController::class.'@chatConversation');

$botman->hears('Hi', BotManController::class.'@startConversation');
