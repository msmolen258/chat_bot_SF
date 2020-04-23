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


class CampusJobsPayment extends Conversation
{

    public function run()
    {

      // Step 1 : registration
      $this->bot->typesAndWaits(2);
      $this->bot->reply(ButtonTemplate::create('If you\'re not registered yet, click the link below to start registration. 📢 You will not be paid until you have done this.')
        ->addButton(ElementButton::create('Online Registration: Campus Jobs')
          ->url('https://recruitment.solent.ac.uk/campus_jobs-3588.html')
        ));


      $this->bot->typesAndWaits(3);
      $this->bot->reply(ButtonTemplate::create('To complete the registration process you are also required to complete a bank details, tax declaration form and sign the terms and conditions and return it to Payroll -RM304. You will receive them by email.')
        ->addButton(ElementButton::create('Campus Jobs T&Cs')
          ->url('https://portal.solent.ac.uk/careers/work-while-studying/resources/campus-jobs-terms-and-conditions.pdf')
        ));


      $this->bot->typesAndWaits(2);
      $this->bot->reply(ButtonTemplate::create('When your registration is confirmed, you must complete the Campus Jobs monthly claim form. ⚠ If you are a non-EEA student you must use the International Students claim form. ')
        ->addButton(ElementButton::create('Claim Form')
          ->url('https://portal.solent.ac.uk/careers/work-while-studying/resources/claim-form.pdf?t=1586525158288')
        )
        ->addButton(ElementButton::create('International students Claim Form')
          ->url('https://portal.solent.ac.uk/careers/work-while-studying/resources/claim-form.pdf?t=1586525158288')
        )
      );
      $this->bot->typesAndWaits(2);
      $this->bot->reply('Once completed and signed, your supervisor will need to submit the form directly to payroll (RM304) before the payroll deadline.');

    }





}
