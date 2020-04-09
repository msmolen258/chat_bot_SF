<?php
use App\Http\Controllers\BotManController;

use BotMan\Drivers\Facebook\Extensions\Element as Element;
use BotMan\Drivers\Facebook\Extensions\ElementButton as ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate as ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate as GenericTemplate;
use BotMan\Drivers\Facebook\Extensions\ListTemplate as ListTemplate;


$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
  $bot->reply('Hello!');
});


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
