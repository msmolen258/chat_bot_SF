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


class ApplyCampusJobs extends Conversation
{

  public function run()
  {
    $image1 = new Image('https://i.ibb.co/WknVbnP/applycamp1.png');
    $image2 = new Image('https://i.ibb.co/PjT5ZWm/applycamp2.png');
    $image3 = new Image('https://i.ibb.co/hDqxhPZ/applycamp3.png');
    // Step 1
    $this->bot->reply('1. Select the campus job you want to apply for, click “View”.');

    $message1 = OutgoingMessage::create()
      ->withAttachment($image1);
    $this->bot->reply($message1);


    // Step 2
    $this->bot->reply('2. Then click "-> Apply"');
    $message2 = OutgoingMessage::create()
      ->withAttachment($image2);
    $this->bot->reply($message2);



    //Step 3
    $this->bot->reply('3. Finally, attach your CV, cover letter and press “Apply now”');
    $message3 = OutgoingMessage::create()
      ->withAttachment($image3);
    $this->bot->reply($message3);

    // Reminder about SFO

    $this->bot->reply(ButtonTemplate::create('Remember, all opportunities are avalible on Solent Futures Online.')
      ->addButton(ElementButton::create('Browse campus jobs')
        ->url('https://solentfutures.careercentre.me/u/2er27sjg')
      )
      ->addButton(ElementButton::create('Browse all jobs')
        ->url('https://solentfutures.careercentre.me/u/rrlk5blo')));

  }

}
