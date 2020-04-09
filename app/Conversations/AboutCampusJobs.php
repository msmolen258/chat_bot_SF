<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\Drivers\Facebook\Extensions\Element as Element;
use BotMan\Drivers\Facebook\Extensions\ElementButton as ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate as ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate as GenericTemplate;
use BotMan\Drivers\Facebook\Extensions\ListTemplate as ListTemplate;


class AboutCampusJobs extends Conversation
{

  public function run()
  {
      $this->explaincampusjobs();
  }

  public function explaincampusjobs ()
  {

    $this->bot->reply('‘Campus Jobs’ is the University’s student recruitment service for opportunities on campus.');
    $this->bot->typesAndWaits(1);
    $this->bot->reply('There are many different types of campus jobs, for example: student ambassadors, event staff, but also research assistants, admin staff and many more.');
    $this->bot->typesAndWaits(2);

    $menu = GenericTemplate::create('Solent Futures Online -> Campus Jobs')
      ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
      ->addElements([
        Element::create('Solent Futures Online -> Campus Jobs')
          ->subtitle('Click the button below to view currently available campus jobs.')
          ->addButton(ElementButton::create('Available Campus Jobs')
              ->url('https://solentfutures.careercentre.me/u/kddij0g9'))
        ]);

     $this->bot->reply($menu);
     $this->bot->reply('Remember, you don\'t have to register to access the Solent Futures Online. Use your student email address and password to log in.');
  }



}
