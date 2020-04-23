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

//DIALOGFLOW Conversations

$botman->hears('campuswhat', BotManController::class.'@AboutCampusConversation')->middleware($dialogflow);
$botman->hears('cv360info', BotManController::class.'@CV360Conversation')->middleware($dialogflow);
$botman->hears('campusjobreg', BotManController::class.'@CampusRegConversation')->middleware($dialogflow);
$botman->hears('applycj', BotManController::class.'@CampusApplyConversation')->middleware($dialogflow);
$botman->hears('ptjobswebsite', BotManController::class.'@PartTimejobsConv')->middleware($dialogflow);
$botman->hears('cvbasics', BotManController::class.'@CVBasicsConversation')->middleware($dialogflow);
$botman->hears('bookappoint', BotManController::class.'@BookAppointmentConversation')->middleware($dialogflow);



// Other Conversations
$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->hears('Start|GET_STARTED', BotManController::class.'@Start');
$botman->hears('Campus', BotManController::class.'@CampusJConversation');

$botman->hears('Test', function ($bot) {
  $bot->reply(ButtonTemplate::create('Do you want to know more about BotMan?')
	->addButton(ElementButton::create('Tell me more')
	    ->type('postback')
	    ->payload('tellmemore')
	)
	->addButton(ElementButton::create('Show me the docs')
	    ->url('http://botman.io/')
	)
  );
});
