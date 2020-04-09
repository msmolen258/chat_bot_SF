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
    $this->bot->reply('1. Select the campus job you want to apply for, click “View”.');
    $this->bot->typesAndWaits(2);
    $this->bot->reply('2. Then click "-> Apply"');
    $this->bot->typesAndWaits(2);
    $this->bot->reply('3. Finally, attach your CV, cover letter and press “Apply now”');




  }




}
