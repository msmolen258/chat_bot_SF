<?php
use App\Http\Controllers\BotManController;

use BotMan\Drivers\Facebook\Extensions\Element as Element;
use BotMan\Drivers\Facebook\Extensions\ElementButton as ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate as ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate as GenericTemplate;
use BotMan\Drivers\Facebook\Extensions\ListTemplate as ListTemplate;
use BotMan\BotMan\Middleware\Dialogflow;

$botman = resolve('botman');

$dialogflow = Dialogflow::create('b19418a92d6e42deb5c3a9b7ea46f323')->listenForAction();

$botman->middleware->received($dialogflow);

// welcome
//$botman->hears('input.welcome', function ($bot) {
//    $bot->reply('Hi! How can I help you today?');
//})->middleware($dialogflow);;

$botman->hears('input.welcome', BotManController::class.'@Start')->middleware($dialogflow);

// Start
$botman->hears('Start|GET_STARTED', BotManController::class.'@Start');

//DIALOGFLOW intents -  Conversations

$botman->hears('campuswhat', BotManController::class.'@AboutCampusConversation')->middleware($dialogflow);
$botman->hears('cv360info', BotManController::class.'@CV360Conversation')->middleware($dialogflow);
$botman->hears('campusjobreg', BotManController::class.'@CampusRegConversation')->middleware($dialogflow);
$botman->hears('applycj', BotManController::class.'@CampusApplyConversation')->middleware($dialogflow);
$botman->hears('ptjobswebsite', BotManController::class.'@PartTimejobsConv')->middleware($dialogflow);
$botman->hears('cvbasics', BotManController::class.'@CVBasicsConversation')->middleware($dialogflow);
$botman->hears('bookappoint', BotManController::class.'@BookAppointmentConversation')->middleware($dialogflow);


/// Fallback
$botman->fallback(function($bot) {
    $bot->reply('I\'m sorry, I\'m just a bot. I don\'t always understand what you are asking. If you have an important question, write us an email: 📨solent.futures@solent.ac.uk or visit us at the Solent Futures Center (RM001). ⌚ Monday-Friday 11am-4pm.');
});
