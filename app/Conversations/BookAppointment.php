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


class BookAppointment extends Conversation
{

  public function run()
  {

    $this->bot->reply('Do you need more in-depth advice? Book one-to-one appointment today.');
    $this->bot->reply('Advisers can be asked about postgraduate study, researching career options, decision making and more. We also offer mock interview practice.');
    $this->bot->typesAndWaits(2);
    $this->bot->reply(ButtonTemplate::create('Your appointment will last approximately 45 minutes and will be with one of Solent University’s qualified careers guidance practitioners.👩‍💼')
      ->addButton(ElementButton::create('🗓 Book now')
        ->url('https://learn.solent.ac.uk/mod/feedback/view.php?id=1274421')
      ));

    $this->bot->reply('Are you prospective student or Solent graduate? Please email 📧 careers@solent.ac.uk. ');



  }

}
