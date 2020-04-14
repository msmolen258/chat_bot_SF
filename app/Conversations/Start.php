<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use App\Conversations\CampusJConversation;
use App\Conversations\AboutCampusJobs;
use App\Conversations\ApplyCampusJobs;
use App\Conversations\CampusJobsPayment;
use App\Conversations\PartTimeJobswebsites;
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
            ->image('https://i.ibb.co/r0G4v0c/Kopia-Kopia-sundaes-gelato-loyalty-program.png')
            ->addButton(ElementButton::create('What is a campus job?')
                ->payload('cjabout')
                ->type('postback'))
            ->addButton(ElementButton::create('How to apply?')
                ->payload('cjapply')
                ->type('postback'))
            ->addButton(ElementButton::create('How to get paid?')
                ->payload('cjpayment')
                ->type('postback')),
          Element::create('Part Time Jobs')
            ->subtitle('Are you looking for part time jobs but you don\'t know where to start?')
            ->image('https://i.ibb.co/QdBFC8L/Kopia-Kopia-sundaes-gelato-loyalty-program-1.png')
            ->addButton(ElementButton::create('Where to look?')
                ->payload('ptjsearch')
                ->type('postback'))
             ->addButton(ElementButton::create('Local jobs')
                 ->payload('localptj')
                 ->type('postback'))
              ->addButton(ElementButton::create('Before you apply')
                  ->payload('beforeapply')
                  ->type('postback')),
          Element::create('Useful documents')
            ->subtitle('Find all useful documents and links in one place')
            ->image('https://i.ibb.co/ZL88TsL/DOCS.png')
            ->addButton(ElementButton::create('Campus Jobs - Claim Form')
                ->url('https://portal.solent.ac.uk/careers/work-while-studying/resources/claim-form.pdf?t=1586525158288'))
            ->addButton(ElementButton::create('CV guide')
                ->url('https://portal.solent.ac.uk/careers/cvadvice/resources/cv-guide.pdf'))
            ->addButton(ElementButton::create('Solent Futures Online')
                ->url('https://solentfutures.careercentre.me/u/qdvwuzkl')),
        ]);

      return $this->bot->ask($menu, function (Answer $answer) {
          if ($answer->isInteractiveMessageReply()) {
              if ($answer->getText() === 'What is a campus job?') {
                $this->bot->startConversation(new AboutCampusJobs());
              } elseif ($answer->getText() === 'How to apply?') {
                $this->bot->startConversation(new ApplyCampusJobs());
              } elseif ($answer->getText() === 'How to get paid?') {
                $this->bot->startConversation(new CampusJobsPayment());
              } elseif ($answer->getText() === 'Where to look?') {
                $this->bot->startConversation(new PartTimeJobswebsites());
              }
          }
      });
    }
}
