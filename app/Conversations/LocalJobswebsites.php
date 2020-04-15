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


class LocalJobswebsites extends Conversation
{

  public function run()
  {
      $this->aboutlocaljobs();
  }

  public function aboutlocaljobs ()
  {
    $this->bot->typesAndWaits(1);
    $this->bot->reply('If you want to find a job locally, you should definitely check the following websites.');
    $this->bot->typesAndWaits(1);
    $this->bot->reply(ButtonTemplate::create('🏪 Local Shopping Centers:')
      ->addButton(ElementButton::create('West Quay')
      ->url('https://www.west-quay.co.uk/jobs')
      )
      ->addButton(ElementButton::create('Marlands')
      ->url('https://www.marlandsshoppingcentre.co.uk/Jobs')
      )
    );
    $this->bot->typesAndWaits(2);
    $this->bot->reply(ButtonTemplate::create('🏦 Local recruitment agencies:')
      ->addButton(ElementButton::create('Tate')
      ->url('https://www.tate.co.uk/')
      )
      ->addButton(ElementButton::create('Hays')
      ->url('https://www.hays.co.uk/local-jobs/southampton')
      )
      ->addButton(ElementButton::create('OfficeAngels')
      ->url('https://www.office-angels.com/')
      )
    );


  }

}
