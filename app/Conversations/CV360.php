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
use BotMan\Drivers\Facebook\Extensions\MediaTemplate as MediaTemplate;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Attachments\Image;


class CV360 extends Conversation
{

    public function run()
    {

      $this->bot->reply('✅ CV360 scores your CV against more than 50 checks that commonly trip up an ATS, annoy a hiring manager or get your CV deprioritised.');
      $this->bot->reply('✅ You get instant, detailed feedback so you can optimise your CV and significantly boost your chances of getting to interview.');
      $this->bot->reply(ButtonTemplate::create('👉 Check your CV now! You don\'t have to register to access the Solent Futures Online. Use your student email address and password to log in.')
        ->addButton(ElementButton::create('📈 Open CV360')
          ->url('https://solentfutures.careercentre.me/u/hv8oerbr')
        ));
      $this->bot->reply('👩‍💼 Remember to email solent.futures@solent.ac.uk or visit Solent Futures Centre for personalised feedback.');


    }


}
