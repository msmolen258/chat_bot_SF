<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Conversations\Howtofindus;
use App\Conversations\ApplyCampusJobs;
use BotMan\Drivers\Facebook\Extensions\Element as Element;
use BotMan\Drivers\Facebook\Extensions\ElementButton as ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate as ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate as GenericTemplate;
use BotMan\Drivers\Facebook\Extensions\ListTemplate as ListTemplate;


class BeforeApply extends Conversation
{

  public function run()
  {

    $this->bot->typesAndWaits(1);
    $this->bot->reply('Remember, the first impression can be made only once.🏆');
    $this->bot->reply('Therefore, you must be sure that you have done everything to make your application outstanding.⭐');
    $this->bot->reply('1️⃣ Make sure you have a professional and up to date CV.');
    $this->bot->reply('2️⃣ Research and tailor the information on your application to that of the company and job role.');
    $this->bot->reply('3️⃣ Write an appealing covering letter or application that will set you apart in the selection process.');
    $this->bot->reply(ButtonTemplate::create('Struggling? Check out these useful resources about cover letters and applications:')
      ->addButton(ElementButton::create('Cover Letter Builder')
        ->url('https://solentfutures.careercentre.me/u/64xrn0gb')
      )
      ->addButton(ElementButton::create('E-learning')
        ->url('https://solentfutures.careercentre.me/u/5354m1eh')
      )
      ->addButton(ElementButton::create('Application form tips')
        ->url('https://solentfutures.careercentre.me/u/qzd3th8z'))
      );
    $this->bot->reply(ButtonTemplate::create('4️⃣ Prepare for an interview by booking a mock interview via Solent Online Learning.')
      ->addButton(ElementButton::create('🗓 Book now')
        ->url('https://learn.solent.ac.uk/mod/feedback/view.php?id=1274421')
      ));
    $this->bot->reply('5️⃣ If you have more questions, please send us an inquiry or visit us at the information desk on week days for one-to-one advice.We are open Monday to Friday 11am-4pm.');

  }
}
