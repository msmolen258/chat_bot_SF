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


class CVsections extends Conversation
{

  public function run ()
  {

    $this->bot->reply('💡 Let\'s talk now about the sections that your CV should have.We will briefly list all the necessary sections, if you want to know more, click on the buttons below each section.');

    $this->bot->reply(ButtonTemplate::create('1. Personal Details: name, email address and mobile number.')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/2lvh9e8yr')
      )
    );


    $this->bot->reply(ButtonTemplate::create('2. Personal Profile: a short, summary of your CV. No longer than 5 lines!')
      ->addButton(ElementButton::create('✔️DOs & ❌DON\'Ts')
        ->url('https://solentfutures.careercentre.me/u/ttinhsfc'))
      ->addButton(ElementButton::create('📌Examples')
        ->url('https://solentfutures.careercentre.me/u/nwr8dgw0')
      )
    );


    $this->bot->reply(ButtonTemplate::create('3. Key Skills: Key Skills: use 2-4 bullet points and reinforce each one with an explanation of how you developed or used the skill. ')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/kt867zm8')
      )
    );


    $this->bot->reply(ButtonTemplate::create('4. Work Experience: for each job, state: company name / job title / dates/ what have you learned / achievements.')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/mhfc3ip3')
      )
    );


    $this->bot->reply(ButtonTemplate::create('5. Education and Qualifications: state your latest qualification first; summarise the oldest results.')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/w6ujesbf')));

  }

}
