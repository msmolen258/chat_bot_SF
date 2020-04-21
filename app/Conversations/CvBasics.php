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


class CvBasics extends Conversation
{



  public function beforecv ()
  {
    $this->bot->reply('There are four main points that you should consider before you even start to write your CV.');
    $this->bot->typesAndWaits(1);
    $this->bot->reply('1️⃣ Remember the purpose of a CV - you should think of it as a sales pitch with you as the product!');
    $this->bot->typesAndWaits(2);
    $this->bot->reply('2️⃣ Be aware of what a hiring manager will do with the CV - most will skim read the CV for 30 seconds.⏱️');
    $this->bot->typesAndWaits(2);
    $this->bot->reply('3️⃣ Be aware of what an interviewer will do with the CV.');
    $this->bot->typesAndWaits(2);
    $this->bot->reply('4️⃣ Know exactly what the hiring manager wants ➡️ Be specific.');
  }

/*  public function cvsections ()
  {
    $image1 = new Image('https://i.ibb.co/zrtxzHF/Social-Media-Conference-You-Tube-Thumbnail.png');
    $message1 = OutgoingMessage::create()
      ->withAttachment($image1);
    $this->bot->typesAndWaits(1);
    $this->bot->reply($message1);
    $this->bot->reply('💡 Let\'s talk now about the sections that your CV should have.We will briefly list all the necessary sections, if you want to know more, click on the buttons below each section.');

    $this->bot->reply(ButtonTemplate::create('1. Personal Details: name, email address and mobile number.')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/2lvh9e8yr')
      )
    );

    $this->bot->typesAndWaits(1);
    $this->bot->reply(ButtonTemplate::create('2. Personal Profile: a short, summary of your CV. No longer than 5 lines!')
      ->addButton(ElementButton::create('✔️DOs & ❌DON\'Ts')
        ->url('https://solentfutures.careercentre.me/u/ttinhsfc'))
      ->addButton(ElementButton::create('📌Examples')
        ->url('https://solentfutures.careercentre.me/u/nwr8dgw0')
      )
    );

    $this->bot->typesAndWaits(1);
    $this->bot->reply(ButtonTemplate::create('3. Key Skills: Key Skills: use 2-4 bullet points and reinforce each one with an explanation of how you developed or used the skill. ')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/kt867zm8')
      )
    );

    $this->bot->typesAndWaits(1);
    $this->bot->reply(ButtonTemplate::create('4. Work Experience: for each job, state: company name / job title / dates/ what have you learned / achievements.')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/mhfc3ip3')
      )
    );

    $this->bot->typesAndWaits(1);
    $this->bot->reply(ButtonTemplate::create('5. Education and Qualifications: state your latest qualification first; summarise the oldest results.')
      ->addButton(ElementButton::create('📋 More tips')
        ->url('https://solentfutures.careercentre.me/u/w6ujesbf')
      )
    );

  }
*/
  public function run()
  {
    $this->bot->typesAndWaits(2);
    $this->bot->reply('A good CV is one of the key elements in being shortlisted for interview and, ultimately, being offered the job.');
    $this->beforecv();
  }
}
