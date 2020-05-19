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


class CvBasics extends Conversation
{

  public function run ()
  {

    $this->bot->reply('A good CV is one of the key elements in being shortlisted for interview and, ultimately, being offered the job.');
    $this->bot->reply('There are four main points that you should consider before you even start to write your CV.');
    $this->bot->reply('1️⃣ Remember the purpose of a CV - you should think of it as a sales pitch with you as the product!');
    $this->bot->reply('2️⃣ Be aware of what a hiring manager will do with the CV - most will skim read the CV for 30 seconds.⏱️');
    $this->bot->reply('3️⃣ Be aware of what an interviewer will do with the CV.');
    $this->bot->reply('4️⃣ Know exactly what the hiring manager wants ➡️ Be specific.');
    $this->bot->reply(ButtonTemplate::create('Do you want to know how to structure your CV?')
      ->addButton(ElementButton::create('CV structure')
          ->payload('cvstructure')
          ->type('postback'))
      );

    //$image1 = new Image('https://i.ibb.co/zrtxzHF/Social-Media-Conference-You-Tube-Thumbnail.png');
    //$message1 = OutgoingMessage::create()
      //->withAttachment($image1);
    //$this->bot->typesAndWaits(1);
    //$this->bot->reply($message1);

  }

}
