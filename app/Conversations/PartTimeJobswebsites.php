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


class PartTimeJobswebsites extends Conversation
{


  public function run()
  {
    $this->explainparttimejobs();
  }

  public function explainparttimejobs ()
  {

    $image1 = new Image('https://i.ibb.co/TkhNbpB/jobpref.png');

    $this->bot->typesAndWaits(2);
    $this->bot->reply(ButtonTemplate::create('1. Sign in to Solent’s exclusive jobs website: Solent Futures Online and set your job preferences.')
      ->addButton(ElementButton::create('Solent Futures Online')
      ->url('https://solentfutures.careercentre.me/u/vvc99er8')
    ));

    $message1 = OutgoingMessage::create()
      ->withAttachment($image1);

    $this->bot->typesAndWaits(1);
    $this->bot->reply($message1);
    $this->bot->typesAndWaits(1);

    $this->bot->reply('2. Make contact with places such as: Solent Creatives, Solent Productions, Solent Works and Re:So.');
    $this->bot->reply(ButtonTemplate::create('Click the links to find out more:')
      ->addButton(ElementButton::create('Solent Creatives')
      ->url('https://www.solentcreatives.co.uk/jobs/')
      )
      ->addButton(ElementButton::create('Solent Productions')
      ->url('https://www.solent.ac.uk/enterprises/solent-productions')
      )
      ->addButton(ElementButton::create('Re:So')
      ->url('https://www.solent.ac.uk/enterprises/reso/solent-students')
      )
    );
    $this->bot->typesAndWaits(1);
    $this->bot->reply('3. Update your profile on LinkedIn and use it to look for and apply for work. Make connections with companies, friends, teaching staff and family friends.');
    $this->bot->reply(ButtonTemplate::create('4. Some great resources to check out: ')
      ->addButton(ElementButton::create('Indeed.co.uk')
      ->url('https://www.indeed.co.uk/')
      )
      ->addButton(ElementButton::create('Monster.com')
      ->url('https://www.monster.com/')
      )
      ->addButton(ElementButton::create('Totaljobs.com')
      ->url('https://www.totaljobs.com/')
      )
    );
}

}
