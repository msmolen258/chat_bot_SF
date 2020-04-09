<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use App\Conversations\CampusJConversation;
use App\Conversations\AboutCampusJobs;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\Drivers\Facebook\Extensions\Element as Element;
use BotMan\Drivers\Facebook\Extensions\ElementButton as ElementButton;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate as ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate as GenericTemplate;
use BotMan\Drivers\Facebook\Extensions\ListTemplate as ListTemplate;


class Start extends Conversation
{
    public function run()
    {
        $this->welcome();
    }

    private function welcome()
    {
      $this->bot->reply('Hi!👋 I\'m Solent Futures Bot and I\'m here to help you!');
      $this->addMenu();
    }


    private function addMenu()
    {
      $menu = GenericTemplate::create()
        ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
        ->addElements([
          Element::create('Campus Jobs')
            ->subtitle('All about campus jobs at Solent')
            ->image('https://i.ibb.co/tsRSgnz/Kopia-Kopia-sundaes-gelato-loyalty-program.png')
            ->addButton(ElementButton::create('What is a campus job?')
                ->payload('cjabout')
                ->type('postback'))
            ->addButton(ElementButton::create('Hours claim form')
                ->url('https://portal.solent.ac.uk/careers/work-while-studying/resources/claim-form.pdf?t=1586368434064'))
            ->addButton(ElementButton::create('Find campus jobs')
                ->url('https://solentfutures.careercentre.me/u/kddij0g9')
            ),
            Element::create('BotMan Laravel Starter')
             ->subtitle('CV Tips')
             ->image('https://i.ibb.co/QdBFC8L/Kopia-Kopia-sundaes-gelato-loyalty-program-1.png')
             ->addButton(ElementButton::create('visit')
                 ->url('https://github.com/mpociot/botman-laravel-starter')
             ),
        ]);

      return $this->bot->ask($menu, function (Answer $answer) {
          if ($answer->isInteractiveMessageReply()) {
              if ($answer->getText() === 'What is a campus job?') {
                $this->bot->startConversation(new AboutCampusJobs());
              } else {
                $this->say(Inspiring::quote());
              }
          }
      });
    }
}
